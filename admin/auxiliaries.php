<?php

// get company name function
function getWebsiteDetails()
{
  include('./admin/database/config.php');
  $statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_ASSOC);
  foreach ($result as $row) {
    return $row;
  }
}

// get blogs function 
function getBlogs()
{
  include('./admin/database/config.php');
  $statement = $pdo->prepare("SELECT blog_title, blog_content_short, blog_id, blog_date, photo FROM tbl_blogs");
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_ASSOC);
  foreach ($result as $blog) {
    $blog_title = $blog['blog_title'];
    $blog_content_short = $blog['blog_content_short'];
    $blog_image = $blog['photo'];
    $blog_id = $blog['blog_id'];
    $blog_date = $blog['blog_date'];
    echo  '
          <div class="card">
            <img src="./assets/uploads/' . $blog_image . '" alt="' . $blog_title . '" style="width:100%">
            <div class="container">
                <h4><b>' . $blog_date . '</b></h4>
                <p>' . $blog_content_short . '</p>
                <a href="single-blog.php?id=' . $blog_id . '">Read more</a>
            </div>
        </div>
            ';
  }
}

// Social icons function
function getSocialIcons()
{
  include('./admin/database/config.php');
  $statement = $pdo->prepare("SELECT * FROM tbl_social");
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_ASSOC);
  foreach ($result as $social) {
    if ($social['social_url'] != '') {
      echo '<li><a href="' . $social['social_url'] . '"><i class="' . $social['social_icon'] . '"></i></a></li>';
    }
  }
}

function getUpcomingEvents()
{
  include('./admin/database/config.php');
  $statement = $pdo->prepare("SELECT * FROM tbl_events WHERE event_status_id = 1");
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_ASSOC);

  if (empty($result)) {
    echo '<h1 style="font-size:24px">No Upcoming Events</h1>';
  } else {
    foreach ($result as $event) {
      $event_title         = $event['event_title'];
      $event_content_short = $event['event_content_short'];
      $event_venue      = $event['event_venue'];
      $event_date          = $event['event_date'];
      $event_link          = $event['event_link'];
      $photo               = $event['photo'];
      $event_id            = $event['event_id'];
      echo '
      <div class="service-box">
      <div class="service-text" style="background-color: transparent;">
          <h2>Title: '.$event_title.'</h2>
          <p><b>Date:</b>'.$event_date.'</p>
          <p><b>Location:</b>'.$event_venue.'</p>
          <p><b>About Events:</b></p>
          <p>'.$event_content_short.'</p>
          <div class="mentor-btn" style="margin-top: 1.2rem;">
              <a href="'.$event_link.'" style="  padding: .8rem 1.0rem; background-color: #102BDC; color: aliceblue;">Become a mentor</a>
          </div>
      </div>
      <div class="service-img perk-box">
          <img src="./assets/uploads/'.$photo.'" alt="'.$photo.'">
      </div>
  </div>
              ';
  }
  }
}

function getPastEvents()
{
  include('./admin/database/config.php');
  $statement = $pdo->prepare("SELECT * FROM tbl_events WHERE event_status_id = 0");
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_ASSOC);

  foreach ($result as $event) {

    $event_title         = $event['event_title'];
    $event_content_short = $event['event_content_short'];
    $event_venue      = $event['event_venue'];
    $event_date          = $event['event_date'];
    $event_link          = $event['event_link'];
    $photo               = $event['photo'];
    $event_id            = $event['event_id'];
    echo '
    <div class="service-box">
    <div class="service-text" style="background-color: transparent;">
        <h2>Title: '.$event_title.'</h2>
        <p><b>Date:</b>'.$event_date.'</p>
        <p><b>Location:</b>'.$event_venue.'</p>
        <p><b>About Events:</b></p>
        <p>'.$event_content_short.'</p>
        <div class="mentor-btn" style="margin-top: 1.2rem;">
            <a href="'.$event_link.'" style="  padding: .8rem 1.0rem; background-color: #102BDC; color: aliceblue;">Become a mentor</a>
        </div>
    </div>
    <div class="service-img perk-box">
        <img src="./assets/uploads/'.$photo.'" alt="'.$photo.'">
    </div>
</div>
          ';
  }
}

function getGallerySlider()
{
  include('./admin/database/config.php');
  $statement = $pdo->prepare("SELECT * FROM tbl_photo");
  $statement->execute();
  $result = $statement->fetchAll();

  foreach ($result as $photo) {
    echo '
          <div class="swiper-slide" style="margin-right: 30px"><a href="./assets/uploads/' . $photo['photo_name'] . '" class="gallery-lightbox"><img src="./assets/uploads/' . $photo['photo_name'] . '" class="img-fluid" alt=""></a></div>
        ';
  }
}
