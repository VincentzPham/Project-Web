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
                <h2>Add Customer</h2>
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form action="{{ url('customer-save') }}" method="POST">
                    @csrf
                    <div class="md-3">
                        <label for="form-label">ID</label>
                        <input type="text" class="form-control" name="customerEmail" placeholder="Enter customer Email">
                    </div> <br>
                    <div class="md-3">
                        <label for="form-label">Password</label>
                        <input type="text" class="form-control" name="customerPass" placeholder="Enter customer Password">
                    </div> <br>
                    <div class="md-3">
                        <label for="form-label">Name</label>
                        <input type="text" class="form-control" name="customerName"
                            placeholder="Enter customer Name">
                    </div> <br>
                    <div class="md-3">
                        <label for="form-label">Address</label>
                        <textarea class="form-control" name="customerAddress" cols="30" rows="7" placeholder="Enter customer Address"></textarea>
                    </div> <br>
                    <div class="md-3">
                        <label for="form-label">Phone</label>
                        <input type="text" class="form-control" name="customerPhone" placeholder="Enter customer Phone number"">
                    <div class="md-3">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <a href="{{ url('admins/customers') }}" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
