@extends('layouts.admin')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Organization</th>
            <th scope="col">Donors</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Satyajeet Gupta</td>
            <td>Blood Donation Limited</td>
            <td>50</td>
            <td>
                <a href="{{ route('edit-upcoming-event') }}">Edit</a> &nbsp;
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Ankit Mishra</td>
            <td>Blood Corporation</td>
            <td>80</td>
            <td>
                <a href="{{ route('edit-upcoming-event') }}">Edit</a> &nbsp;
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Bhoomi Malik</td>
            <td>Save a Life Foundation</td>
            <td>35</td>
            <td>
                <a href="{{ route('edit-upcoming-event') }}">Edit</a> &nbsp;
                <a href="">Delete</a>
            </td>
        </tr>
        </tbody>
    </table>
    <a class="btn btn-primary btn-block" href="{{ route('add-upcoming-event') }}">Add an Event</a>
@endsection
