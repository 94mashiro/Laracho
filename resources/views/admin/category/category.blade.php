@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @include('includes.message')
            <div class="panel panel-default">
                <div class="panel-heading">类别管理 | <a href="{{ route('admin.gotoaddcategory') }}">添加类别</a></div>
                <div class="panel-body">
                    @if(\App\Category::all()->count() > 0)
                        @foreach(\App\Category::all() as $category)
                            <div class="category">
                                <h4>{{ $category->name }}</h4>
                                <div class="operation">
                                    <button class="btn btn-primary">修改</button>
                                    <button class="btn btn-danger">删除</button>
                                </div>
                                <hr>
                            </div>
                        @endforeach
                    @else
                        <div class="category">
                            <h4>还没有添加任何类别</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection