@extends('layouts.admin')

@section('content')
    <form>
        <div class="row">
            <div class="col-md-12 mt-3">
                <span>Event Image:</span>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <input type="text" class="form-control" placeholder="Full Name">
            </div>
            <div class="col-md-6 mt-3">
                <input type="text" class="form-control" placeholder="Organization">
            </div>
            <div class="col-md-6 mt-3">
                <input type="text" class="form-control" placeholder="Phone Number">
            </div>
            <div class="col-md-6 mt-3">
                <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="col-md-6 mt-3">
                <input type="text" class="form-control" placeholder="Location">
            </div>
            <div class="col-md-6 mt-3">
                <input type="text" class="form-control" placeholder="Expected Donors">
            </div>
            <div class="col-md-6 mt-3">
                <span>Start Date:</span>
                <input type="date" class="form-control" placeholder="Start Date">
            </div>
            <div class="col-md-6 mt-3">
                <span>End Date:</span>
                <input type="date" class="form-control" placeholder="End Date">
            </div>
        </div>
    </form>
    <a class="btn btn-primary btn-block mt-3" href="{{ route('view-upcoming-events') }}">Update Event</a>
@endsection
