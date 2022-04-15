<?php
    include "dbConnection.php";
    if(isset($_POST['submit']))
    {
        session_destroy();
        header('location:StudentForm.php');  
    }
?>



<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/index.css">
<title>ShikshaGharPe</title>
</head>
<body>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="../Images/logo.png" width="40" height="50" class="d-inline-block align-top" alt="">
              <span style="color: blue;">ShikshaGharPe</span>
            </a>
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" href="StudentForm.php">Get a Home Tutor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="TutorForm.php">Register as a Tutor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="review.php">Organisation Review</a>
            </li>
          </ul>
    </div>
  </nav>

  <div class="mid">
    <h3 style="color: white; font-weight: 700; margin-bottom: 24px; text-align: center;">Discover
      Tutors, Institutes and Courses near you</h3>

      <form action="#" method="post">
            <div class="container-contact100 aw-aw" style="margin: 0px 25%; width: 50%;">
            <div class="col-md-12"
                style="background: white; padding: 20px 10px; border-radius: 14px;">
                <h5 style="font-weight: 600;text-align: center;">Which Class
                / Course you are Looking For ?</h5>
                <div class="col-md-12">
                <div class="inputGroup">
                    <input class="zff" id="radio1" name="radio" type="radio" value="Nursery"/> <label
                    id="nursery">Nursery</label>
                </div>
                </div>
                <div class="col-md-12">
                <div class="inputGroup">
                    <input class="zff" id="radio2" name="radio" type="radio" value="I-V" /> <label
                    id="class1_5">Class I-V Tuition</label>
                </div>
                </div>
                <div class="col-md-12">
                <div class="inputGroup">
                    <input class="zff" id="radio3" name="radio" type="radio" value="VI-VII"/> <label
                    id="class6_8">Class VI-VII </label>
                </div>
                </div>
                <div class="col-md-12">
                <div class="inputGroup">
                    <input class="zff" id="radio4" name="radio" type="radio" value="IX-X"/> <label
                    id="class9_10">Class IX-X</label>
                </div>
                </div>
                <div class="col-md-12">
                <div class="inputGroup">
                    <input class="zff" id="radio5" name="radio" type="radio" value="XI-XII"/> <label
                    id="class11_12">Class XI-XII</label>
                </div>
                </div>
                <div class="col-md-12">
                <div class="inputGroup">
                    <input class="zff" id="radio6" name="radio" type="radio" value="others"/> <label
                    id="language">Others</label>
                </div>
                <input class="btn btn-primary btn-lg btn-block col-md-12" style="margin-top: 10px;"type="submit" name="submit" value="Submit">
        </div>
  </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>