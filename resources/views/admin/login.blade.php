@extends('.includes.layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3 style="text-align: center; margin-top: 5em;">Sign In</h3>
            <form action="{{ route('admin.signin') }}" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Log In</button>
                {{ csrf_field() }}
            </form>
            @include('includes.message')
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3 style="text-align: center; margin-top: 5em;">Register</h3>
            <form action="{{ route('admin.register') }}" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nickname:</label>
                    <input type="text" name="nickname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Log In</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection