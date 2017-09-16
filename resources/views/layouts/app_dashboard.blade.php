<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Code300</title>

    <!-- Styles -->
    <!-- bootstrap 4.x is supported. You can also use the bootstrap css 3.3.x versions -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
<link href="{{ asset('css/fileinput.min.css') }}" media="all" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/fileinput-rtl.min.css') }}" media="all" rel="stylesheet" type="text/css" />
 <link href="{{ asset('css/fun.css') }}" rel="stylesheet" type="text/css" />
<!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
<!-- link href="path/to/css/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css" /-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- piexif.min.js is only needed for restoring exif data in resized images and when you 
    wish to resize images before upload. This must be loaded before fileinput.min.js -->
<script src="{{ asset('js/plugins/piexif.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('themes/gly/theme.js') }}" type="text/javascript"></script>
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview. 
    This must be loaded before fileinput.min.js -->
<script src="{{ asset('js/plugins/sortable.min.js') }}" type="text/javascript"></script>
<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for 
    HTML files. This must be loaded before fileinput.min.js -->
<script src="{{ asset('js/plugins/purify.min.js') }}" type="text/javascript"></script>
<!-- popper.min.js below is needed if you use bootstrap 4.x. You can also use the bootstrap js 
   3.3.x versions without popper.min.js. -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<!-- bootstrap.min.js below is needed if you wish to zoom and preview file content in a detail modal
    dialog. bootstrap 4.x is supported. You can also use the bootstrap js 3.3.x versions. -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
<!-- the main fileinput plugin file -->
<script src="{{ asset('js/fileinput.min.js') }}"></script>
<script src="{{ asset('js/locales/gl.js') }}"></script>
<!-- optionally if you need a theme like font awesome theme you can include it as mentioned below -->
<script src="{{ asset('js/locales/fa.js') }}"></script>
<!-- optionally if you need translation for your language then include  locale file as mentioned below -->
<script src="{{ asset('js/(lang).js') }}"></script>
</head>
<body>
    <div>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

                    <!-- Branding Image -->
                    <a style="color: blue;" class="navbar-brand" href="{{ url('/') }}">
                        <strong>{{ config('app_dashboard.name', 'Code300') }}</strong>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav mr-auto">
                        
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ url('/particles') }}">Have Fun</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Dropdown link
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                   </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown nav-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div style="margin-top: 75px;"></div>

        @yield('content')
    </div>

    <!-- Scripts -->
<script src="{{ asset('themes/gly/theme.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('js/sketch.min.js') }}"></script>
    <script>
$(document).on('ready', function() {
    $("#input-b8").fileinput({
        rtl: true,
        allowedFileExtensions: ["jpg", "png", "gif"]
    });
});
</script>
</body>
</html>
