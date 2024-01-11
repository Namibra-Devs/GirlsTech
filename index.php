<?php include('./include/header.php') ?>

<?php
include('./admin/database/config.php');


$error_message1 = '';
$success_message1 = '';

if (isset($_POST['form_subscribe'])) {


    $send_email_from  = 'abdulgafurshaattir@gmail.com';
    $receive_email_to = 'abdulgafurshaattir@gmail.com';
    $smtp_host        = 'smtp.gmail.com';
    $smtp_port        = '587';
    $smtp_username    = 'jobid@ubids.edu.gh';
    $smtp_password    = 'b7ye6z9h1';


    if (empty($_POST['email_subscribe'])) {
        $valid = 0;
        $error_message1 .= 'Email Field is empty';
    } else {
        if (filter_var($_POST['email_subscribe'], FILTER_VALIDATE_EMAIL) === false) {
            $valid = 0;
            $error_message1 .= 'Invalid email';
        } else {
            // Getting current date
            $current_date = date('Y-m-d');

            // Getting current date and time
            $current_date_time = date('Y-m-d H:i:s');

            // Inserting data into the database
            $statement = $pdo->prepare("INSERT INTO tbl_subscriber (subs_email,subs_date,subs_date_time,subs_hash,subs_active) VALUES (?,?,?,?,?)");
            $statement->execute(array($_POST['email_subscribe'], $current_date, $current_date_time, '', 1));

            $success_message1 = 'Thnak you for subscribing';
        }
    }
}

if ($error_message1 != '') {
    echo "<script>alert('" . $error_message1 . "')</script>";
}
if ($success_message1 != '') {
    echo "<script>alert('" . $success_message1 . "')</script>";
}

?>

<section class="home">

    <div class="home_banner_text">
        <h1>GirlyTech: Bridging Tech's Gender Gap, Empowering Women, Fostering Inclusion</h1>
        <p>Unlock Your Potential and Thrive in the Dynamic World of Technology</p>
        <a href="contact.php">Join Our Community </a>
    </div>
    <div class="team-members">
        <div class="team-member">
            <div class="member-details">
                <img src="img/home-1.png" alt="">
            </div>
            <div class="home-color1"></div>
            <div class="home-color2"></div>
        </div>
        <div class="team-member">
            <div class="member-details">
                <img src="img/home-4.png" alt="">
            </div>
            <div class="home-color3"></div>
        </div>
        <div class="team-member">
            <div class="member-details">
                <img src="img/home-3.png" alt="">
            </div>
        </div>
        <div class="team-member">
            <div class="member-details">
                <img src="img/home-2.png" alt="">
            </div>
            <div class="home-color4"></div>
        </div>
    </div>
</section>

<section class="services">
    <div class="services_container">
        <div class="service-box mission-vision-box">
            <div class="about-mission-vision">
                <article class="about-tab">
                    <div class="btn-container">
                        <button class="tab-btn active-tab" data-id="about">About us</button>
                        <button class="tab-btn" data-id="mission">Mission</button>
                        <button class="tab-btn" data-id="vision">Vision</button>
                    </div>
                    <article class="about-content">
                        <div class="content-text active-tab" id="about">
                            <h4>About US</h4>
                            <p>GirlyTech is a forward-thinking foundation established with the goal of
                                revolutionising the tech landscape by promoting gender diversity and inclusivity.
                                We recognize the immense potential and talent that women bring to the tech
                                industry and are committed to providing the resources, support, and opportunities
                                necessary for their success.</p>
                        </div>
                        <div class="content-text" id="mission">
                            <h4>Our Mission</h4>
                            <p>To cultivate a diverse and inclusive community of girls and women in tech, actively addressing the gender gap through targeted STEM education programs, career guidance, and networking opportunities.
                                We empower them to break barriers and become influential leaders in tech and beyond.</p>
                        </div>
                        <div class="content-text" id="vision">
                            <h4>Our Vision</h4>
                            <p>To ignite a passion for technology in girls from a young age, fostering a sense of creativity, problem-solving, and critical thinking. We believe that every girl has the potential to be a tech whiz, and
                                we aim to provide them with the tools and resources they need to unlock their talents.</p>
                        </div>
                    </article>
                </article>
            </div>
            <div class="service-img">
                <img src="img/about-pic-1.png" alt="jag">
                <!-- <img src="img/about-pic-2.png" alt="jag">
                <img src="img/about-pic-3.png" alt="jag">
                <img src="img/about-pic-4.png" alt="jag"> -->
            </div>
        </div>
    </div>
    <!-- <button class="btn"> <a href="#">View All <img src="img/Vector.png" alt=""></a></button> -->
</section>
<section class="expertise">
    <div class="title">
        <h1>Programs and Initiatives</h1>
        <p style="text-align: center; margin-top: 1rem;">Lorem Ipsum is simply dummy text of the printing</p>
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
<section class="testimonials">
    <div class="title">
        <h1>Testimonial</h1>
    </div>
    <div class="wrapper">
        <div class="carousel owl-carousel">
            <div class="card">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply
                    dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="testimony-img">
                    <img src="img/Ellipse 2.png" alt="">
                    <p>Min Ling</p>
                </div>
            </div>
            <div class="card">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply
                    dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="testimony-img">
                    <img src="img/Ellipse 2.png" alt="">
                    <p>Min Ling</p>
                </div>
            </div>
            <div class="card">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply
                    dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="testimony-img">
                    <img src="img/Ellipse 2.png" alt="">
                    <p>Min Ling</p>
                </div>
            </div>
            <div class="card">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply
                    dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="testimony-img">
                    <div><img src="img/Ellipse 2.png" alt=""></div>
                    <p>Min Ling</p>
                </div>
            </div>
            <div class="card">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply
                    dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="testimony-img" style="float: left; display: flex;gap: .5rem; align-items: center;">
                    <img src="img/Ellipse 2.png" alt="">
                    <p>Min Ling</p>
                </div>
            </div>


        </div>
    </div>
</section>
<section class="blog">
    <div class="title" style="margin-bottom: 1rem;">
        <h1>Event calender</h1>
    </div>
    <div class="blog-container">

        <div class="blog-details">
            <div class="blog-img" style="margin-bottom: 1rem;">
                <img src="img/events-cal-1.png" alt="">
            </div>
            <div class="blog-details-text">
                <div>
                    <h3>Title: Empowering <br> Women in AI</h3>
                </div>
                <div>
                    <p> <span style="color: #00001f;">May 9 – 14, 2023 </span> <br><br> 10:00 am – 8:00 pm</p>
                </div>
                <div>
                    <p><i class="fa fa-location-dot"></i>No 712 James OBI Street, <br> Lagos ,Nigeria</p>
                </div>

            </div>
        </div>
        <div class="blog-details">
            <div class="blog-img" style="margin-bottom: 1rem;">
                <img src="img/events-cal-1.png" alt="">
            </div>
            <div class="blog-details-text">
                <div>
                    <h3>Title: Empowering <br> Women in AI</h3>
                </div>
                <div>
                    <p> <span style="color: #00001f;">May 9 – 14, 2023 </span> <br><br> 10:00 am – 8:00 pm</p>
                </div>
                <div>
                    <p><i class="fa fa-location-dot"></i>No 712 James OBI Street, <br> Lagos ,Nigeria</p>
                </div>

            </div>
        </div>
        <div class="blog-details">
            <div class="blog-img" style="margin-bottom: 1rem;">
                <img src="img/events-cal-1.png" alt="">
            </div>
            <div class="blog-details-text">
                <div>
                    <h3>Title: Empowering <br> Women in AI</h3>
                </div>
                <div>
                    <p> <span style="color: #00001f;">May 9 – 14, 2023 </span> <br><br> 10:00 am – 8:00 pm</p>
                </div>
                <div>
                    <p><i class="fa fa-location-dot"></i>No 712 James OBI Street, <br> Lagos ,Nigeria</p>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="newsLetter">
    <div class="newletter-container">
        <div class="newletter-text">
            <h1>Sign up to our newsletter</h1>
            <p>Lorem Ipsum is simply dummy</p>
        </div>

        <form class="search-container" action="" method="post" class="subscription-form">
     
            <input type="text" placeholder="Enter your Email" name="email_subscribe" class="search-input">
                        <input type="submit" value="Subscribe" name="form_subscribe" class="search-button">

        </form>
    </div>
</section>

<!-- Blogs section -->
<section class="blogPost">
    <div class="title" style="margin-bottom: 1rem;">
        <h1>Blog & News</h1>
    </div>

    <div class="postCardContainer">
        <?php getBlogs(); ?>
    </div>
</section>
<section class="services perk-container program">
    <div class="title">
        <h1>Perks for Members</h1>
    </div>
    <div class="perk-color-group">
        <div class="color1"></div>
        <div class="color2"></div>
        <div class="color3"></div>
    </div>
    <div class="program-color-group">
        <div class="color1"></div>
        <div class="color2"></div>
        <div class="color3"></div>
    </div>
    <div class="services_container">
        <div class="service-box perk-box">
            <div class="service-img">
                <img style="z-index: 1;" src="img/perk1.png" alt="">
            </div>
            <div class="service-text">
                <h2>Early Access to Courses and Resources</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem
                    Ipsum is simply dummy text of the printing and typesetting industry..</p>
            </div>
        </div>
        <div class="service-box perk-box">
            <div class="service-text">
                <h2>Tailored Mentorship Programs</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem
                    Ipsum is simply dummy text of the printing and typesetting industry..</p>
            </div>
            <div class="service-img">
                <img src="img/perk2.png" alt="">
            </div>
        </div>
        <div class="service-box perk-box">
            <div class="service-img">
                <img src="img/perk3.png" alt="">
            </div>
            <div class="service-text">
                <h2>Tailored Mentorship Programs</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem
                    Ipsum is simply dummy text of the printing and typesetting industry..</p>
            </div>
        </div>
    </div>
</section>
<section class="blogPost">
    <div class="title" style="margin-bottom: 1rem;">
        <h1>Our Team</h1>
        <p style="text-align: center; margin-top: 1rem;">Lorem Ipsum is simply dummy text of the printing</p>
    </div>
    <div class="postCardContainer">
        <?php
        $statement = $pdo->prepare("SELECT 
												
												t1.id,
												t1.name,
												t1.slug,
												t1.designation_id,
												t1.photo,
												t1.facebook,
												t1.twitter,
												t1.linkedin,
												t1.youtube,
												t1.google_plus,
												t1.instagram,
												t1.flickr,

												t2.designation_id,
												t2.designation_name

					                           FROM tbl_team_member t1
					                           JOIN tbl_designation t2
					                           ON t1.designation_id = t2.designation_id
					                           WHERE t1.status = ?
					                           ");
        $statement->execute(array('Active'));
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
        ?>
            <div class="card team-card">
                <img src="./assets/uploads/<?php echo $row['photo'] ?>" alt="<?php echo $row['photo'] ?>" style="width:100%">
                <div class="container">
                    <h4><b><?php echo $row['name'] ?></b></h4>
                    <p><?php echo $row['designation_name'] ?></p>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
</section>
<section class="mentorship">
    <div class="mentorship-container">
        <div class="mentor-text">
            <h1>Our Mentorship Program</h1>
            <p>Join a community that embraces diversity and empowers women to flourish in the field of technology.</p>
        </div>
        <div class="mentor-btn">
            <a href="#">Become a mentor</a>
        </div>
    </div>
</section>

<?php include('./include/footer.php'); ?>