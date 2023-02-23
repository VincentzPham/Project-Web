<!DOCTYPE html>
<html>

<head>
    <title>Edit Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Admin</h2>
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form action="{{ url('admin-update') }}" method="POST">
                    @csrf
                    <div class="md-3">
                        <label for="form-label">ID</label>
                        <input type="text" class="form-control" name="adminID" value="{{$data->adminID}}" readonly>
                    </div> <br>
                    <div class="md-3">
                        <label for="form-label">Pass</label>
                        <input type="text" class="form-control" name="adminPass" value="{{$data->adminPass}}">
                    </div> <br>
                    <div class="md-3">
                        <label for="form-label">Name</label>
                        <input type="text" class="form-control" name="adminFullName" value="{{$data->adminFullName}}">
                    </div> <br>
                    <div class="md-3">
                        <label for="form-label">Img</label>
                        <input type="file" class="form-control" name="adminPhoto">
                    </div> <br>
                    <div class="md-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{url('admins/admin-profile')}}" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
