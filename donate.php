<?php
require_once('./admin/auxiliaries.php');
include('./admin/database/config.php')
?>

<?php
$footerInfo = getWebsiteDetails();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/owl.carousel.min.css">
  <link rel="stylesheet" href="./css/owl.theme.default.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="font-awesome-6/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <title>GirlsTech</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
    }

    .background-blur {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      backdrop-filter: blur(5px);
      z-index: 999;
      display: none;
    }

    .popup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border: 1px solid #ccc;
      padding: 20px;
      background-color: #fff;
      z-index: 1000;
    }

    .popup-content {
      text-align: left;
    }

    .close {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 20px;
      cursor: pointer;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    label {
      margin-bottom: 5px;
    }

    input {
      padding: 6px;
    }

    button {
      padding: 10px;
      background-image: linear-gradient(to right, hwb(243 4% 53% / 0.726), hwb(195 2% 49% / 0.726));
      color: #fff;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background-image: linear-gradient(to right, hwb(243 4% 53% / 0.726), hwb(195 2% 49% / 0.726));
    }
  </style>
</head>

<body>

  <div class="navbar">
    <div class="navbar-center">
      <div class="logo">
        <a href="index.php">
          <img width="50px" src="./assets/uploads/<?php $websiteName = getWebsiteDetails();
                                                  echo $websiteName['logo']; ?>" alt="">
        </a>
      </div>
      <div class="navbar-links">
        <a href="index.php">About us</a>
        <a href="event.php">Events</a>
        <a href="program.php">Programs</a>
        <!-- <a href="portfolio.php">Get Involve</a> -->
        <a href="blog.php" class="active-link">Blog</a>
        <a href="contact.php">Contact Us</a>
      </div>
      <div class="donate-btn">
        <a href="donate.php">Donate</a>
      </div>
      <div class="toggle">
        <i class="fa fa-bars"></i>
      </div>
    </div>
  </div>

  <section class="home">

    <div class="home_banner_text">
      <h1>Support and Donation</h1>
      <p>The support and contributions from our advocates and donors play a crucial role in making a
        significant impact and reaching thousands of women in technology throughout Ghana!</p>
      <a href="contact.php">Join Our Community </a>
    </div>
    <div class="support">
      <div class="empower">
        <h2>Empower Tomorrow: <br> Support Today</h2>
        <p>Collaborate closely with us to accomplish our mission of
          extending our reach to more women in technology across Ghana.</p>
        <!-- <div class="supportLinks">
          <button type="button"><a href="#">Get Started</a></button>
        </div> -->
      </div>
      <div class="opportunity">
        <h2>Elevate Tech Opportunities: Empower Women, <br> Transform Futures</h2>
        <p>Join forces with us to fulfill our mission of expanding our
          outreach to more women in the field of technology throughout Ghana.</p>
        <div class="supportLinks">
          <button id="openPopupBtn"><a href="#">Donate</a> </button>
        </div>
      </div>
    </div>


    <div class="background-blur" id="backgroundBlur"></div>

    <div id="donationPopup" class="popup">
      <div class="popup-content">
        <span class="close" id="closePopupBtn">&times;</span>
        <h2>Make a Donation</h2>
        <form id="donationForm">
          <label for="fullName">Full Name:</label>
          <input type="text" id="fullName" name="fullName" required>

          <label for="emailAddress">Email Address:</label>
          <input type="email" id="emailAddress" name="emailAddress" required>

          <label for="donationAmount">Donation Amount:</label>
          <input type="number" id="donationAmount" name="donationAmount" min="1" required>

          <button type="button" id="submitDonation">Donate</button>
        </form>
      </div>
    </div>

    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const openPopupBtn = document.getElementById('openPopupBtn');
        const backgroundBlur = document.getElementById('backgroundBlur');

        openPopupBtn.addEventListener('click', function () {
            backgroundBlur.style.display = 'block';

            // Fetch Paystack API key from the server using AJAX
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    const paystackApiKey = xhr.responseText.trim();

                    // Continue with your existing code
                    const closePopupBtn = document.getElementById('closePopupBtn');
                    const donationPopup = document.getElementById('donationPopup');
                    const submitDonationBtn = document.getElementById('submitDonation');

                    donationPopup.style.display = 'block';

                    closePopupBtn.addEventListener('click', function () {
                        donationPopup.style.display = 'none';
                        backgroundBlur.style.display = 'none';
                    });

                    window.addEventListener('click', function (event) {
                        if (event.target === donationPopup) {
                            donationPopup.style.display = 'none';
                            backgroundBlur.style.display = 'none';
                        }
                    });

                    submitDonationBtn.addEventListener('click', function () {
                        const fullName = document.getElementById('fullName').value;
                        const emailAddress = document.getElementById('emailAddress').value;
                        const donationAmount = document.getElementById('donationAmount').value;

                        // Set up Paystack configuration
                        const paystackConfig = {
                            key: paystackApiKey,
                            email: emailAddress,
                            amount: donationAmount * 100,
                            currency: 'GHS',
                            ref: `donation_${Date.now()}_${Math.floor(Math.random() * 1000)}`,
                            callback: function (response) {
                                alert(`Thank you, ${fullName} (${emailAddress}), for your donation of $${donationAmount}!`);
                                donationPopup.style.display = 'none';
                                backgroundBlur.style.display = 'none';
                            },
                            onClose: function () {
                                donationPopup.style.display = 'none';
                                backgroundBlur.style.display = 'none';
                            },
                        };

                        const handler = PaystackPop.setup(paystackConfig);
                        handler.openIframe();
                    });
                }
            };

            xhr.open('GET', 'get_api_key.php', true);
            xhr.send();
        });
    });
</script>
    <section class="footer">
      <div class="teletech">
        <div>
          <div class="footer-logo">
            <a>
              <h1><?php echo $footerInfo['website_name'] ?></h1>
            </a>
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
          <a href="">
            <div class="fab fa-facebook"></div>
          </a>
          <a href="">
            <div class="fab fa-twitter"></div>
          </a>
          <a href="">
            <div class="fab fa-linkedin"></div>
          </a>
          <a href="">
            <div class="fab fa-instagram"></div>
          </a>
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