@extends('layouts.master')

@section('title')
Welcome!
@endsection


@section('content')
 <div class="row">
    <div class="col-md-6">
        <h3>SignUp</h3>
        <form action="{{ route('signup') }}" method="POST">
            <div class="form-group">
                <label for="email"> Your email </label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="first_name"> Your first name </label>
                <input class="form-control" type="text" name="first_name" id="first_name">
            </div>
            <div class="form-group">
                <label for="password"> Your password </label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="hidden" name="_token" value="{{ \Illuminate\Support\Facades\Session::token() }}">
        </form>
    </div>
     <div class="col-md-6">
         <h3>SignIn</h3>
         <form action="{{ route('signin') }}" method="POST">
             <div class="form-group">
                 <label for="email"> Your email </label>
                 <input class="form-control" type="text" name="email" id="email">
             </div>
             <div class="form-group">
                 <label for="password"> Your password </label>
                 <input class="form-control" type="password" name="password" id="password">
             </div>
             <button type="submit" class="btn btn-primary">Submit</button>
             <input type="hidden" name="_token" value="{{ \Illuminate\Support\Facades\Session::token() }}">
         </form>
     </div>
 </div>
@endsection