@extends('layouts.admin')

@section('content')
    <div class="row my-3">
        <div class="col-md-6">
            <div class="card">
                <img class="card-img-top" src="{{ secure_asset('images/bg.jpg') }}" alt="Card image cap">
                <div class="card-body text-center">
                    <h1 class="card-title">316</h1>
                    <h3 class="card-text">Blood Donors</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <img class="card-img-top" src="{{ secure_asset('images/bg.jpg') }}" alt="Card image cap">
                <div class="card-body text-center">
                    <h1 class="card-title">1548</h1>
                    <h3 class="card-text">Blood Request</h3>
                </div>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Blood Group</th>
            <th scope="col">Donors Available</th>
            <th scope="col">Recipient Requests</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>A+</td>
            <td>20</td>
            <td>20</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>A-</td>
            <td>20</td>
            <td>20</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>B+</td>
            <td>20</td>
            <td>20</td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>B-</td>
            <td>20</td>
            <td>20</td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td>O+</td>
            <td>20</td>
            <td>20</td>
        </tr>
        <tr>
            <th scope="row">6</th>
            <td>O-</td>
            <td>20</td>
            <td>20</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>AB+</td>
            <td>20</td>
            <td>20</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>AB-</td>
            <td>20</td>
            <td>20</td>
        </tr>
        </tbody>
    </table>
@endsection
