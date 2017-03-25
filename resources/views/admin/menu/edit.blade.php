@extends('admin.home')

@section('contents')
    <h2>Edit Post</h2>
    <div>

        <form role="form" action="{{ route('menu.update', $menus->id)}}" method="post" class="form-horizontal">
            {{method_field("PUT")}}
            {{csrf_field()}}
            <div>
                <label for="Menu Name">Menu Name</label>
                <div><input type="text" class="form-control" id="name" name="name" value="{{$menus->name}}"></div>
            </div>
            <div>
                <label for="Menu Slug">Menu Slug</label>
                <div>
                    <textarea name="slug" id="slug" class="form-control">{{ $menus->slug}}</textarea>
                </div>
            </div>
            <div>
                <label for="Menu Status">Menu Status</label>
                <div>
                    <textarea name="status" id="status" class="form-control">{{ $menus->status}}</textarea>
                </div>
            </div>
            <div>
                <div>
                    <button class="btn btn-primary" data-link="{{ route('menuStore') }}" type="submit">Update</button>

                </div>
            </div>
        </form>

    </div>

@endsection


{{--<div>--}}

    {{--<div>--}}
        {{--<label for="Menu Name">Menu Name</label>--}}
        {{--<div><input type="text" class="form-control" id="name" name="name" value="{{$menus->name}}" readonly="true"></div>--}}
    {{--</div>--}}
    {{--<div>--}}
        {{--<label for="Created">Created</label>--}}
        {{--<div><input type="text" class="form-control" id="created_at" name="created_at" value="{{$menus->created_at}}" readonly="true"></div>--}}
    {{--</div>--}}
    {{--<div>--}}
        {{--<label for="Updated">Updated</label>--}}
        {{--<div><input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$menus->updated_at}}" readonly="true"></div>--}}
    {{--</div>--}}
    {{--<div>--}}
        {{--<div>--}}

            {{--<a href="{{ route('menuList') }}" class="btn btn-primary">Menu List</a>--}}

        {{--</div>--}}
    {{--</div>--}}

{{--</div>--}}

