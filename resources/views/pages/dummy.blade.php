@extends('layouts.app')

@section('content')
    @if (count($dummies) > 0)
        <ul>
            @foreach ($dummies as $dummy)
                <li class="list-group-item">{{$dummy}}</li>
            @endforeach
        </ul>
    @else
        <p>Not Available</p>
    @endif
@endsection