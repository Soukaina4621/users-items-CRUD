@extends('layouts.app')
@section('content')
    <h1>welcome</h1>
    {{-- <h2> {{$fullName}} </h2> --}}
    {{-- or <php echo $fullName?> --}}
    {{-- @foreach ($users as $user)
        <ul>
            <li>{{$user['name']}}</li>
            <li>{{$user['email']}}</li>
            <li>{{$user['phone']}}</li>
        </ul>
    @endforeach --}}
<div class="container">
    <div class="row">
    @forelse ($users as $key=>$user)
        <ul class="list-group col-md-4">
            <li class=" list-group-item">{{$user['name']}}</li>
            <li class=" list-group-item">{{$user['email']}}</li>
            <li class=" list-group-item">{{$user['phone']}}</li>
            <li class=" list-group-item">
            <a href="{{route('UserDetails', $key)}}" class="btn btn-info">view details</a>
            </li>
        </ul>
    @empty
        <h1>NO DATA</h1>
    @endforelse
    </div>
</div>
    @endsection

