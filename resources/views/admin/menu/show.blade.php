@extends('admin.home')

@section('contents')
    <h2>Menu Information</h2>

    <div>

        <div>
            <label for="Menu Name">Menu Name</label>
            <div><input type="text" class="form-control" id="name" name="name" value="{{$menus->name}}" readonly="true"></div>
        </div>
        <div>
            <label for="Created">Created</label>
            <div><input type="text" class="form-control" id="created_at" name="created_at" value="{{$menus->created_at}}" readonly="true"></div>
        </div>
        <div>
            <label for="Updated">Updated</label>
            <div><input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$menus->updated_at}}" readonly="true"></div>
        </div>
        <div>
            <div>

                <a href="{{ route('menuList') }}" class="btn btn-primary">Menu List</a>

            </div>
        </div>

    </div>




@endsection