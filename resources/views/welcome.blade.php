@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <h2>Blood Donation Management System</h2>
                    <p>
                        Universally, 'Blood' is recognized as the most precious element that sustains life. It saves
                        innumerable lives across the world in a variety of conditions. Once in every 2- seconds,
                        someone, somewhere is desperately in need of blood. More than 29 million units of blood
                        components are transfused every year. The need for blood is great - on any given day,
                        approximately 39,000 units of Red Blood Cells are needed. Each year, we could meet only up to 1%
                        (approx) of our nation’s demand for blood transfusion.
                    </p>
                    <p>
                        Despite the increase in the number of donors, blood remains in short supply during emergencies,
                        mainly attributed to the lack of information and accessibility. We positively believe this tool
                        can overcome most of these challenges by effectively connecting the blood donors with the blood
                        recipients.
                    </p>
                </div>
                <div class="col-md-4">
                    <h2>Search Blood</h2>
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12 mt-2">
                                <div class="dropdown">
                                    <button class="btn btn-outline-primary btn-block dropdown-toggle" type="button"
                                            id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Select Blood Group
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">A +</a>
                                        <a class="dropdown-item" href="#">A -</a>
                                        <a class="dropdown-item" href="#">B +</a>
                                        <a class="dropdown-item" href="#">B -</a>
                                        <a class="dropdown-item" href="#">O +</a>
                                        <a class="dropdown-item" href="#">O -</a>
                                        <a class="dropdown-item" href="#">AB +</a>
                                        <a class="dropdown-item" href="#">AB -</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="dropdown">
                                    <button class="btn btn-outline-primary btn-block dropdown-toggle" type="button"
                                            id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Select City
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Bangalore</a>
                                        <a class="dropdown-item" href="#">Chandigarh</a>
                                        <a class="dropdown-item" href="#">Delhi</a>
                                        <a class="dropdown-item" href="#">Gurgaon</a>
                                        <a class="dropdown-item" href="#">Kolkata</a>
                                        <a class="dropdown-item" href="#">Mumbai</a>
                                        <a class="dropdown-item" href="#">Noida</a>
                                        <a class="dropdown-item" href="#">Telangana</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2 text-center">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">I agree to the <a href="">Terms and
                                        Conditions</a>.</label>
                            </div>
                            <div class="col-md-12 mt-2">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Search Blood
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ secure_asset('images/bg.jpg') }}" alt="Card image cap">
                        <div class="card-body text-center">
                            <h1 class="card-title">316</h1>
                            <h3 class="card-text">Blood Donors</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ secure_asset('images/bg.jpg') }}" alt="Card image cap">
                        <div class="card-body text-center">
                            <h1 class="card-title">1548</h1>
                            <h3 class="card-text">Blood Request</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ secure_asset('images/bg.jpg') }}" alt="Card image cap">
                        <div class="card-body text-center">
                            <h1 class="card-title">84</h1>
                            <h3 class="card-text">Active Donors</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Blood Donation Tips
                        </div>
                        <div class="card-body mt-3">
                            <p>You can donate blood if you are between age group of 18-60 years.</p>
                            <p>You can donate blood if your weight is 45kgs or more.</p>
                            <p>You can donate blood if your hemoglobin is more than 12.5g/dL.</p>
                            <p>You can donate blood if your last blood donation was before 3 months.</p>
                            <p>You can donate blood if you are healthy and not suffering from any disease.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Recent Blood Requests
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3 class="text-primary">
                                        A+
                                    </h3>
                                </div>
                                <div class="col-md-9">
                                    <span class="h5">Parth Sahni</span><br>
                                    <span>Location: Delhi</span><br>
                                    <span>Phone: 9873772065</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <h3 class="text-primary">
                                        O+
                                    </h3>
                                </div>
                                <div class="col-md-9">
                                    <span class="h5">Fareena Maria</span><br>
                                    <span>Location: Bangalore</span><br>
                                    <span>Phone: 9685748596</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <h3 class="text-primary">
                                        AB-
                                    </h3>
                                </div>
                                <div class="col-md-9">
                                    <span class="h5">Ashutosh Jha</span><br>
                                    <span>Location: Delhi</span><br>
                                    <span>Phone: 8285251258</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <h3 class="text-primary">
                                        AB+
                                    </h3>
                                </div>
                                <div class="col-md-9">
                                    <span class="h5">Divyanshu Thareja</span><br>
                                    <span>Location: Chandigarh</span><br>
                                    <span>Phone: 9575963145</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Recent Blood Donors
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3 class="text-primary">
                                        B+
                                    </h3>
                                </div>
                                <div class="col-md-9">
                                    <span class="h5">Ibrahim Mubarak</span><br>
                                    <span>Location: Bangalore</span><br>
                                    <span>Phone: 8574967856</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <h3 class="text-primary">
                                        AB+
                                    </h3>
                                </div>
                                <div class="col-md-9">
                                    <span class="h5">Himanshu Sagar</span><br>
                                    <span>Location: Mumbai</span><br>
                                    <span>Phone: 8574965874</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <h3 class="text-primary">
                                        A-
                                    </h3>
                                </div>
                                <div class="col-md-9">
                                    <span class="h5">Priyanka Sharma</span><br>
                                    <span>Location: Gurgaon</span><br>
                                    <span>Phone: 7845659835</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <h3 class="text-primary">
                                        O+
                                    </h3>
                                </div>
                                <div class="col-md-9">
                                    <span class="h5">Palavi Malhotra</span><br>
                                    <span>Location: Noida</span><br>
                                    <span>Phone: 9476341628</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
