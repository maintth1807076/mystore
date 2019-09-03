@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col">
            <h3 class="mb-3">
                <i class="fas fa-stream"></i> List game
                <small class="text-muted">All game availble</small>
            </h3>
            <a href="/game/create"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Add new</a>
        </div>
    </div>
    <div class="row mb-2 mt-2">
        <div class="col-7">
        </div>
        <div class="col-5">
            <div class="form-group float-left mr-2">
                <select class="form-control">
                    <option>Category 01</option>
                    <option>Category 01</option>
                    <option>Category 01</option>
                    <option>Category 01</option>
                    <option>Category 01</option>
                </select>
            </div>
            <div class="form-group float-left mr-2">
                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Enter keyword to search">
            </div>
            <div class="form-group float-left">
                <button type="submit" class="btn btn-outline-primary mb-2">Search</button>
            </div>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col"><input id="checkedAll" type="checkbox" class="form-control" name=""></th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Avatar</th>
                <th scope="col">Price</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $game)
                <tr>
                    {{--                    <th scope="row">--}}
                    {{--                        <button class="btn btn-dark"><a href="/game/{{$game->id}}/edit">Edit</a></button>--}}
                    {{--                        <form action="/game/{{$game->id}}" method="post">--}}
                    {{--                            <input class="btn btn-dark" type="submit" value="Delete" />--}}
                    {{--                            @method('delete')--}}
                    {{--                            @csrf--}}
                    {{--                        </form>--}}
                    {{--                    </th>--}}
                    <th scope="row"><input name="checkAll" type="checkbox" class="form-control checkSingle" value="{{$game->id}}"></th>
                    <td>{{$game->id}}</td>
                    <td><a href="/game/{{$game->id}}">{{$game->name}}</a></td>
                    <td><img class="img-thumbnail rounded game-avatar" src="https://i.pinimg.com/originals/1d/ae/1a/1dae1ad263fbac22a9296014871cb980.png" alt=""></td>
                    <td>{{$game->price}}</td>
                    <td><img src="http://res.cloudinary.com/dcrbahlsn/image/upload/c_fit,h_300,w_300/{{$game->thumbnail}}" alt="{{$game->name}}"></td>
                    <td>{{$game->description}}</td>
                    <td>
                        <a href="/admin/products/{{$game->id}}" class="mr-2" title="View game detail">Detail</a>
                        <a href="/admin/products/edit" class="mr-2 btn-update" title="Edit this products">Edit</a>
                        <a href="javascript:void(0)" id="btn-delete-{{$game->id}}" class="mr-2 btn-delete" title="Delete this game">Delete</a>
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
            <button id="btn-apply-all" type="submit" class="btn btn-outline-primary mb-2">Apply to all</button>
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



