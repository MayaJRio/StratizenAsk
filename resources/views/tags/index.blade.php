@extends('layouts.app')

@section('content')
      <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto">
      <div class="display-3"><h1>Tags</h1></div>
      <p>Here you can find questions and posts easily using the tags as keywords </p>
      </div>
<form action="{{ route('search') }}"class="form-inline my-2 my-lg-0">
            <input name="query" id="query" class="form-control mr-sm-2" type="text" placeholder="Search Tags" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
<div class="border mt-4 shadow-sm card-deck pb-2">
      @if(count($tags)>1)
      @foreach ($tags as $tag)
            <div class="col-3 card-group pb-2 mt-2">
                  <div class="card-body border">
                  <h3 class="title"><a href="{{ route ('show',['tag' => $tag] ) }}">{{$tag->name}}</a></h3>
                        <p>{{$tag->description}}</p>
                  </div>
            </div>
      @endforeach 
     @else
            <p>Nothing Found</p>
      @endif

</div>

@endsection