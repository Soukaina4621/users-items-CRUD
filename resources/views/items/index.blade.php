@extends('layouts.app')
@section('content')
<div class="container mt-5">

   {{-- this condition is for checking if the session is full with the message(status) in the function 'postcont' --}}
   @if(session()->has('status'))
<div class="alert alert-success" role="alert">'
   {{session()->get('status')}}
</div>
@endif

    <div class="row">

@forelse ($items as $item)
<ul class="list-group col-md-4 mt-2">
    
    <li class="list-group-item active"> {{$item->id}} </li>
    <li class="list-group-item"> {{$item->title}} </li>
    <li class="list-group-item">  {{$item->description}} </li>
    <li class=" list-group-item">
    <a href="{{route('ItemDetails',$item->id)}}" class="btn btn-info"> Details </a>
    

 </li>
 <li class=" list-group-item">
    <form action="{{route('deleteItem', $item->id)}}" method="get">
      @csrf
      @method('DELETE')
         
    <button class="btn btn-danger">Delete</button>
    </form>
 </li>
  <li class=" list-group-item">
    <a href="{{route('editItem',$item->id)}}" class="btn btn-warning"> Edit</a>
 </li>
 <li class="list-group-item">
    <span class="text-secondary"> posted at :{{$item-> created_at-> diffForHumans()}}</span>
 </li>
</ul>

    
@empty
   <h1> no data </h1>
@endforelse
</div>
</div>
@endsection