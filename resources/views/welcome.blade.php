@extends('layouts.master')
@section('title')
    Welcome
@endsection
@section('content')
    @if (count($errors)>0)
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <div class="row" style="margin-top:20px;">
        <div class="col-md-6">
            <h3>SIGN UP</h3>
            <form class="" action="{{ route('signup') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-danger':''}}">
                    <label for="email">Your Email</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group">
                    <label for="first_name">Your First Name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" value="{{ Request::old('first_name')}}">
                </div>
                <div class="form-group">
                    <label for="email">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password')}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
        <div class="col-md-6">
            <h3>SIGN IN</h3>
            <form class="" action="{{ route('signin')}}" method="post">
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email')}}">
                </div>

                <div class="form-group">
                    <label for="email">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password')}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@endsection
