<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Appointment</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php include "layouts/assets.php" ?>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
  <?php include "layouts/header.php" ?>
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <?php include "layouts/menu.php" ?>
    </ul>  
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Appointment</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Appointment</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Upcoming Appointments</h5>              
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th><th scope="col">Name</th><th scope="col">Position</th><th scope="col">Age</th><th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr><th scope="row">1</th><td>Brandon Jacob</td><td>Designer</td><td>28</td><td>2016-05-25</td></tr>
                  <tr><th scope="row">2</th><td>Bridie Kessler</td><td>Developer</td><td>35</td><td>2014-12-05</td></tr>
                  <tr><th scope="row">3</th><td>Ashleigh Langosh</td><td>Finance</td><td>45</td><td>2011-08-12</td></tr>
                  <tr><th scope="row">4</th><td>Angus Grady</td><td>HR</td><td>34</td><td>2012-06-11</td></tr>
                  <tr><th scope="row">5</th><td>Raheem Lehner</td><td>Dynamic Division Officer</td><td>47</td><td>2011-04-19</td></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Past Appointments</h5>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th><th scope="col">Name</th><th scope="col">Position</th><th scope="col">Age</th><th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr><th scope="row">1</th><td>Brandon Jacob</td><td>Designer</td><td>28</td><td>2016-05-25</td></tr>
                  <tr><th scope="row">2</th><td>Bridie Kessler</td><td>Developer</td><td>35</td><td>2014-12-05</td></tr>
                  <tr><th scope="row">3</th><td>Ashleigh Langosh</td><td>Finance</td><td>45</td><td>2011-08-12</td></tr>
                  <tr><th scope="row">4</th><td>Angus Grady</td><td>HR</td><td>34</td><td>2012-06-11</td></tr>
                  <tr><th scope="row">5</th><td>Raheem Lehner</td><td>Dynamic Division Officer</td><td>47</td><td>2011-04-19</td></tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    <?php include "layouts/footer.php" ?>
  <!-- End Footer -->

</body>

</html>