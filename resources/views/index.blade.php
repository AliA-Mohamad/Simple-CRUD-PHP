@extends('master')

@section('content')
    <div class="container-sm justify-content-center p-5">
        <div class="row row-cols-auto">
            <table class="table table-hover">
                <colgroup>
                    <col style="width: 5%;">
                    <col style="width: 15%;">
                    <col style="width: 50%;">
                    <col style="width: 30%;">
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col"> ID </th>
                        <th scope="col"> Name </th>
                        <th scope="col"> Desc </th>
                        <th scope="col" class=" text-center"> 
                            <a href="{{ route('create') }}" class="btn btn-primary"> add a task </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <th scope="row"> {{ $task->id }} </th>
                            <td> {{ $task->name }} </td>
                            <td> {{ $task->description }} </td>
                            <td class="text-center"> 
                                <a href="" class="btn btn-warning">▢</a>
                                <a href="" class="btn btn-danger">✕</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
