@extends('layouts.admin')

@section('content')
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
