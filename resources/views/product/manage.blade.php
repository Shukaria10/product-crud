@extends('master')


@section('title')
    Manage Page
@endsection


@section('body')
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">All Product Information</div>
                        <div class="card-body">
                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->category}}</td>
                                    <td>{{$product->brand}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>
                                        <img src="{{asset(($product->image))}}" alt="" height="100" width="120">
                                    </td>
                                    <td>
                                        <a href="{{route('product.edit',['id' => $product->id])}}" class="btn btn-success">Edit</a>
                                        <a href="{{route('product.delete',['id' => $product->id])}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

