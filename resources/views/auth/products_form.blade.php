@extends('admin.layout')
@section('content')
    <div class="row">
        <h3 class="mb-3">
            <i class="fas fa-plus-square"></i> Create new Products
            <small class="text-muted">Enter products information</small>
        </h3>
    </div>

    <div class="row">
        <div class="col-6">
            <form enctype="multipart/form-data" method="post" action="/admin/products">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="name" type="text" class="form-control" placeholder="Please enter name">
                    @error('name')
                    <small class="text-danger form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    Thumbnail<input type="text" name="thumbnail" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input name="description" type="text" class="form-control" placeholder="Please enter description">
                    @error('description')
                    <small class="text-danger form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input name="price" type="text" class="form-control" placeholder="Please enter description">
                    @error('price')
                    <small class="text-danger form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Detail</label>
                    <input name="detail" type="text" class="form-control" placeholder="Please enter description">
                    @error('detail')
                    <small class="text-danger form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Id_Categories</label>
                    <input name="id_categories" type="text" class="form-control" placeholder="Please enter description">
                    @error('id_categories')
                    <small class="text-danger form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
