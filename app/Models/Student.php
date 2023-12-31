<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Cast\Bool_;

class Student extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $with = ['program'];

    protected $fillable = [
        'firstname',
        'lastname',
        'middlename',
        'student_id_no',
        'program_id',
        'verified_at',
        'password',
        'image',
        'status',
        'email',
        'address',
        'phone'
    ];

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    /**
     * custom method, returns true if verified
     *
     * @return bool
     */
    public function isVerified(): bool
    {
        return $this->verified_at != null;
    }

    public function fullname(): string
    {
        return $this->middlename ? $this->firstname . ' ' . $this->middlename[0] . '.' . ' ' . $this->lastname : $this->firstname . ' ' . $this->lastname;
    }

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'verified_at' => 'datetime'
    ];

    /*
    * Hash password automatically when creating / updating
    */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
}
