<header id="main-nav">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="container">
        <a id="navigation" href="#"><i class="fa fa-bars"></i></a>
        <div id="slide_out_menu">
            <a href="#" class="menu-close"><i class="fa fa-times"></i></a>
            <ul>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/products') }}">Products</a></li>
                <li><a href="{{ url('/program') }}">Program</a></li>
                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                @if(!Session::has('customer'))
                <li><a href="{{ route('login.user') }}">Log In</a></li>
                @elseif(Session::has('customer'))
                <li><a href="#">Transaction History</a></li>
                @endif
                <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
            </ul>
            <div class="slide_out_menu_footer">
                <div class="more-info"></div>
                <ul class="socials">
                    <li><a href="https://www.instagram.com/hejotekno.indonesia/"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCiPGPJWy0f7eB4tuV0lCVsg/videos"><i class="fa fa-youtube-play"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <ul class="left">
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/products') }}">Products</a></li>
                    <li><a href="{{ url('/program') }}">Program</a></li>
                </ul>
            </div>
            <div class="col-md-4 text-center">
                <a href="{{ url('/') }}" class="logo"><img src="{{ asset('images/tti-ht.png') }}" alt="Hejotekno"></a>
            </div>
            <div class="col-md-4">
                <ul class="right">
                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                    @if(!Session::has('customer'))
                    <div class="btn btn-green">
                        <li><a href="{{ route('login.user') }}">Log In</a></li>
                    </div>
                    @elseif(Session::has('customer'))
                    <li><a href="/history">Transaction History</a></li>
                    <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</header>

@if(Session::has('success'))
<script>
    alert("{{ Session::get('success') }}");
</script>
@endif

@if(Session::has('error'))
<script>
    alert("{{ Session::get('error') }}");
</script>
@endif
