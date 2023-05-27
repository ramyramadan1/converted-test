<!doctype html>
<html lang="en">
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="col-lg-5  m-auto mt-4">
            <form method="post" action="{{ route('create-task-post') }}">
                @csrf
                <div class="form-group">
                    <label for="adminName">Admin Name</label>
                    <select name="admin_id" class="form-control" id="admin_id"  placeholder="Admin Name">
                        @foreach($admins as $admin)
                        <option value="{{ $admin->id}}">{{ $admin->name}}</option>
                        @endforeach
                    </select>
                    <small id="adminNameHelp" class="form-text text-muted">Select admin Name from list.</small>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title"  placeholder="Title">
                    <small id="titleHelp" class="form-text text-muted">Add task title here.</small>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" " id="description"  placeholder="Description"></textarea>
                    <small id="descriptionHelp" class="form-text text-muted">Add task description here.</small>
                </div>
                <div class="form-group">
                    <label for="assignedUser">Assigned User</label>
                    <select name="user_id" class="form-control" " id="user_id"  placeholder="Assigned User">
                        @foreach($users as $user)
                        <option value="{{ $user->id}}">{{ $user->name}}</option>
                        @endforeach
                    </select>
                    <small id="assignedUserHelp" class="form-text text-muted">Select Assigned User from list.</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>