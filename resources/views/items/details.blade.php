@extends('layouts.app')
@section('content')

<ul class="list-group col-md-6 mt-5 offset-3">
    <li class=" list-group-item active">{{$item['id']}}</li>
    <li class=" list-group-item">{{$item['title']}}</li>
    <li class=" list-group-item">{{$item['description']}}</li>
</ul>

@endsection
