     
@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
     <h1>{{$title}}</h1>
     <p>Banking made easier</p>
     <p><a class="btn btn-primary btnlg" href="login",role="button">login</a> <a class="btn btn-success btnlg" href="register" role="button">Register</a></p>
    </div>
@endsection