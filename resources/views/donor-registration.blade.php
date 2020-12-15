@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <h2>Register as a Donor</h2>
                    <form>
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-md-6 mt-2">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="password" class="form-control" placeholder="Confirm Password">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="date" class="form-control" placeholder="Date of Birth">
                            </div>
                            <div class="form-group col-md-6 mt-3">
                                <select id="inputState" class="form-control">
                                    <option selected>Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Transgender</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select id="inputState" class="form-control">
                                    <option selected>Blood Group</option>
                                    <option>A +</option>
                                    <option>A -</option>
                                    <option>B +</option>
                                    <option>B -</option>
                                    <option>O +</option>
                                    <option>O -</option>
                                    <option>AB +</option>
                                    <option>AB -</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Weight (KG)">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Address Line 1">
                            </div>
                            <div class="col-md-12 mt-3">
                                <input type="text" class="form-control" placeholder="Address Line 2">
                            </div>
                            <div class="form-group col-md-6 mt-3">
                                <select id="inputState" class="form-control">
                                    <option selected>City</option>
                                    <option>Bangalore</option>
                                    <option>Chandigarh</option>
                                    <option>Delhi</option>
                                    <option>Gurgaon</option>
                                    <option>Kolkata</option>
                                    <option>Mumbai</option>
                                    <option>Noida</option>
                                    <option>Telangana</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" placeholder="Pin Code">
                            </div>
                            <div class="ml-4 col-md-12 mt-2">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">
                                    I have read the <a href="">Eligibility Criteria</a> and confirm that I am eligible
                                    to donate blood.
                                </label>
                            </div>
                            <div class="ml-4 col-md-12 mt-2">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">
                                    I agree to the <a href="">Terms and Conditions</a> and consent to have my contact
                                    and donor information published to the potential blood recipients.
                                </label>
                            </div>
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <img class="card-img-top" src="{{ secure_asset('images/bg.jpg') }}" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h1 class="card-title">316</h1>
                                    <h3 class="card-text">Blood Donors</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="card">
                                <img class="card-img-top" src="{{ secure_asset('images/bg.jpg') }}" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h1 class="card-title">1548</h1>
                                    <h3 class="card-text">Blood Request</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
