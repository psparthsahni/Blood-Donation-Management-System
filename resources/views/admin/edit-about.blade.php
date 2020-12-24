@extends('layouts.admin')

@section('content')
    <form>
        <div class="row">
            <div class="col-md-12 my-3">
                <textarea class="form-control" placeholder="This message is regarding..."></textarea>
            </div>
        </div>
    </form>
    <a class="btn btn-primary btn-block" href="{{ route('view-about') }}">Save</a>
@endsection
