<!DOCTYPE html>
<html>

<head>
    <title>Add Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Add Admin</h2>
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form action="{{ url('admin-save') }}" method="POST">
                    @csrf
                    <div class="md-3">
                        <label for="form-label">ID</label>
                        <input type="text" class="form-control" name="adminID" placeholder="Enter admin ID">
                    </div> <br>
                    <div class="md-3">
                        <label for="form-label">Password</label>
                        <input type="text" class="form-control" name="adminPass" placeholder="Enter admin Password">
                    </div> <br>
                    <div class="md-3">
                        <label for="form-label">Name</label>
                        <input type="text" class="form-control" name="adminFullName"
                            placeholder="Enter admin Name">
                    </div> <br>
                    <div class="md-3">
                        <label for="form-label">Image</label>
                        <input type="file" class="fomr-control" name="adminPhoto">
                    </div> <br>
                        <button type="submit" class="btn btn-primary">Add</button>
                        <a href="{{ url('admins/admin-profile') }}" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
