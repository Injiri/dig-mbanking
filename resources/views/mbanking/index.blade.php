@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
    <h1>Deposite Transactions</h1>
    @if(count($deposites)>0)
            @foreach($deposites as $deposited)
            <div >
                 <h3><a href="/mbanking/{{$deposited->id}}"> {{$deposited->account_number }}</a></h3>
                 <small>  on {{ $deposited->created_at }} Deposted KSH.{{ $deposited->deposited_amount }}</small>
            </div>
           {{ $deposites->links()}}
            @endforeach
          
    @else
            <p> No posts found</p>
    @endif
</div>

@endsection