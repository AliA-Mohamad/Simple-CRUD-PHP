@extends('master')

@section('content')
    <div class="container d-flex justify-content-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col"> ID </th>
                    <th scope="col"> Name </th>
                    <th scope="col"> Desc </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <th scope="row"> {{ $task->id }} </th>
                        <td> {{ $task->name }} </td>
                        <td> {{ $task->description }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ route('create') }}"> add a task </a>

@endsection
