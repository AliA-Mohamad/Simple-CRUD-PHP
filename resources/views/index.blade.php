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
                        <th scope="col" class="text-center"> 
                            <a href="{{ route('tasks.create') }}" class="btn btn-primary"> add a task </a>
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
                                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">▢</a>
                                <a href="{{ route('tasks.destroy', $task->id) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $task->id }}').submit();">✕</a>
                                <form id="delete-form-{{ $task->id }}" action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
