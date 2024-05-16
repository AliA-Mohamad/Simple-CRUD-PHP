@extends('master')

@section('content')
    <div class="container-sm justify-content-center p-5">
        <div class="row row-cols-auto">
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
            <a href="{{ route('create') }}" class="col align-self-end btn btn-primary"> add a task </a>
        </div>
    </div>


@endsection
