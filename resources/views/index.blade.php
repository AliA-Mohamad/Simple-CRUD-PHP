@foreach ($tasks as $task)
    <div>
        <p> {{ $task->id }}  |  {{ $task->name }}  |  {{ $task->description}} </p>
    </div>
@endforeach

<a href="{{ route('create') }}"> add a task </a>