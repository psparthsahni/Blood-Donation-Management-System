@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <h2>Contact Us</h2>
        <div class="mt-3">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14015.648181782997!2d77.04493215!3d28.57240375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b539193b833%3A0x35d8cea7361575cf!2sParth%20Sahni%20%7C%20Front%20End%20Developer%20in%20New%20Delhi!5e0!3m2!1sen!2sin!4v1607990411116!5m2!1sen!2sin"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                aria-hidden="false" tabindex="0" class="shadow"></iframe>
        </div>
        <form>
            <div class="row">
                <div class="col-md-6 mt-3">
                    <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6 mt-3">
                    <input type="text" class="form-control" placeholder="Last name">
                </div>
                <div class="col-md-6 mt-3">
                    <input type="text" class="form-control" placeholder="Email Address">
                </div>
                <div class="col-md-6 mt-3">
                    <input type="text" class="form-control" placeholder="Phone Number">
                </div>
                <div class="col-md-12 mt-3">
                    <textarea class="form-control" placeholder="This message is regarding..."></textarea>
                </div>
                <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary btn-block">
                        Send Message
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
