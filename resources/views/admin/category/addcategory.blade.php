@extends('admin.layout')
@section('title')
    添加文章
@endsection
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">添加类别</div>
                <div class="panel-body">
                    <form action="{{ route('admin.addcategory') }}" method="post">
                        <div class="form-group">
                            <label for="title">类别名称:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">添加</button>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection