@extends('app.app')

@section('content')

    @include('app.carousel')

    @switch($route)
        @case('TrangChu')

            @include('app.body')
            @break
    
        @case('GioiThieu')

            @include('app.gioithieu')
            @break    
        
        @default
            @include('app.body')
            
    @endswitch
    
@endsection