<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css')}}"/>
</head>

<body>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Customer</h2>
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form action="{{ url('customer-update') }}" method="POST">
                    @csrf
                    <div class="md-3">
                        <label for="form-label">Email</label>
                        <input type="text" class="form-control" name="customerEmail" value="{{$data->customerEmail}}" readonly>
                    </div> <br>
                    <div class="md-3">
                        <label for="form-label">Pass</label>
                        <input type="text" class="form-control" name="customerPass" value="{{$data->customerPass}}">
                    </div> <br>
                    <div class="md-3">
                        <label for="form-label">Name</label>
                        <input type="text" class="form-control" name="customerName" value="{{$data->customerName}}">
                    </div> <br>
                    <div class="md-3">
                        <label for="form-label">Address</label>
                        <textarea class="form-control" name="customerAddress" cols="30" rows="7" value="{{$data->customerAddress}}"></textarea>
                    </div> <br>
                    <div class="md-3">
                        <label for="form-label">Phone</label>
                        <input type="text" class="form-control" name="customerPhone" value="{{$data->customerPhone}}">
                    </div> <br>
                    <div class="md-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{url('customers/indexlog')}}" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
