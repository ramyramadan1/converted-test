<!doctype html>
<html lang="en">
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="col-lg-5  m-auto mt-4">
        <form>
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Admin Name</label>
                <select name="admin_name" class="form-control" " id="admin_name"  placeholder="Admin Name">
                    <option></option>
                </select>
                <small id="adminNameHelp" class="form-text text-muted">Select admin Name from list.</small>
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Assigned User</label>
                <select name="assigned_user" class="form-control" " id="assigned_user"  placeholder="Assigned User">
                    <option></option>
                </select>
                <small id="assignedUserHelp" class="form-text text-muted">Select Assigned User from list.</small>
            </div>
           <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>