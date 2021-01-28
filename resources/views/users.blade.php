@extends('layouts.layout-home')

@section('cdBoolean')
    <div class="cds-container container">
        @foreach ( $data as $user)
            <div class="cd">
                <img src="{{ $user->image}}" alt="">
                <h3>{{$user->genre}}</h3>
                <span class="author">{{$user->first_name}}</span>
                <span class="year">{{$user->last_name}}</span>
                <a href="/users/{{$user->id}}">vedi dettagli</a>
            </div> 
        @endforeach 
    </div>
@endsection