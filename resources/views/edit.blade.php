@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <form method="post" >
                @csrf
                    <div class="row mt-3">
                        <input type="hidden" name="id" value="{{$items['id']}}">
                        <div class="col">
                            <label class="form-label">Product Name:</label>
                            <input type="text" name="productname" class="form-control" value="{{$items['productname']}}">
                        </div>
                        <div class="col">
                            <label class="form-label">Price:</label>
                            <input type="text" name="price" class="form-control" value="{{$items['price']}}">
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

