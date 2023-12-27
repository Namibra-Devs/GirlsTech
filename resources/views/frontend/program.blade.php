@extends('frontend.layout')

@section('content')
<section class="home">
    
    <div class="team-members">
        <div class="team-member">
            <div class="member-details">
                <img src="img/home-1.png" alt="">
            </div>  
        </div> 
        <div class="team-member">
            <div class="member-details">
                <img src="img/home-2.png" alt="">
            </div>  
        </div> 
        <div class="team-member">
            <div class="member-details">
                <img src="img/home-3.png" alt="">
            </div>  
        </div> 
        <div class="team-member">
            <div class="member-details">
                <img src="img/home-4.png" alt="">
            </div>  
        </div> 
    </div>
</section>
<section class="services program">
    <div class="title">
        <h1>Our Programs</h1>
    </div>
    <div class="program-color-group">
        <div class="color1"></div>
        <div class="color2"></div>
        <div class="color3"></div>
    </div>
    <div class="services_container">
       <div class="service-box">
        <div class="service-text" style="background-color: transparent;">
            <h2>Tech Workshops and Bootcamps</h2>
            <p>Our mentorship program pairs experienced professionals with aspiring women in tech, 
                facilitating knowledge transfer and professional growth.</p>
        </div>
        <div class="service-text" style="background-color: transparent;">
            <h2>Mentor-Match Program</h2>
            <p>GirlyTech organises workshops and bootcamps focused on coding, 
                cybersecurity, data science, and other in-demand tech skills.</p>
        </div>
       </div>
       <div class="service-box">
        <div class="service-text" style="background-color: transparent;">
            <h2>Industry Partnerships</h2>
            <p>Our mentorship program pairs experienced professionals with aspiring women in tech, 
                facilitating knowledge transfer and professional growth.</p>
        </div>
        <div class="service-text" style="background-color: transparent;">
            <h2>Industry Partnerships</h2>
            <p>GirlyTech organises workshops and bootcamps focused on coding, 
                cybersecurity, data science, and other in-demand tech skill.</p>
        </div>
       </div>
    </div>
</section>
<section class="mentorship">
    <div class="mentorship-color-group1">
        <div class="color1"></div>
        <div class="color2"></div>
        <div class="color3"></div>
    </div>
    <!-- <div class="mentorship-color-group2">
        <div class="color1"></div>
        <div class="color2"></div>
        <div class="color3"></div>
    </div> -->
    <div class="mentorship-container" style="display: grid; justify-content: center;align-items: center;">
        <div class="mentor-text">
        <h1 style="text-align: center;">Become a Member</h1>
        <p style="text-align: center;">Join a community that embraces diversity and empowers women to flourish in the field of technology.</p>
        </div>  
        <div class="mentor-btn" style="margin: 0 auto;">
            <a href="#" style="text-align: center;">Join Us</a>
        </div>
    </div>
</section>
@endsection