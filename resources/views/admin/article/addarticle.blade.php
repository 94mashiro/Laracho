@extends('admin.layout')
@section('title')
    添加文章
@endsection
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @include('includes.message')
            <div class="panel panel-default">
                <div class="panel-heading">添加文章</div>
                <div class="panel-body">
                    <form action="{{ route('admin.addarticle') }}" method="post">
                        <div class="form-group">
                            <label for="title" class="control-label">标题:</label>
                            <input type="text" name="title" class="form-control" id="article-title">
                        </div>
                        <div class="form-group">
                            <label for="title" class="control-label">分类:</label>
                            <select name="category" id="category" class="form-control">
                                @foreach(\App\Category::all() as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="url" class="control-label">URL:</label>
                            <input type="text" name="url" class="form-control" id="article-url">
                            <input type="checkbox" name="system-url" id="system-url">自动生成url
                        </div>
                        <div class="form-group">
                            <label for="body" class="control-label">正文:</label>
                            <textarea name="body" id="body" cols="30" rows="20" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">提交</button>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        var convertUrl = '{{ route('admin.converturl') }}';
        var token = '{{ csrf_token() }}';
    </script>
@endsection