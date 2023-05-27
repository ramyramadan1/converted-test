<!doctype html>
<html lang="en">
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="col-lg-5  m-auto mt-4">
            <a href="{{ route('create-task-get') }}" class="btn btn-primary">create New task</a>
            <a href="{{ route('statistics-page') }}" class="btn btn-primary">Statistics Page</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Admin</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Assigned User</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($all_tasks as $task)
                    <tr>
                        <th scope="row">{{ $task->id }}</th>
                        <td>{{ $task->admin_name }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->user_name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $all_tasks->links() }}
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

