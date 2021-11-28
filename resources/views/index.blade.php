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
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "101080382420858");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    
@endsection
