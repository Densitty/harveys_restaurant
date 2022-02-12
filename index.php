<?php

require_once './connections/make_json.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/style.css">
  <title>Harveys Kitchen</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <!-- <img src="https://thetius.com/wp-content/uploads/2019/11/chatbot-4071274_1920.jpg"
        style="width:75px; margin: 10px; border-radius: 10px;" alt="">-->
      <a href="/" class="navbar-brand">Harveys</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=#navbarNav>
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/" aria-current="page" class="nav-link active">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">About Us</a>
          </li>
          <li class="nav-item">
            <a href="#gallery" class="nav-link">Gallery</a>
          </li>
          <li class="nav-item">
            <a href="#booking" class="nav-link">Reservation</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <?php
if (isset($_GET['booking']) && !empty($_GET['booking'])) {
    if ($_GET['booking'] === 'Booking successful') {
        echo '<div class="alert alert-success text-center">' .
            'You have successfully made a booking.'
            . '</div>';

    } else if ($_GET['booking'] === 'Booking unsuccessful') {
        echo '<div class="alert alert-danger text-center">' .
            'An error occured in making your booking. Please try again.'
            . '</div>';
    } else if ($_GET['booking'] === 'Empty form') {
        echo '<div class="alert alert-danger text-center">' .
            'Please fill the form before you submit.'
            . '</div>';

    }
}
?>

  <header id="header">
    <div class="intro">
      <div class="overlay">
        <div class="container">
          <div class="row">
            <div class="intro-text">
              <h1>Harvey's Kitchen</h1>
              <p>Restaurant | Snacks | Drinks</p>
              <a href="#about" class="btn btn-custom btn-lg page-scroll">
                Discover our Story
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6">
          <div class="about-img">
            <img src="./assets/images/harveys_6.jpg" alt="about-us-img" class="img-responsive" />
          </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <article class="about-text">
            <h2>Our Restaurant</h2>
            <p>Harvey caters for the Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro corrupti numquam
              corporis minima quasi? Iure blanditiis perferendis animi facilis aspernatur temporibus libero recusandae,
              dolor ad voluptas rerum iste adipisci laboriosam modi odio quo, odit eaque quidem. Sint, ea! Deserunt,
              aliquam soluta cupiditate ea magnam blanditiis ab eum optio iste illum.</p>
            <h3>Awards</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque assumenda ipsum perferendis veritatis
              laboriosam? Animi ratione nam magnam earum architecto!</p>
          </article>
        </div>

      </div>
    </div>
  </section>


  <section id="menu">
    <section class="menu__description text-center">
      <div class="overlay">
        <h2>Menu</h2>
        <p>Order for your menu from the menu items below</p>
      </div>
    </section>

    <?php
require_once "./connections/get_meals.php";
?>

    <section class="container">
      <div class="row">
        <!-- Breakfast -->
        <div class="col-xs-12 col-md-6">
          <div class="menu__section">
            <h2 class="menu__section__title">
              Breakfast
            </h2>

            <?php

while ($row = mysqli_fetch_assoc($result)) {
    if (strtolower($row['meal_type']) === 'breakfast') {
        echo '<article class="menu__section__item">';
        echo '<div class="menu__section__item__name">' . $row['meal_name'] . '</div>';
        echo '<div class="menu__section__item__price"> NGN' . $row['meal_price'] . '</div>';
        echo '<div class="menu__section__item__description">' . $row['meal_description'] . '</div>';
        echo '</article>';
    }

    if (strtolower($row['meal_type']) === 'lunch') {

    }

    if (strtolower($row['meal_type']) === 'lunch') {

    }

    if (strtolower($row['meal_type']) === 'snacks') {

    }
}
?>
            <!-- <article class="menu__section__item">
              <div class="menu__section__item__name">
                Jollof Rice with Chicken
              </div>
              <div class="menu__section__item__price">
                N2500
              </div>
              <div class="menu__section__item__description">
                Nigerian Jollof rice with chicken with a free tea for breakfast
              </div>
            </article> -->

          </div>
        </div>

        <!-- Lunch -->
        <div class="col-xs-12 col-md-6">
          <div class="menu__section">
            <h2 class="menu__section__title">
              Lunch
            </h2>
            <article class="menu__section__item">
              <div class="menu__section__item__name">
                Jollof Rice with Chicken
              </div>
              <div class="menu__section__item__price">
                N2500
              </div>
              <div class="menu__section__item__description">
                Nigerian Jollof rice with chicken with a free tea for breakfast
              </div>
            </article>

            <article class="menu__section__item">
              <div class="menu__section__item__name">
                Jollof Rice with Chicken
              </div>
              <div class="menu__section__item__price">
                N2500
              </div>
              <div class="menu__section__item__description">
                Nigerian Jollof rice with chicken with a free tea for breakfast
              </div>
            </article>

            <article class="menu__section__item">
              <div class="menu__section__item__name">
                Jollof Rice with Chicken
              </div>
              <div class="menu__section__item__price">
                N2500
              </div>
              <div class="menu__section__item__description">
                Nigerian Jollof rice with chicken with a free tea for breakfast
              </div>
            </article>

            <article class="menu__section__item">
              <div class="menu__section__item__name">
                Jollof Rice with Chicken
              </div>
              <div class="menu__section__item__price">
                N2500
              </div>
              <div class="menu__section__item__description">
                Nigerian Jollof rice with chicken with a free tea for breakfast
              </div>
            </article>
          </div>
        </div>

        <!-- Dinner -->
        <div class="col-xs-12 col-md-6">
          <div class="menu__section">
            <h2 class="menu__section__title">
              Dinner
            </h2>
            <article class="menu__section__item">
              <div class="menu__section__item__name">
                Jollof Rice with Chicken
              </div>
              <div class="menu__section__item__price">
                N2500
              </div>
              <div class="menu__section__item__description">
                Nigerian Jollof rice with chicken with a free tea for breakfast
              </div>
            </article>

            <article class="menu__section__item">
              <div class="menu__section__item__name">
                Jollof Rice with Chicken
              </div>
              <div class="menu__section__item__price">
                N2500
              </div>
              <div class="menu__section__item__description">
                Nigerian Jollof rice with chicken with a free tea for breakfast
              </div>
            </article>

            <article class="menu__section__item">
              <div class="menu__section__item__name">
                Jollof Rice with Chicken
              </div>
              <div class="menu__section__item__price">
                N2500
              </div>
              <div class="menu__section__item__description">
                Nigerian Jollof rice with chicken with a free tea for breakfast
              </div>
            </article>

            <article class="menu__section__item">
              <div class="menu__section__item__name">
                Jollof Rice with Chicken
              </div>
              <div class="menu__section__item__price">
                N2500
              </div>
              <div class="menu__section__item__description">
                Nigerian Jollof rice with chicken with a free tea for breakfast
              </div>
            </article>
          </div>
        </div>

        <!-- Snacks -->
        <div class="col-xs-12 col-md-6">
          <div class="menu__section">
            <h2 class="menu__section__title">
              Snacks
            </h2>
            <article class="menu__section__item">
              <div class="menu__section__item__name">
                Jollof Rice with Chicken
              </div>
              <div class="menu__section__item__price">
                N2500
              </div>
              <div class="menu__section__item__description">
                Nigerian Jollof rice with chicken with a free tea for breakfast
              </div>
            </article>

            <article class="menu__section__item">
              <div class="menu__section__item__name">
                Jollof Rice with Chicken
              </div>
              <div class="menu__section__item__price">
                N2500
              </div>
              <div class="menu__section__item__description">
                Nigerian Jollof rice with chicken with a free tea for breakfast
              </div>
            </article>

            <article class="menu__section__item">
              <div class="menu__section__item__name">
                Jollof Rice with Chicken
              </div>
              <div class="menu__section__item__price">
                N2500
              </div>
              <div class="menu__section__item__description">
                Nigerian Jollof rice with chicken with a free tea for breakfast
              </div>
            </article>

            <article class="menu__section__item">
              <div class="menu__section__item__name">
                Jollof Rice with Chicken
              </div>
              <div class="menu__section__item__price">
                N2500
              </div>
              <div class="menu__section__item__description">
                Nigerian Jollof rice with chicken with a free tea for breakfast
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
  </section>

  <!-- Gallery -->
  <section id="gallery">
    <div class="section__title text-center">
      <div class="overlay">
        <h2>Gallery</h2>
        <p>View our cuisines and our restaurant</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="categories">
          <ul class="cat">
            <li>
              <ol class="type">
                <li>
                  <a href="index.php" data-category="all" class="active">All</a>
                </li>
                <li>
                  <a href="index.php?meal_type=breakfast" data-category="breakfast">Breakfast</a>
                </li>
                <li>
                  <a href="index.php?meal_type=lunch">Lunch</a>
                </li>
                <li>
                  <a href="index.php?meal_type=dinner">Dinner</a>
                </li>
                <li>
                  <a href="index.php?meal_type=snacks">Snacks</a>
                </li>
              </ol>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="row">
        <div class="galleries row">
          <?php
require_once "./connections/get_images.php";

?>

          <?php
if (!isset($_GET['meal_type'])) {
    while ($row = mysqli_fetch_assoc($images)) {
        ?>
          <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
            <div class="gallery">
              <div class="hover-bg">
                <div class="hover-text">
                  <h4>Meal Name</h4>
                </div>
                <img src="<?php echo './assets/images/' . $row['meal_image']; ?>" alt="meal image"
                  class="img-responsive gallery-img">
              </div>
            </div>
          </div>

          <?php
}
    ?>

          <?php
} else {

    if ($_GET['meal_type'] === 'breakfast') {
        // loop through the db to get the breakfast images
        while ($row = mysqli_fetch_assoc($images)) {
            if (strtolower($row['meal_type']) === 'breakfast') {
                echo '
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
            <div class="gallery">
              <div class="hover-bg">
                <div class="hover-text">
                  <h4>Meal Name</h4>
                </div>
                <img src="./assets/images/' . $row['meal_image'] . '" alt="meal image"
                  class="img-responsive gallery-img">
              </div>
            </div>
          </div>
        ';
            }
        }
    } else if ($_GET['meal_type'] === 'lunch') {
        while ($row = mysqli_fetch_assoc($images)) {
            if (strtolower($row['meal_type']) === 'lunch') {
                echo '
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
            <div class="gallery">
              <div class="hover-bg">
                <div class="hover-text">
                  <h4>Meal Name</h4>
                </div>
                <img src="./assets/images/' . $row['meal_image'] . '" alt="meal image"
                  class="img-responsive gallery-img">
              </div>
            </div>
          </div>
        ';
            }
        }

    } else if ($_GET['meal_type'] === 'dinner') {
        while ($row = mysqli_fetch_assoc($images)) {
            if (strtolower($row['meal_type']) === 'dinner') {
                echo '
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
            <div class="gallery">
              <div class="hover-bg">
                <div class="hover-text">
                  <h4>Meal Name</h4>
                </div>
                <img src="./assets/images/' . $row['meal_image'] . '" alt="meal image"
                  class="img-responsive gallery-img">
              </div>
            </div>
          </div>
        ';
            }
        }

    } else if ($_GET['meal_type'] === 'snacks') {
        while ($row = mysqli_fetch_assoc($images)) {
            if (strtolower($row['meal_type']) === 'snacks') {
                echo '
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
            <div class="gallery">
              <div class="hover-bg">
                <div class="hover-text">
                  <h4>Meal Name</h4>
                </div>
                <img src="./assets/images/' . $row['meal_image'] . '" alt="meal image"
                  class="img-responsive gallery-img">
              </div>
            </div>
          </div>
        ';
            }
        }

    } else {

    }

    ?>

          <?php
}
?>
          <!-- <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
            <div class="gallery">
              <div class="hover-bg">
                <div class="hover-text">
                  <h4>Meal Name</h4>
                </div>
                <img src="./assets/images/harveys_2.jpg" alt="meal image" class="img-responsive gallery-img">
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
            <div class="gallery">
              <div class="hover-bg">
                <div class="hover-text">
                  <h4>Meal Name</h4>
                </div>
                <img src="./assets/images/harveys_3.jpg" alt="meal image" class="img-responsive gallery-img">
              </div>
            </div>
          </div> -->

        </div>
      </div>
    </div>
  </section>

  <!-- reservation form -->
  <section id="booking" class="container reservations">
    <h2 class="text-center">Make Reservations</h2>
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <img src="./assets/images/harveys_4.jpg" class="img-responsive reservation-img" alt="form image" />
      </div>

      <div class="col-sm-12 col-md-6">
        <form action="/connections/bookings.php" method="POST">
          <div class="form-group booking-element">
            <label for="name">Name</label>
            <input class="form-control" type="text" id="name" placeholder="Your name" name="name" required>
          </div>

          <div class="form-group booking-element">
            <label for="seats">Number of Seats</label>
            <input class="form-control" type="number" id="seats" placeholder="Number of seats" name="seats" min="1"
              max="9" required>
          </div>

          <div class="form-group booking-element">
            <label for="date">Day</label>
            <input class="form-control" type="date" name="date" id="date">
            <!-- <select class="form-select" name="day" id="day">
              <option value="saturday">Saturday</option>
              <option value="monday">Monday</option>
              <option value="tuesday">Tuesday</option>
              <option value="wednesday">Wednesday</option>
              <option value="thursday">Thursday</option>
              <option value="friday">Friday</option>
            </select> -->
          </div>

          <div class="form-group booking-element">
            <label for="meal">Meal</label>
            <select class="form-select" name="meal" id="meal">
              <option value="breakfast">Breakfast</option>
              <option value="lunch">Lunch</option>
              <option value="dinner">Dinner</option>
              <option value="snacks">Snacks</option>
            </select>
          </div>

          <button type="submit" name="submit" class="btn btn-custom">Make Reservation</button>
        </form>
      </div>
    </div>
  </section>

  <footer id="footer">
    <div class="row">
      <div class="col-md-4 col-sm-12 text-center my-30">
        <h5>Address</h5>
        <p>Km 32, Ibadan-Ife Expressway</p>
        <p>Ibadan, Nigeria</p>
      </div>

      <div class="col-md-4 col-sm-12 text-center my-30">
        <h5>Opening Hours</h5>
        <p>Mon - Fri : 8:00AM - 9:00PM</p>
        <p>Sat: 9:00AM - 7:00PM</p>
      </div>

      <div class="col-md-4 col-sm-12 text-center my-30">
        <h5>Contact Us</h5>
        <p>Phone: +234 801 2345 678</p>
        <p>Mail: info@harveyskitchen.com</p>
      </div>
    </div>
  </footer>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <script src="./assets/index.js"></script>
</body>

</html>