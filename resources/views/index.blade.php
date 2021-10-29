@extends('app.app')

@section('content')

    @include('app.carousel')
    @include('app.login')
    @include('app.register')

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