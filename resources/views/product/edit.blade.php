@extends('master')


@section('title')
    Edit Page
@endsection


@section('body')
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Edit Product Information</div>
                        <div class="card-body">
                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                            <form action="{{route('product.update',['id'=> $product->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" value="{{$product->name}}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="category" value="{{$product->category}}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Brand Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="brand" value="{{$product->brand}}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Product Price</label>
                                    <div class="col-md-9">
                                        <input type="number" name="price" value="{{$product->price}}" class="form-control"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Product description</label>
                                    <div class="col-md-9">
                                        <textarea name="description"  class="form-control">{{$product->description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control"/>
                                        <img src="{{asset($product->image)}}" alt="" height="100" width="120">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="" class="btn btn-outline-success" value="Update Product"/>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


