@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <h2 class="mb-3">Upcoming Events</h2>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top" src="{{ secure_asset('images/bg.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <span>Name : </span><h5>Satyajeet Gupta</h5>
                        <span>Organization : </span><h5>Blood Donation Limited</h5>
                        <span>Phone Number : </span><h5>9685789654</h5>
                        <span>Email : </span><h5>info@blooddonation.com</h5>
                        <span>Location : </span><h5>JC Nagar, Bangalore</h5>
                        <span>Expected Donors : </span><h5>50</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top" src="{{ secure_asset('images/bg.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <span>Name : </span><h5>Ankit Mishra</h5>
                        <span>Organization : </span><h5>Blood Corporation</h5>
                        <span>Phone Number : </span><h5>9476588596</h5>
                        <span>Email : </span><h5>info@bloodcorporation.com</h5>
                        <span>Location : </span><h5>Dwarka, New Delhi</h5>
                        <span>Expected Donors : </span><h5>80</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top" src="{{ secure_asset('images/bg.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <span>Name : </span><h5>Bhoomi Malik</h5>
                        <span>Organization : </span><h5>Save a Life</h5>
                        <span>Phone Number : </span><h5>7865894557</h5>
                        <span>Email : </span><h5>info@savealife.com</h5>
                        <span>Location : </span><h5>Juhu, Mumbai</h5>
                        <span>Expected Donors : </span><h5>35</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top" src="{{ secure_asset('images/bg.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <span>Name : </span><h5>Ankur Sinha</h5>
                        <span>Organization : </span><h5>Life Line Hospital</h5>
                        <span>Phone Number : </span><h5>9435152658</h5>
                        <span>Email : </span><h5>info@lifelinehospital.com</h5>
                        <span>Location : </span><h5>Mohali, Chandigarh</h5>
                        <span>Expected Donors : </span><h5>250</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top" src="{{ secure_asset('images/bg.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <span>Name : </span><h5>Malika Hooda</h5>
                        <span>Organization : </span><h5>Hooda Blood Drive</h5>
                        <span>Phone Number : </span><h5>8596968585</h5>
                        <span>Email : </span><h5>info@hoodablooddrive.com</h5>
                        <span>Location : </span><h5>Leisure Valley, Gurgaon</h5>
                        <span>Expected Donors : </span><h5>120</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top" src="{{ secure_asset('images/bg.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <span>Name : </span><h5>Rajeev Sethi</h5>
                        <span>Organization : </span><h5>Blood Donation Noida</h5>
                        <span>Phone Number : </span><h5>9789878987</h5>
                        <span>Email : </span><h5>info@blooddonationnoida.com</h5>
                        <span>Location : </span><h5>Sector 50, Noida</h5>
                        <span>Expected Donors : </span><h5>30</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top" src="{{ secure_asset('images/bg.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <span>Name : </span><h5>Ismail Mubarak</h5>
                        <span>Organization : </span><h5>Lions Blood Bank</h5>
                        <span>Phone Number : </span><h5>9476847695</h5>
                        <span>Email : </span><h5>info@lionsbloodbank.com</h5>
                        <span>Location : </span><h5>Moti Nagar, Telangana</h5>
                        <span>Expected Donors : </span><h5>230</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top" src="{{ secure_asset('images/bg.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <span>Name : </span><h5>Eva Sachdeva</h5>
                        <span>Organization : </span><h5>Sachdeva Hospital</h5>
                        <span>Phone Number : </span><h5>8426971350</h5>
                        <span>Email : </span><h5>info@sachdevahospital.com</h5>
                        <span>Location : </span><h5>Clock Tower, Kolkata</h5>
                        <span>Expected Donors : </span><h5>35</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top" src="{{ secure_asset('images/bg.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <span>Name : </span><h5>Sankal Verma</h5>
                        <span>Organization : </span><h5>All Lives Matter</h5>
                        <span>Phone Number : </span><h5>7946138052</h5>
                        <span>Email : </span><h5>info@alllivesmatter.com</h5>
                        <span>Location : </span><h5>Janakpuri, New Delhi</h5>
                        <span>Expected Donors : </span><h5>150</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
