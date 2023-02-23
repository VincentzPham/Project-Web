<!DOCTYPE html>
<html>

<head>
    <title>Add product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Product</h2>
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form action="{{ url('product-update') }}" method="POST">
                    @csrf
                    <div class="md-3">
                        <label for="form-label">ID</label>
                        <input type="text" class="form-control" name="productID" value="{{$data->productID}}" readonly>
                    </div> <br>
                    <div class="md-3">
                        <label for="form-label">Name</label>
                        <input type="text" class="form-control" name="productName" value="{{$data->productName}}">
                    </div> <br>
                    <div class="md-3">
                        <label for="form-label">Price</label>
                        <input type="text" class="form-control" name="productPrice" value="{{$data->productPrice}}">
                    </div> <br>
                    <div class="md-3">
                        <label for="form-label">Details</label>
                        <textarea class="form-control" name="productDetail" cols="30" rows="7" value="{{$data->productDetail}}"></textarea>
                    </div> <br>
                    <div class="md-3">
                        <label for="form-label">Image</label>
                        <input type="file" class="fomr-control" name="productImage">
                    </div> <br>
                    <div class="md-3">
                        <label for="form-label">Category</label>
                        <input type="text" class="form-control" name="categoryID" value="{{$data->categoryID}}">
                    </div> <br>
                    <div class="md-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{url('admins/products')}}" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
