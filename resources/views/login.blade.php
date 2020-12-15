@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h2>Login</h2>
                    <img src="{{ secure_asset('images/donation.jpg') }}" width="100%" height="auto" alt="">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group col-md-6 mt-3">
                                <select id="inputState" class="form-control">
                                    <option selected>User Type</option>
                                    <option>Donor</option>
                                    <option>Recipient</option>
                                    <option>Admin</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
