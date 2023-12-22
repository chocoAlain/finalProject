@extends('StudentDashboard')

@section('status-P', 'active')

@section('content')
    <section class=" d-flex align-items-center justify-content-center vh-100">
        <div class="container py-4 ">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://bitbucket.org/chocoalain/online-files/raw/74c9876e1625ea3111439d01672ed26e2e298efb/1686308880361.png"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">
                                {{ $user->FirstName . ' ' . $user->MiddleName . ' ' . $user->LastName }}
                            </h5>
                            <p class="text-muted mb-1">3rd Year - AI32</p>
                            <p class="text-muted mb-4">Bachelor of Science in Information Technology</p>
                        </div>
                    </div>
                    <div class="card mb-4">

                        <a href="{{ route('dashboard.profile') }}" type="button"
                            class=" card-body col-sm-12 btn btn-light">Save Profile
                        </a>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="col-sm-5">
                                <p class="mb-4  fw-bold fs-3">Student Profile</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0  ">Student ID</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->id }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        {{-- {{ $personalInfo->FirstName . ' ' . $personalInfo->MiddleName . ' ' . $personalInfo->LastName }} --}}
                                        <input type="text" value="{{ $user->FirstName }}"><input type="text"
                                            value="{{ $user->MiddleName }}"><input type="text"
                                            value="{{ $user->LastName }}">
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-3">
                                    {{-- <p class="text-muted mb-0">{{ $personalInfo->Email }}</p> --}}
                                    <input type="text" value="{{ $user->Email }}">
                                </div>
                                <div class="col-sm-3">
                                    <p class="mb-0">Mobile</p>
                                </div>
                                <div class="col-sm-3">
                                    {{-- <p class="text-muted mb-0">{{ $personalInfo->ContactNumber }}</p> --}}
                                    <input type="text" value="{{ $user->ContactNumber }}">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Mobile</p>
                                </div>
                                <div class="col-sm-3">
                                    {{-- <p class="text-muted mb-0">{{ $personalInfo->ContactNumber }}</p> --}}
                                    <input type="text" value="{{ $user->ContactNumber }}">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Sex</p>
                                </div>
                                <div class="col-sm-3">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Male
                                    </label>

                                </div>
                                <div class="col-sm-3">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Female
                                    </label>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Birthdate</p>
                                </div>
                                <div class="col-sm-3">
                                    <select class="form-control form-control-sm">
                                        <option>January</option>
                                        <option>February</option>
                                        <option>March</option>
                                        <option>April</option>
                                        <option>May</option>
                                        <option>June</option>
                                        <option>July</option>
                                        <option>August</option>
                                        <option>September</option>
                                        <option>October</option>
                                        <option>November</option>
                                        <option>December</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" maxlength="2" >
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" maxlength="4">
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>

                </div>
            </div>
    </section>
@endsection
