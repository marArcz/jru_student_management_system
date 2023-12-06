<div id="id-form" class="my-0" style="width:750px;margin: auto;">
    <div class="printable gx-0 " id="front-id">
        <div class="">
            <div class="card rounded-4 shadow-sm student-id-card mx-auto my-3 front">
                <div class="card-header id-header p-0">
                    <div class="mt-3 position-relative inner">
                        <img class="id-logo img-fluid" src="{{ asset('images/catsu.png') }}" />
                        <div class="text text-uppercase">
                            <p class="mb-0 f-roboto">Republic of the philippines</p>
                            <p class="my-1 f-roboto fw-bold">Catanduanes state Univerity</p>
                            <p class="mb-0 f-roboto">Virac, catanduanes</p>
                        </div>
                    </div>
                </div>
                <div class="card-body py-4 position-relative id-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="col-9">
                                <img src="{{ asset($student->image) }}" class="border img-fluid" />
                            </div>
                            <br><br>
                            <div class="">
                                <hr class="mb-0">
                                <p class="my-0 id-label text-center">
                                    <small>STUDENT'S SIGNATURE</small>
                                </p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <p class="fw-bold mb-0 fs-5 f-roboto">
                                    {{ $student->firstname . ' ' . $student->lastname }}</p>
                                <p class="id-label  f-roboto">
                                    <small>Name of Student</small>
                                </p>
                            </div>
                            <div>
                                <p class="fw-bold mb-0 fs-5 f-roboto">{{ $student->program->name }}</p>
                                <p class="id-label f-roboto">
                                    <small>Program</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- qr code below -->
                    <p class="text-center mt-4 mb-1 fw-bold text-uppercase f-roboto">Marilyn G. Tejada</p>
                    <p class="text-center id-label f-roboto">
                        <small>REGISTRAR III</small>
                    </p>
                    <div class="text-center">
                        <br>
                        <canvas class=" bg-transparent text-center mx-auto" id="id-qrcode"></canvas>
                    </div>
                    <div class="id-footer shadow-sm d-flex align-items-center">
                        <p class="text-white my-1 f-roboto">ID NUMBER: <span
                                class=" fw-medium f-roboto">{{ $student->student_id_no }}</span></p>
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
