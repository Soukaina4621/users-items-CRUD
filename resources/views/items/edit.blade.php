@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
        <form action="{{route('updateItem', $item->id)}}" class="form-group col-md-6 offset-3 mt-3" method="POST">
            <h1 style="text-align:center; color:blueviolet">Edit Item</h1>
            @method('PUT')
            @csrf
            <input type="title" class="form-control mt-2" name="title" placeholder="title" value={{$item->title}}>
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <input type="text" class="form-control mt-2" name="description" placeholder="description" value={{$item->description}}>
            @error('description')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <button class="btn btn-success mt-2 form-control">save</button>
        </form>
    </div>
</div>
@endsection