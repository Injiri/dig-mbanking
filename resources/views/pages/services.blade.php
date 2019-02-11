
@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
<h1>{{  $title}}</h1>
@if(count($services)>0)
    @foreach($services as $serviceprovided)
    <li class="list-group-item">{{$serviceprovided}}</li>
    @endforeach
    @endif
@endsection
</div>