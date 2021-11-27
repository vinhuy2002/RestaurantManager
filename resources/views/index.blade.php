@extends('app.app')

@section('content')

    @switch($route)
        @case('TrangChu')
            @include('app.carousel')
            @include('app.body')
            @break
    
        @case('GioiThieu')
            @include('app.carousel')
            @include('app.gioithieu')
            @break 
            
        @case('NhaHang')

            @include('app.nhahang')
            @break 

        @case('id-nha-hang')

            @include('app.datban')
            @break
        
        @default
            @include('app.carousel')
            @include('app.body')
            
    @endswitch
    
@endsection