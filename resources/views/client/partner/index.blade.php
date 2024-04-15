@extends('layouts.client.master')
@section('content')
    <div class="container-fluid hero-header bg-primary mb-0 text-dark">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mt-5 mb-4 pb-0 pb-md-0 mb-md-1 text-center">Service Partner Form</h3>
                        <h5 class="mb-4 pb-0 pb-md-0 mb-md-1 text-center">Are you interested in becoming a service partner
                            with us?</h5>
                        <p class="pb-md-5 justify-content-center align-items-center text-center">Take advantage of this
                            exceptional opportunity to become a partner in your local area.</p>
                        <form class="px-md-2 text-dark">

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="firstName">Full Name</label>
                                        <input type="text" id="first_name" class="form-control form-control-lg"
                                            name="fname" placeholder="Enter Your Name"/>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="lastName">Father Name</label>
                                        <input type="text" id="father_name" class="form-control form-control-lg"
                                            name="fathername" placeholder="Enter Your Father Name" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="firstName">Company Name</label>
                                        <input type="text" id="company_name" class="form-control form-control-lg"
                                            name="companyname" placeholder="Company or Agency Name "/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 d-flex align-items-center">
                                    <div class="form-group w-100">
                                        <label for="dob">DOB</label>
                                        <input type="date" class="form-control form-control-lg" id="dob"
                                            name="dob" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                        <label class="mb-0 me-4">Gender:</label>
                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="femaleGender" value="option1" />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="maleGender" value="option2" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-0">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="otherGender" value="option3" />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-group">
                                        <label for="emailAddress">Email</label>
                                        <input type="email" id="emailAddress" class="form-control form-control-lg"
                                            name="email" placeholder="Ex: name@example.com" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-group">
                                        <label for="phoneNumber">Phone Number</label>
                                        <input type="tel" id="phoneNumber" class="form-control form-control-lg"
                                            name="phone" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 mb-4 pb-1">
                                    <select class="select form-control">
                                        <option value="1">Country</option>
                                        <option value="2">Option 1</option>
                                        <option value="3">Option 2</option>
                                        <option value="4">Option 3</option>
                                    </select>
                                </div>
                                <div class="col-md-2 mb-4 pb-1">
                                    <select class="select form-control">
                                        <option value="1">State</option>
                                        <option value="2">Option 1</option>
                                        <option value="3">Option 2</option>
                                        <option value="4">Option 3</option>
                                    </select>
                                </div>
                                <div class="col-md-2 mb-4 pb-1">
                                    <select class="select form-control">
                                        <option value="1">City</option>
                                        <option value="2">Option 1</option>
                                        <option value="3">Option 2</option>
                                        <option value="4">Option 3</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-group">
                                        <label for="Address">Address</label>
                                        <textarea class="form-control" name="address" placeholder="Address"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="experience">Experience year</label>
                                        <input type="int" id="experience" class="form-control form-control-lg"
                                            name="" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-group">
                                        <label for="formFileLg">Upload Id Proof</label>
                                        <input class="form-control form-control-lg" id="formFileLg" type="file" />
                                        <div class="small text-muted mt-2">Upload your Id or any other relevant file. Max
                                            file size 50 MB</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <p>Which Services do you provide?</p>
                                <div class="col-md-4 mb-4">
                                    <select class="select form-control">
                                        <option value="1">Appliances Service</option>
                                        <option value="2">MODULAR KITCHEN</option>
                                        <option value="3">SEMI WASHING MACHINCE</option>
                                        <option value="4">LAPTOP/COMPUTER REPAIRING</option>
                                        <option value="5">WASHING MACHINCE</option>
                                        <option value="6">FRIDGE</option>
                                        <option value="7">DEEP FRIDGE</option>
                                        <option value="8">MICROWAVE</option>
                                        <option value="9">RO/WATER PURIFIER</option>
                                        <option value="10">WATER PROOFING</option>
                                        <option value="11">GEYSER</option>
                                        <option value="12">TV/LED</option>
                                        <option value="13">OVEN HEATER</option>
                                        <option value="14">ROOM HEATER</option>
                                        <option value="15">CCTV</option>
                                        <option value="16">VACCUM CLEANER</option>
                                        <option value="17">DISHWASHER</option>
                                        <option value="18">MIXTURE GRIENDER</option>
                                        <option value="19">ICE MAKER</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <select class="select form-control">
                                        <option value="1">Cleaning Service</option>
                                        <option value="2">HOUSE CLEANING</option>
                                        <option value="3">WATER TANK CLEANING</option>
                                        <option value="4">KITCHEN CHIMNEY</option>
                                        <option value=""> FLASE CLEANING</option>
                                        <option value="">PEST CONTROL</option>
                                        <option value="">SOFA REPAIRING</option>
                                        <option value="">CAR WASH</option>
                                        <option value="">SOFA CLEANING</option>
                                        <option value="">SEWAGE TANK CLEANING</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <select class="select form-control">
                                        <option value="1">Handyman Service</option>
                                        <option value="2">COMPUTER NETWORK</option>
                                        <option value="3">MOBILE APP DEVELOPMENT</option>
                                        <option value="4">DIGITAL MARKETING</option>
                                        <option value="5">WEB DEVELOPMENT</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="select form-control">
                                        <option value="1">Construction Services</option>
                                        <option value="2">COMPLETE HOUSE CONSTRUCTION</option>
                                        <option value="3">TILES/MARBLE CONTRACTOR</option>
                                        <option value="4">PAINTING CONTRACTOR</option>
                                        <option value="5">WALLPAPER CARPET FLOORING</option>
                                        <option value="6">ARCHITECT SERVICE</option>
                                        <option value="7">INTERIOR DESIGNER</option>
                                        <option value="8">STEEL RAILING</option>
                                        <option value="9">ALUMINIUM PARTITION</option>
                                        <option value="10">FABRICATION SERVICE</option>
                                        <option value="11">FABRICATION SERVICE</option>
                                        <option value="12">WARDROW</option>
                                        <option value="13">MODULAR KITCHEN</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <select class="select form-control">
                                        <option value="1">Tours & Travels Service</option>
                                        <option value="2">Car</option>
                                        <option value="3">Truck</option>
                                        <option value="4">Bus</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mt-4 pt-2 d-flex justify-content-center align-items-center">
                                <input data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                                    type="submit" value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
