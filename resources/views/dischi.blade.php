@extends('layouts.layout-home')

@section('cdBoolean')
    <div class="cds-container container">
        @foreach ( $data as $cd)
            <div class="cd">
                <img src="{{ $cd->poster}}" alt="">
                <h3>{{$cd->title}}</h3>
                <span class="author">{{$cd->author}}</span>
                <span class="year">{{$cd->year}}</span>
            </div> 
        @endforeach 
    </div>
@endsection