@extends('admin.home')

@section('contents')
<div class="admin_menu_wrap">
    <div class="col-md-4">
        <form action="{{route('menuCreate')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="menu_name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="{{ $errors->has('name')? old('name'):'Name'}}" value="" class="menu_name">
            </div>
            <div class="form-group">
                <label for="menu_slug">Slug</label>
                <input type="text" name="slug" class="form-control"  placeholder="{{ $errors->has('name')? old('slug'):'Slug'}}" value="">
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="status">Published</label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        @foreach ($errors->all() as $message)
            <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span>{{ $message }}</span>
            </div>

        @endforeach
    </div>
    <div class="col-md-7">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Order</th>
                <th>Name</th>
                <th>Slug</th>
                <th>State</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody id="sortable">
            @foreach( $menus as $menu )
                <tr>
                    <th>{{ $menu -> m_order }} </th>
                    <td><a href="{{route('menuShow', $menu -> id)}}">{{ucfirst($menu-> name)}}</a></td>
                    <td>{{ $menu->slug }}</td>
                    <td>{{ $menu -> status}}</td>
                    <td>
                        <a href="{{ route ('menuEdit', $menu -> id) }}" class="btn btn-info btn-block"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Edit</a>
                    </td>
                    <td>
                        <form rule="form" action="{{route('menuDestroy',$menu -> id)}}" method="post">
                            {{ method_field("DELETE")}}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-block mt-1"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Delete</button>
                        </form>
                    </td>
                <tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection

