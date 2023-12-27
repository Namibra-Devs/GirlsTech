@extends('frontend.layout')

@section('content')
    <section class="home">

        <div class="home_banner_text">
            <h1>Learn from the experiences of women who have excelled in techs</h1>
        </div>
        <div class="services_container">
            <div class="service-box">
                <div class="service-text" style="background-color: transparent;">

                    <article class="reviews">
                        <div class="review-content">
                            <h2 id="blog-title"></h2>
                            <h3 class="date" style="margin-bottom: 1rem;"> <span id="blog-day"></span> <span
                                    id="blog-month"></span>, <span id="blog-date"></span></h3>
                            <p id="blog-text"></p>
                        </div>
                        <div class="button-container">
                            <button class="prev-btn">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="next-btn">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </article>

                </div>
                <div class="service-img perk-box">
                    <img src="img/program-pic-1.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <div class="navbar-overlay">
        <div class="navbar-details">
            <span class="close-nav">
                <i class="fas fa-window-close"></i>
            </span>
            <div class="overlay-links">
                <a href="index.html" class="active-link">About us</a>
                <a href="event.html">Events</a>
                <a href="program.html">Programs</a>
                <!-- <a href="portfolio.html">Get Involve</a> -->
                <a href="blog.html">Blog</a>
                <a href="contact.html">Contact Us</a>
            </div>
        </div>
    </div>
    <section class="blogPost">
        <div class="title" style="margin-bottom: 1rem;">
            <h1>More blogs</h1>
        </div>
        <div class="postCardContainer">
            <div class="card">
                <img src="img/bog3.png" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>Dr Najiya Min</b></h4>
                    <p>Understanding Digital Eye Strain: Tips for Optimal Eye Health in the Digital Age</p>
                    <a href="#">Read more</a>
                </div>
            </div>
            <div class="card">
                <img src="img/bog1.png" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>Dr Najiya Min</b></h4>
                    <p>Understanding Digital Eye Strain: Tips for Optimal Eye Health in the Digital Age</p>
                    <a href="#">Read more</a>
                </div>
            </div>
            <div class="card">
                <img src="img/bog2.png" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>Dr Najiya Min</b></h4>
                    <p>Understanding Digital Eye Strain: Tips for Optimal Eye Health in the Digital Age</p>
                    <a href="#">Read more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="mentorship">
        <div class="mentorship-container" style="display: grid; justify-content: center;align-items: center;">
            <div class="mentor-text">
                <h1 style="text-align: center;">Become a Member</h1>
                <p style="text-align: center;">Join a community that embraces diversity and empowers women to flourish in
                    the field of technology.</p>
            </div>
            <div class="mentor-btn" style="margin: 0 auto;">
                <a href="#" style="text-align: center;">Join Us</a>
            </div>
        </div>
    </section>
    
@endsection
