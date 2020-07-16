    @extends('layouts.app')

    @section('content')
        <div class="jumbotron mt-3 text-center">
            <h1>{{$title}}</h1>
           <h3>My name is Chukwuka Justice Emi</h3>
           <h4>This is a site where you can manage your Blog Posts. Do have a nice time...</h4>
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>  <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        </div>
    @endsection
