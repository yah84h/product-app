@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="card">
           <div class="card-body">
           <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th class="fs-4">ID</th>
                        <td class="fs-4">Product Name</td>
                        <td class="fs-4">Price</td>
                        <td class="fs-4" colspan="2" >Action</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach($items as $row)
                    <tr>
                        <td>{{$row['id']}}</td>
                        <td>{{$row['productname']}}</td>
                        <td>{{$row['price']}}</td>
                        <td><a href="{{route('edit-product',['id'=>$row['id']])}}"><i class="fa fa-edit text-success" aria-hidden="true"></i></a></td>
                        <td><a href="{{route('del-product',['id'=>$row['id']])}}"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           </div>
       
            
        </div>
       
        <div class="card mt-5">
            <div class="card-body">
            <p class="fs-2 text-center">Add New Product</p>
                <form action="{{route('create-product')}}" method="post" >
                    @csrf
                    <div class="row mt-3">
                        <div class="col">
                            <label class="form-label">Product Name:</label>
                            <input type="text" name="productname" class="form-control">
                        </div>
                        <div class="col">
                            <label class="form-label">Price:</label>
                            <input type="text" name="price" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-success" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

