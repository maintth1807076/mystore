@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col">
            <h3 class="mb-3">
                <i class="fas fa-stream"></i> List [USER]
                <small class="text-muted">All USER availble</small>
            </h3>
        </div>
    </div>
    <div class="row mb-2 mt-2">
        <div class="col-7">
        </div>
        <div class="col-5">
            <div class="form-group float-left mr-2">

            </div>
            <form >
                <div class="form-group float-left mr-2">
                    <input type="text" placeholder="Please Search" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2 placeholder="Enter keyword to search">
                </div>
                <div class="form-group float-left">
                    <button type="submit" class="btn btn-outline-primary mb-2">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col"><input id="check-all" type="checkbox" class="form-control" name=""></th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Avartar</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $item)
                <tr>
                    <td scope="row"><input type="checkbox" class="form-control check-item" value="{{$item->id}}"></td>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td><img src="{{$item->avatar}}" alt="{{$item->name}}" width="50px;"></td>
                    <td width="25%">{{$item->email}}</td>
                    <td>
                        <a href="{{route('user.show', [$item->id])}}" class="mr-2" title="View game detail">Detail</a>
                        <a href="javascript:void(0)" id="btn-delete-{{$item->id}}" class="mr-2 btn-users-delete" title="Delete this game">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="form-group mr-3">
            <select class="form-control mr-2" name="action-id">
                <option value="0">Choose action</option>
                <option value="-1">Delete</option>
                <option value="1">Publish</option>
            </select>
        </div>
        <div class="form-group">
            <button id="btn-users-apply-all" type="submit" class="btn btn-outline-primary mb-2">Apply to all</button>
        </div>
    </div>
    <div class="row">
        <div class="col-8"></div>
        <div class="col-4">
            <nav aria-label="Page navigation example">
                {{$list->links()}}
            </nav>
        </div>
    </div>

@endsection