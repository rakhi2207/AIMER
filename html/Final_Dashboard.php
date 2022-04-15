<?php
  include 'dbConnection.php';
  session_start();

  // echo $_SESSION['loginStatusTutor'];
  // echo $_SESSION['Tutoremail'];

?>





<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Icons-file -->
  <script src="https://kit.fontawesome.com/67f2a8fd69.js" crossorigin="anonymous"></script>
  <title>GharPeShiksha | Dashborad</title>
  <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body>

  <!-- NAVIGATION-BAR CODE -->
  <nav class="navbar navbar-light fixed-top mycolor flex-md-nowrap p-0 shadow">
    <a class="navbar-brand" href="#">
      <img src="../Images/logo.png" width="40" height="40" class="d-inline-block align-top" alt="">
      <span class="text-white">GharPeShiksha</span>
    </a>
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link active text-white" href="#"> Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Logout</a>
      </li>
    </ul>
  </nav>

  <!-- side-menu -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 bg-light d-none d-md-block sidebar">
        <div class="left-sidebar">

          <!-- sidemenu items   -->
          <img src="../Images/user1.png" alt="" class="icon">

        <?php
          session_start();
          echo $sql="Select * from Tutor where Email=$_SESSION['TutorEmail']";
        
        ?>

          <p class="side-menu-text1">Rahul Verma</p>
          <p class="side-menu-text2">@rahulverma21</p>
          <p class="side-menu-text2">India</p>
          <hr>
          <h4 class="heading2">About</h4><br>
          <p class="side-menu-text2">Position - Teacher(Chemistry)</p>
          <p class="side-menu-text2">Joining Date - 11/12/2015</p>
          <hr>
          <h4 class="heading2">More About Me</h4><br>
          <p class="side-menu-text2">I am a sports enthusiast who loves to teach.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- CARDS CONTENT -->
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 behind-color">


    <div class="d-flex" id="wrapper">
      <div class="container">

        <!-- CARD-1 -->
        <div class="card card1">
          <div class="card-body">
            <div class="heading">
              <i class="fas fa-medal heading">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Badges Earned</i>
            </div><br>
            <div class="star">
              <img src="../Images/star.png" alt="" height="60"><img src="../Images/star.png" alt="" height="60"><img src="../Images/star.png"
                alt="" height="60">&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
          </div>
        </div><br>

        <!-- CARD-2 -->
        <div class="card card1">
          <div class="card-body">
            <div class="heading">
              <i class="fas fa-scroll"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verified Skills</i>
            </div><br>
            <div class="skill">
              <img src="../Images/certificate.png" alt="" height="50">&nbsp;&nbsp;B.Sc & M.Sc
              Chemistry&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <img src="../Images/certificate.png" alt="" height="50">&nbsp;&nbsp;Phd Scholar(Organic
              Chemistry)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
          </div>
        </div><br>

        <!-- CARD-3 -->
        <div class="card card1">
          <div class="card-body">
              <div class="heading">
                  <i class="fas fa-briefcase"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Work Experience</i>
              </div><br>
              <div class="work">
                  <ul>
                      <li>10+ years of experience in teaching chemistry overall.</li>
                      <li>5+ years of experience in teaching at school.</li>
                  </ul>
              </div>
          </div>
      </div><br>

      <!-- CARD-4 -->
      <div class="card card1 card4">
          <div class="card-body">
              <div class="heading">
                  <i class="fas fa-user-graduate"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Education</i>
              </div><br>
              <div class="education">
                  <ul>
                      <li>B.Sc(honours) in chemistry from D.U.</li>
                      <li>M.Sc in Organic Chemistry from IIT.</li>
                  </ul>
              </div>
          </div>
      </div>

  </main>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>