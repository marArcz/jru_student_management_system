<div id="id-form" class="my-0" style="width:750px;margin: auto;">
    <div class="printable gx-0 " id="front-id">
        <div class="">
            <div class="card border rounded-1 shadow-sm student-id-card mx-auto my-3 front">
                <div class="card-header id-header p-0">
                    {{-- <img src="{{ asset($student->image) }}" class="border img-fluid student-img img-thumbnail" /> --}}
                    <div class="student-img rounded-circle border-3 border-blue-100 shadow-sm" style="background-image: url('{{asset($student->image)}}')"></div>
                </div>
                <div class="card-body py-2 position-relative id-body">
                    <div class="text-center">
                        <p class="fs-3 fw-bold mb-1">
                            {{ $student->fullname() }}
                        </p>
                        <p class="text-secondary">Name of Student</p>
                    </div>
                    <div class="row align-items-end justify-content-around w-100 mt-5">
                        <div class="col text-center">
                            <div class="mx-1">
                                <hr class="mb-0">
                                <p class="mt-1 mb-0  px-2 text-center">
                                    <span>STUDENT'S SIGNATURE</span>
                                </p>
                            </div>
                        </div>
                        <div class="col text-end">
                            <div>
                                <p class="fw-bold mb-0 fs-3">{{ $student->program->name }}</p>
                                <p class=" mb-0">
                                    <small>Program</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="mt-4 text-center mx-auto position-relative">
                        <img src="{{asset('images/signature.png')}}" class=" position-absolute signature" alt="">
                        <p class="text-center fs-5 mb-1 text-uppercase fw-bold">RIO MAE VILLALON</p>
                        <p class="text-center">
                            <span>REGISTRAR III</span>
                        </p>
                    </div>
                    <br>
                    <div class="id-footer shadow-sm rounded-0 border-bottom border-start border-end d-block p-0 mt-3">
                        <div class="px-4">
                            <div class="flex items-center justify-between w-100">
                                <div>
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('images/jru-logo.png') }}" class="w-[80px]" alt="">
                                        <p class="my-0">Jack Roberto<br>University</p>
                                    </div>
                                </div>
                                <div>
                                    <p class=" mb-0 text-blue-600">{{ $student->student_id_no }}</p>
                                    <p class="mb-0 mt-1 text-secondary">ID NUMBER</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="mt-2">
                            <img src="{{ asset('images/footer.png') }}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center gx-0 d-none" style="width:100%;margin: auto;" id="back-id">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header border-0 py-3">
                    </div>
                    <div class="card-body ">
                        <p class="text-center">Not Available yet</p>

                    </div>
                    <div class="card-footer bg border-0 py-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
