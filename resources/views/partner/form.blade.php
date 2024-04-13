@extends('layouts.client.master')
@section('content')
    {{-- <section class="vh-100 gradient-custom"> --}}
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mt-5 mb-4 pb-0 pb-md-0 mb-md-1  text-center">Our Service Partner Form</h3>
                        <p class="pb-md-5 justify-content-center align-items-center text-center">Don’t miss a unique
                            opportunity to become a partner in your region.</p>
                        <form>

                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" id="firstName" class="form-control form-control-lg" />
                                        <label class="form-label" for="firstName">First Name</label>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" id="lastName" class="form-control form-control-lg" />
                                        <label class="form-label" for="lastName">Last Name</label>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" id="firstName" class="form-control form-control-lg" />
                                        <label class="form-label" for="firstName">Father/Wife/Husband Name </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 d-flex align-items-center">

                                    <div data-mdb-input-init class="form-outline datepicker w-100">
                                        <input type="date" class="form-control form-control-lg" id="birthdayDate" />
                                        <label for="birthdayDate" class="form-label">DOB</label>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <h6 class="mb-2 pb-1">Gender: </h6>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="femaleGender" value="option1" checked />
                                        <label class="form-check-label" for="femaleGender">Female</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="maleGender" value="option2" />
                                        <label class="form-check-label" for="maleGender">Male</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="otherGender" value="option3" />
                                        <label class="form-check-label" for="otherGender">Other</label>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="email" id="emailAddress" class="form-control form-control-lg" />
                                        <label class="form-label" for="emailAddress">Email</label>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4 pb-2">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                                        <label class="form-label" for="phoneNumber">Phone Number</label>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 mb-4 justify-content-center align-items-center">

                                    <select class="select">
                                        <option value="1">Country</option>
                                        <option value="2">Option 1</option>
                                        <option value="3">Option 2</option>
                                        <option value="4">Option 3</option>
                                    </select>

                                </div>

                                <div class="col-md-2 mb-4">

                                    <select class="select">
                                        <option value="1">State</option>
                                        <option value="2">Option 1</option>
                                        <option value="3">Option 2</option>
                                        <option value="4">Option 3</option>
                                    </select>

                                </div>
                                <div class="col-md-2 mb-4">

                                    <select class="select">
                                        <option value="1">City</option>
                                        <option value="2">Option 1</option>
                                        <option value="3">Option 2</option>
                                        <option value="4">Option 3</option>
                                    </select>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">

                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label" for="Address">Address</label>
                                        <textarea class="form-control" name="address" placeholder="Address"></textarea>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4 pb-2">
                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label" for="phoneNumber">Upload Id Proof</label>
                                        <input class="form-control form-control-lg" id="formFileLg" type="file" />
                                        <div class="small text-muted mt-2">Upload your Id or any other relevant file. Max
                                            file
                                            size 50 MB</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-12">

                                    <select class="select form-control-lg">
                                        <option value="1" >Application Service</option>
                                        <option value="2">MODULAR KITCHEN</option>
                                        <option value="3">SEMI WASHING MACHINCE</option>
                                        <option value="4">LAPTOP/COMPUTER REPAIRING</option>
                                        
                                    </select>
                                    {{-- <label class="form-label select-label">Choose option</label> --}}
                                    <select class="select form-control-lg">
                                        <option value="1" >cleaning Service</option>
                                        <option value="2">HOUSE CLEANING</option>
                                        <option value="3">WATER TANK CLEANING</option>
                                        <option value="4">KITCHEN CHIMNEY</option>
                                    </select>
                                    <select class="select form-control-lg">
                                        <option value="1" >Handyman Service</option>
                                        <option value="2">COMPUTER NETWORK</option>
                                        <option value="3">MOBILE APP DEVELOPMENT</option>
                                        <option value="4">DIGITAL MARKETING</option>
                                        <option value="5">WEB DEVELOPMENT</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mt-4 pt-2">
                                <input data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                                    type="submit" value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </section> --}}
@endsection
