@extends('.admin.layout')
@include('.includes.admin.header')
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">文章管理</div>

                <div class="panel-body">
                    <hr>
                    <div class="article">
                        <h4>title</h4>
                        <div class="content">
                            <p>123456</p>
                        </div>
                        <button class="btn btn-primary">添加</button>
                        <button class="btn btn-primary">添加</button>
                        <button class="btn btn-primary">添加</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection