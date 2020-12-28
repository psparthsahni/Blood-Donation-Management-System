@extends('layouts.user')

@section('content')
    <form>
        <div class="col-md-12">
            <form>
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <input type="text" class="form-control" value="First name" disabled>
                    </div>
                    <div class="col-md-6 mt-2">
                        <input type="text" class="form-control" value="Last name" disabled>
                    </div>
                    <div class="col-md-6 mt-3">
                        <input type="text" class="form-control" value="Email Address">
                    </div>
                    <div class="col-md-6 mt-3">
                        <input type="text" class="form-control" value="Phone Number">
                    </div>
                    <div class="col-md-6 mt-3">
                        <input type="password" class="form-control" placeholder="New Password">
                    </div>
                    <div class="col-md-6 mt-3">
                        <input type="password" class="form-control" placeholder="Confirm Password">
                    </div>
                    <div class="col-md-6 mt-3">
                        <input type="text" class="form-control" value="Date of Birth" disabled>
                    </div>
                    <div class="col-md-6 mt-3">
                        <input type="text" class="form-control" value="Male" disabled>
                    </div>
                    <div class="col-md-6 mt-3">
                        <input type="text" class="form-control" value="Blood Group" disabled>
                    </div>
                    <div class="col-md-6 mt-3">
                        <input type="text" class="form-control" placeholder="Weight (KG)">
                    </div>
                    <div class="col-md-12 mt-3">
                        <input type="text" class="form-control" placeholder="Address Line 1">
                    </div>
                    <div class="col-md-12 mt-3">
                        <input type="text" class="form-control" placeholder="Address Line 2">
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <select id="inputState" class="form-control">
                            <option selected>This value from Database</option>
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
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-block">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </form>
@endsection
