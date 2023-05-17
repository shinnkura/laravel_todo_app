<!DOCTYPE html>
<html>
    <head>
        <title>Todo App</title>
    </head>
    <body>
        <h1>Task List</h1>

        <form action="/task" method="POST">
            {{ csrf_field() }}
            <input type="text" name="title" id="task-title" placeholder="Enter your task here">
            <button type="submit">Add Task</button>
        </form>

        <h2>Current Tasks</h2>

        <ul>
            @foreach ($tasks as $task)
                <li>
                    {{ $task->title }}

                    <form action="/task/{{ $task->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button>Delete Task</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </body>
</html>
