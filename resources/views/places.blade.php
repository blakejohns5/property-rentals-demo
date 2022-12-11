@extends('layout')
@section('content')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

<h1>{{$heading}}</h1>

@if(count($places) == 0)
  <p>No listings found</p>
@else


@foreach($places as $place)
  <div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex">
      <img class="hidden w-16 mr-6 md:block" src="images/logo.png" alt="rental image"/>  
      <div>
        <h3 class="text-2xl">
          <a href="show.html">{{ $place->title }}</a>
          <p class="bg-red-500 text-xl font-bold mb-4">{{ $place->city }}</p>
          <p>{{$place['description']}}</p>
        </h3>
      </div>  
    </div>
@endforeach

@endif

</div>

@endsection;