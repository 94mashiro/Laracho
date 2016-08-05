@extends('.admin.layout')
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">文章管理 | <a href="{{ route('admin.gotoaddarticle') }}">添加文章</a></div>
                <div class="panel-body">
                    @if(\App\Article::all()->count() > 0)
                        @foreach(\App\Article::all() as $article)
                            <div class="article">
                                <h3>{{ $article->id }}. {{ $article->title }}</h3>
                                <div class="operation">
                                    <a href="#" class="btn btn-primary">修改</a>
                                    <a href="#" class="btn btn-danger">删除</a>
                                </div>
                                <hr>
                            </div>
                        @endforeach
                    @else
                        <div class="article">
                            <h4>你的博客还没有文章,请添加。</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection