@extends('master')

@section('content')

<style>
    .full-height {
        height: 100vh;
    }
</style>

<div class="d-flex container justify-content-center align-items-center full-height">
    <div class="row border rounded-4 p-5">

        <span class="mb-5 w-100 text-center fs-4">Make your task</span>

        <form action="{{ route('store') }}" method="post">
            @csrf
            <div class="input-group input-group-sm mb-5 mt-1">
                <span class="input-group-text"> Task </span>
                <input type="text" class="form-control" id="name" name="name" placeholder="type...">
            </div>

            <div class="input-group input-group-sm mb-5 ">
                <span class="input-group-text"> Description </span>
                <input type="text" class="form-control" id="description" name="description" placeholder="type...">
            </div>
            <div>
                <button type="submit" class="btn btn-success w-100">save</button>
            </div>
        </form>
    </div>
</div>
@endsection
