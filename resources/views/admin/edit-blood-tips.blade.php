@extends('layouts.admin')

@section('content')
    <form>
        <div class="row">
            <div class="col-md-12">
                <input type="text" class="form-control" value="Beat the Myth">
            </div>
            <div class="col-md-12 mt-3">
                <textarea class="form-control" placeholder="This message is regarding..."></textarea>
            </div>
            <div class="col-md-12 mt-3">
                <input type="text" class="form-control"
                       value="DO donate blood, only if you satisfy all of the following conditions">
            </div>
            <div class="col-md-12 mt-3">
                <textarea class="form-control" placeholder="This message is regarding..."></textarea>
            </div>
            <div class="col-md-12 mt-3">
                <input type="text" class="form-control"
                       value="DO NOT donate blood, if you have any of the following conditions">
            </div>
            <div class="col-md-12 mt-3">
                <textarea class="form-control" placeholder="This message is regarding..."></textarea>
            </div>
        </div>
    </form>
    <a class="btn btn-primary btn-block mt-3" href="{{ route('view-blood-tips') }}">Save</a>
@endsection
