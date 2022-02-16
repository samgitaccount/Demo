<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "demo";
$conn = mysqli_connect($servername, $username, $password, "$dbname");
if (!$conn) {
  die('Could not Connect My Sql:' . mysql_error());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
  <title>Demo</title>
</head>

<body>
  <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/Capture.JPG" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#top">HOME </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#to-do">TO DO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about-us">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#footer">CONTACT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>
  <section id="banner">

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://www.kroschke.com/static/assets/ksi17/cms/files/heroslider/hero-din13164_neu.jpg" class="d-inline-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://www.kroschke.com/static/assets/ksi17/cms/files/heroslider/banner-startseite-pruefplaketten4.jpg" class="d-inline-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://www.kroschke.com/static/assets/ksi17/cms/files/heroslider/hero-pruefplaketten-konfigurator.jpg" class="d-inline-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </section>
  <!--service section-->
  <section id="services">
    <div class="container text-center">
      <h1 class="title">SERVICES</h1>

      <div class="row">
        <div class="col-md-4">
          <div class="service-box">
            <img src="img/Capture1.JPG" alt="icon">
            <h6>Prüfplaketten & Aufkleber</h6>
            <p>Prüfplaketten und Wartungskennzeichen oder Maschinenkennzeichen zählen hier ebenso dazu wie Gefahrstoffetiketten</p>
            <i class="fa fa-arrow-right"></i>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box active-service">
            <img src="img/Capture2.JPG" alt="icon">
            <h6>Sicherheitskennzeichen & Schilder</h6>
            <p>Prüfplaketten und Wartungskennzeichen oder Maschinenkennzeichen zählen hier ebenso dazu wie Gefahrstoffetiketten</p>
            <i class="fa fa-arrow-right"></i>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <img src="img/Capture3.JPG" alt="icon">
            <h6>Erste Hilfe</h6>
            <p>Prüfplaketten und Wartungskennzeichen oder Maschinenkennzeichen zählen hier ebenso dazu wie Gefahrstoffetiketten</p>
            <i class="fa fa-arrow-right"></i>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="service-box">
            <img src="img/Capture4.JPG" alt="icon">
            <h6>Betriebliche Sicherheit</h6>
            <p>Prüfplaketten und Wartungskennzeichen oder Maschinenkennzeichen zählen hier ebenso dazu wie Gefahrstoffetiketten</p>
            <i class="fa fa-arrow-right"></i>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box ">
            <img src="img/Capture5.JPG" alt="icon">
            <h6>Persönliche Schutzausrüstung</h6>
            <p>Prüfplaketten und Wartungskennzeichen oder Maschinenkennzeichen zählen hier ebenso dazu wie Gefahrstoffetiketten</p>
            <i class="fa fa-arrow-right"></i>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <img src="img/Capture6.JPG" alt="icon">
            <h6>Betriebsausstattung</h6>
            <p>Prüfplaketten und Wartungskennzeichen oder Maschinenkennzeichen zählen hier ebenso dazu wie Gefahrstoffetiketten</p>
            <i class="fa fa-arrow-right"></i>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!----to do-->
  <?php
  $message = "";
  if (isset($_POST['save'])) {

  ?>
    <script>
      $(document).ready(function() {

        $('html, body').animate({
          scrollTop: $(".todo").offset().top
        }, 1000);

      });
    </script>
    <?php
    $date = $_POST['date'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    if (isset($_POST['updateuser']) & !empty($_POST['updateuser'])) {
      $sql = "UPDATE demo set id='" . $_POST['updateuser'] . "', date='" . $_POST['date'] . "', name='" . $_POST['name'] . "', description='" . $_POST['description'] .  "' WHERE id='" . $_POST['updateuser'] . "'";
    } else {
      $sql = "INSERT INTO demo (date,name,description) 
    VALUES ('$date','$name','$description')";
    }

    if (mysqli_query($conn, $sql)) {

      $message = "New record created successfully !";
    } else {
      $message = "Error: " . $sql . "
" . mysqli_error($conn);
    }
    //mysqli_close($conn);
  } elseif (isset($_POST['delete'])) {
    $sql = "DELETE FROM demo WHERE id='" . $_POST['delete'] . "'";
    if (mysqli_query($conn, $sql)) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
  } elseif (isset($_POST['update'])) {
    ?>
    <script>
      $(document).ready(function() {

        $('html, body').animate({
          scrollTop: $(".todo").offset().top
        }, 1000);

      });
    </script>
  <?php
    $result = mysqli_query($conn, "SELECT * FROM demo WHERE id='" . $_POST['update'] . "'");

    $row = mysqli_fetch_array($result);
  }
  ?>
  <section id="to-do" class="todo">
    <div class="container">
      <h1 class="title text-center">TO DO</h1>
      <div class="row">
        <div class="col-sm-4">
          <form method="post" class="formInsert border border-light p-3 bg-light shadow">
            <div class="mb-3 form-group ">
              <label class="form-label">Date</label>
              <input class="form-control" type="date" id="date" name="date" value="<?php if (isset($row['date'])) {
                                                                                      echo $row['date'];
                                                                                    } ?>">
            </div>
            <div class="mb-3 form-group ">
              <label for="name" class="form-label">Name</label>
              <input class="form-control" type="text" id="name" name="name" value="<?php if (isset($row['name'])) {
                                                                                      echo $row['name'];
                                                                                    } ?>">
            </div>
            <div class="mb-3 form-group  ">
              <label for="description" class="form-label">Description</label>
              <input class="form-control" type="text" id="description" name="description" value="<?php if (isset($row['description'])) {
                                                                                                    echo $row['description'];
                                                                                                  } ?>">

            </div>
            <div class="mb-3 form-group ">
              <button type="submit" class="btn btn-success w-100 mt-2 " name="save" value="Add">Save</button>
              <input type="hidden" name="updateuser" class="txtField" value="<?php if (isset($row['id'])) {
                                                                                echo $row['id'];
                                                                              } ?>">
            </div>
            <?php if (!empty($message)) { ?>
              <p class="alert alert-success"><?php echo $message; ?></p>
            <?php
            } ?>

          </form>
        </div>
        <div class="col-sm-8 ">
          <?php
          $result = mysqli_query($conn, "SELECT * FROM demo");
          ?>
          <?php
          if (mysqli_num_rows($result) > 0) {
          ?>
            <form action="" method="post">
              <table class="table border border-light p-3 bg-light shadow " style="overflow-x:auto;">
                <thead>
                  <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 0;
                  while ($row = mysqli_fetch_array($result)) {
                  ?>
                    <tr class="<?php if (isset($classname)) echo $classname; ?>">
                      <td><?php echo $row["date"]; ?></td>
                      <td><?php echo $row["name"]; ?></td>
                      <td><?php echo $row["description"]; ?></td>
                      <td>
                        <button type="submit" value="<?php echo $row["id"]; ?>" class="btn btn-warning btn-sm" name="update">Update</button>
                        <button type="submit" value="<?php echo $row["id"]; ?>" class="btn btn-danger btn-sm" name="delete">Delete</button>
                      </td>
                    </tr>
                  <?php
                    $i++;
                  }
                  ?>
                </tbody>
              </table>
            </form>
          <?php
          } else {
            echo "No result found";
          }
          ?>

        </div>
      </div>
    </div>
  </section>
  <!----about us-->
  <section id="about-us">
    <div class="container">
      <h1 class="title text-center">UBER UNS</h1>
      <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/user1.jpg">
            <div class="carousel-caption">
              <h6>Jennifer Lopez</h6>
              <small>CEO & FOUNDER </small>
              <p>Unsere Prüfplaketten bieten wir in einer Vielzahl von unterschiedlichen Folien an.<br>
                Dazu gehören unter anderem die angestanzte Sicherheitsfolie, <br>übertragungssichere Dokumentenfolie, ablösbare Folie.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/user2.jpg">
            <div class="carousel-caption">
              <h6>George Handsome</h6>
              <small>SENIOR MANAGER</small>
              <p>Unsere Prüfplaketten bieten wir in einer Vielzahl von unterschiedlichen Folien an.<br>
                Dazu gehören unter anderem die angestanzte Sicherheitsfolie, <br>übertragungssichere Dokumentenfolie, ablösbare Folie.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/user3.jpg">
            <div class="carousel-caption">
              <h6>Jacob Pop</h6>
              <small>FASHION DESIGNER </small>
              <p>Unsere Prüfplaketten bieten wir in einer Vielzahl von unterschiedlichen Folien an.<br>
                Dazu gehören unter anderem die angestanzte Sicherheitsfolie, <br>übertragungssichere Dokumentenfolie, ablösbare Folie.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-box">
          <img src="img/Capture.JPG" alt="logo">
          <p>
            Sie erreichen uns telefonisch Montag-Donnerstag von 7:30 bis 17 Uhr und am Freitag von 7:30 bis 16 Uhr.
          </p>
        </div>
        <div class="col-md-4 footer-box">
          <p><b>CONTACT US</b></p>
          <p><i class="fa fa-phone"></i> +49 531 318-637</p>
          <p><i class="fa fa-envelope"></i> onlineshop@kroschke.com</p>
          <p><i class="fa fa-map-marker"></i> <strong>Kroschke sign-international GmbH</strong>
          <div style="padding-left: 55px;">Kroschkestr. 1<br>38112 Braunschweig</div>
          </p>
        </div>
        <div class="col-md-4 footer-box">
          <p><b>SUBSCRIBE NEWSLETTER</b></p>
          <input type="email" class="form-control" placeholder="Your Email">
          <button type="button" class="btn btn-primary">Subscribe</button>


        </div>
      </div>
      <hr>
      <p class="copyright">website crafted by samaneh vazayefi</p>
    </div>
  </section>
</body>

</html>