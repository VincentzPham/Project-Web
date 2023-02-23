<!DOCTYPE html>
<html>

<head>
    <title> Product List </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-mid-12">
                <div style="margin-right: 10%; float: right">
                    <a href="{{ url('product-add') }}" class="btn btn-primary">Add product</a>
                </div>
                <h2>Product List</h2>
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <table class="table table-hover">
                    <caption align="top">
                        <h2> Product List</h2>
                    </caption>
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Product name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $product)
                            <tr>
                                <td>{{ $product->productID }}</td>
                                <td>{{ $product->productName }}</td>
                                <td>{{ $product->productPrice }}</td>
                                <td>
                                    <a href="#">
                                        <img src="image\product\{{ $product->productImage }}" alt="No image"
                                            height="300px" width="200px" title="{{ $product->productDetail }}"> </a>
                                </td>
                                <td>{{ $product->categoryName }}
                                <td>{{ $product->productDetail}}</td>
                                <td>
                                    <a href="{{ url('product-edit/'. $product->productID) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ url('product-delete/'. $product->productID) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
