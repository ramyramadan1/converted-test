<!doctype html>
<html lang="en">
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="col-lg-5  m-auto mt-4"> Tasks Statistics</div>
        <div class="col-lg-5  m-auto mt-4">
            <a href="{{ route('tasks-list') }}" class="btn btn-primary">Tasks List</a>
            <a href="{{ route('create-task-get') }}" class="btn btn-primary">create New task</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User</th>
                        <th scope="col">Number of Tasks</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($top_ten_users as $top_ten_user)
                    <tr>
                        <th scope="row">{{ $top_ten_user->id }}</th>
                        <th scope="row">{{ $top_ten_user->name }}</th>
                        <td>{{ $top_ten_user->tasks_count }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

