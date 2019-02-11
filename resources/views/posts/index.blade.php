@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
    <h1>Deposite Transactions</h1>
    @if(count($posts)>0)
            @foreach($posts as $post)
            <div >
                 <h3><a href="/posts/{{$post->id}}"> {{$post->title }}</a></h3>
                 <small>  on {{ $post->created_at }}  {{ $post->body }}</small>
            </div>
            {{ $posts->links()}}
            @endforeach
          
    @else
            <p> No posts found</p>
    @endif
</div>

@endsection