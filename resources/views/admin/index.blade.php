<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Restaurant Manager</title>

	<link rel="shortcut icon" type="image/x-icon" href="{{ URL('images2/spatula2.svg') }}">

	<link href="{{ URL('css/sb-admin-2.min.css') }}" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>

	<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

	<script src="{{ URL('js/jquery.dataTables.min.js') }}"></script>
	<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
</head>
<body id="page-top">
	<div id="wrapper">

		@include('admin.app.menu')

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				@include('admin.app.header')

				<div class="container-fluid">
                    
					@yield('admin_content')
					
				</div>
			</div>

			@include('admin.app.footer')
		</div>
	</div>


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
	<script src="{{ URL('js/sb-admin-2.min.js') }}"></script>
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
	<script src="{{ URL('js/bootstrap.bundle.min.js') }}"></script>
	
</body>

</html>