@extends('layouts.app')
@section('content')

<ul class="list-group col-md-6 mt-5 offset-3">
    <li class=" list-group-item">{{$user['name']}}</li>
    <li class=" list-group-item">{{$user['email']}}</li>
    <li class=" list-group-item">{{$user['phone']}}</li>
</ul>
@endsection
