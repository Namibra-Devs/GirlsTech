<?php
        $footerInfo = getWebsiteDetails();
        ?>
<section class="footer">
    <div class="teletech">
        <div>   
            <div class="footer-logo">
                <a><h1><?php echo $footerInfo['website_name'] ?></h1></a>
            </div>
            <div class="teletech-text">
                <p><?php echo $footerInfo['footer_about'] ?></p>
            </div>
        </div>
        <div>
            <p><?php echo $footerInfo['contact_phone'] ?></p>
            <a id="mailto" href="mailto:info.girlytech@gmail.com"><?php echo $footerInfo['contact_email'] ?></a>
        </div>
    </div>
    <div class="quick-links">
        <h3>Quick Links</h3>
        <a href="index.php">About us</a>
        <a href="event.php">Events</a>
        <a href="program.php">Programs</a>
        <a href="blog.php">Blog</a>
        <a href="contact.php">Contact Us</a>
    </div>
    <div class="get-intouch">
        <div class="social-links">
            <a href=""><div class="fab fa-facebook"></div></a>
            <a href=""><div class="fab fa-twitter"></div></a>
            <a href=""><div class="fab fa-linkedin"></div></a>
            <a href=""><div class="fab fa-instagram"></div></a>
        </div>
        <div style="display: flex;align-items: center;gap: .6rem;">
            <img src="img/Vector.png" alt="">
            <p>Charity organisation</p>
        </div>
       
    </div>
</section>

<script src="./js/jquery.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="./js/owl.carousel.min.js"></script>
<script src="js/carousel.js"></script>
    <script src="./js/app.js"></script>
  </body>
</body>
</html>