@extends('layout')
@section('layout')
        <div class="align-items-center justify-content-center mt-5">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Title</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Product Type</th>
                    <th scope="col">Price</th>
                    <th scope="col">Page No/Play Length</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->first_name}}</td>
                        <td>{{$product->last_name}}</td>
                        <td>{{$product->product_type}}</td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->pages_playlength}}</td>
                        <td>
                            <a href="{{url('updateForm',$product->id)}}" class="btn btn-primary mt-2 p-2">Update</a>
                            <form action="{{url('delete',$product->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger mt-2 p-2">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

            <div class="h1 text-center">
                Add New Product
            </div>
            <form class="w-100 mt-5" method="POST" action="{{url('add')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" placeholder="First Name(optional)" name="first_name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" placeholder="surname / band" name="last_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" id="Title" placeholder="Title" name="title" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="title">Title</label>
                        <select class="browser-default custom-select form-control" name="type" id="inputState">
                            <option selected disabled>Select your Title</option>
                            <option value="CD" name="CD">CD</option>
                            <option value="Book" name="Book">Book</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="pages_playlength">Pages /Play Length</label>
                        <input type="text" class="form-control" id="pages_playlength" name="pages_playlength" placeholder="Pages / Play Length" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>

@endsecti
