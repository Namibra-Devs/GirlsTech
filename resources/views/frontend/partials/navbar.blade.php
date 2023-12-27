<div class="navbar">
    <div class="navbar-center">
        <div class="logo">
            <a href="{{ route('front.index')}}">
                <img width="60px" src="img/logo-tech.png" alt="">
            </a>
        </div>
        <div class="navbar-links">
            <a href="{{ route('front.index') }}" class="active-links">About us</a>
            <a href="{{ route('front.event') }}">Events</a>
            <a href="{{ route('front.program') }}">Programs</a>
            <!-- <a href="portfolio.html">Get Involve</a> -->
            <a href="{{ route('front.blog') }}">Blog</a>
            <a href="{{ route('front.contact') }}">Contact Us</a>
         </div>
         <div class="donate-btn">
            <a href="{{ route('front.donate') }}">Donate</a>
         </div>
         <div class="toggle">
            <i class="fa fa-bars"></i>
         </div>
    </div>
</div>
<div class="navbar-overlay">
    <div class="navbar-details">   
        <span class="close-nav">
            <i class="fas fa-window-close"></i>
        </span>
        <div class="overlay-links">
            <a href="{{ route('front.index') }}" class="active-links">About us</a>
            <a href="{{ route('front.event') }}">Events</a>
            <a href="{{ route('front.program') }}">Programs</a>
            <!-- <a href="portfolio.html">Get Involve</a> -->
            <a href="{{ route('front.blog') }}">Blog</a>
            <a href="{{ route('front.contact') }}">Contact Us</a>
        </div>
    </div>
</div>