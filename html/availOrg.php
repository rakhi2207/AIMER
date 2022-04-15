<?php
  include 'dbConnection.php';
  session_start();

  // echo $_SESSION['loginStatusTutor'];
  // echo $_SESSION['Tutoremail'];

  if($_SESSION['loginStatusTutor']=='' || $_SESSION['Tutoremail'] == ''){
    header("Location: LoginFormTutor.php");
    die();
}


  if(isset($_POST['applied']))
  {
    $SEM=$_SESSION['Tutoremail'];
    $TEM=$_POST['applied'];
    $Csql="Select * from TutorApplied where TutorEmail='$SEM' AND OrganisationEmail='$TEM'";
    $CR=mysqli_query($connect,$Csql);
    if($CR->num_rows==0){

      $sql="Insert into TutorApplied Values('$TEM','$SEM',0);";
      $result=mysqli_query($connect,$sql);
      echo '<script>alert("Thanks for enrolling with us \nYou will be contacted soon by the Organisation");
      </script>';  
    }
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
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="../css/availClasses.css">
    <title>Available Classes</title>
  </head>
  <body style="overflow-x: hidden;">

    <a name="top">
      <nav class="navbar navbar-expand-lg "style="background-color:#454d55">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="../Images/logo.png" width="40" height="50" class="d-inline-block align-top" alt="">
            <span style="color: white;">ShikshaGharPe</span>
          </a>
          <ul class="nav justify-content-end"></ul>
  
  
              <div class="container-fluid">
              <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link" href="home.php" style="color: white;">Home</a>
                </li>
                <li>
                  <form action="#" method="post">
                            <select id="inputState" name="preference"class="form-select" required>
                              <option selected value="All available">All Available Classes</option>
                              <option value="CCity">Landmark and City</option>
                            </select></li>
                            <li>&nbsp&nbsp</li>
                            <li><button name="search" type="submit" class="btn btn-outline-light">Search</button></li>
                            <li>&nbsp&nbsp</li>
                            <li><button type="submit" name="Logout" class="btn btn-outline-warning">Logout</button></li>
                  </form>
              </ul>
        </div>
  
        </div>
      </nav>
  
      </a>
</div>
  <div style="height: 0.5cm; ">

  </div> 
  <!-- <div style="height: 0.5cm; ">

  </div>  -->
  <div style=" background-color: #0B5ED7;">
    <div class="row align-items-center">




        <div class="col">
          <div class="col my-4">
              <div class="card flex-row cssCheck">
                  <img class="col-lg-3" src="../Images/bell-solid.jpg" style="height: 2cm;align-items:center ;" />
                  <div class="titlecss">
                      <h5>0 Classes Notified</h5>
                      
                  </div>
              </div>
          </div>
      
        </div>




    <div class="col">
      <div class="col my-4">
          <div class="card flex-row  cssCheck">
              <img class="col-lg-3" src="../Images/lightbulb-solid.jpg" style="height: 2cm;align-items:center ;" />
              <div class="titlecss">
                <?php
                  $sql="Select * from Organisation";
                  $row=mysqli_query($connect,$sql);
                  $SEM=$_SESSION['Tutoremail'];
                  $Csql="Select * from TutorApplied where TutorEmail='$SEM'";
                  $CR=mysqli_query($connect,$Csql);
                ?>
                  <h5><?php echo $row->num_rows-$CR->num_rows;?> Classes Available</h5>
                  
              </div>
          </div>
      </div>
     
    </div>
    <div class="col">
      <div class="col my-4">
          <div class="card flex-row  cssCheck">
              
              <img class="col-lg-4 " src="../Images/check-circle-solid.jpg" style="height: 2cm;align-items:center ;" />
              <div class="titlecss">
                <?php
                  $CE=$_SESSION['Tutoremail'];
                  $CSA="Select * from TutorApplied where TutorEmail='$CE'";
                  $ACV=mysqli_query($connect,$CSA);
                ?>
                  <h5 ><?php echo $ACV->num_rows;?> Classes Applied</h5>
                  
              </div>
          </div>
      </div>
      
    </div>



  </div>
  </div>
  <div style="height: 15px;">

  </div>
  <div style="height: 15px;">

  </div>
<div style="text-align: justify;">
    <h2 style="color: gray; font-family: Arial, Helvetica, sans-serif;">Organisation Available for You</h2>

  </div>

    <div class="container" style="align-items: center;">
       <div id="organisation" style="max-width: 1240px;">

          <!--Insertion Of Cards-->

          <?php
                if(isset($_POST['Logout']))
                {
                  session_destroy();
                  echo '<script>
                  window.location.href = "LoginFormTutor.php";
                  </script>';
                }

                
                if(isset($_POST['search'])&&$_POST['preference']=="CCity")
                {


                }else{

                  //All Availabale CLasses
                
                  $sql="Select * from Organisation";
                  $result=mysqli_query($connect,$sql);
                  if($result->num_rows>0)
                  {
                      
                      //Fetch row one by one
                      while ($row = mysqli_fetch_assoc($result)) {?>
                              <div class="shadow p-3 mb-5 bg-body rounded">
                              <div style="align-items: center;" >
                              <div class="card" style="align-items: center;">
                                
                                  <div class="card-body">
                                    <h2 class="card-title"><?php echo $row["Name"];?></h2>
                                    <br><p class="card-text"><b>Location</b> <?php echo $row["Address"];?><br>
                                      <b>Salrary(Negotiable)</b> Rs.  <?php echo $row["Salary"];?><br>
                                    </p>
                                    <?php
                                        $Sem=$_SESSION['Tutoremail'];
                                        $Tem=$row['OrganisationEmail'];
                                        $SAsql="Select * from TutorApplied where TutorEmail='$Sem' AND OrganisationEmail='$Tem'";
                                        $SAC=mysqli_query($connect,$SAsql);
                                        if($SAC->num_rows>0)
                                        {
                                          ?>
                                            <button type="submit" name="applied" class="btn btn-primary" disabled>Apply</button>
                                        <?php
                                        }else
                                        {?>
                                          <form action="#" method="post">
                                            <button type="submit" value=<?php echo $Tem?> name="applied" class="btn btn-primary">Apply</button>
                                          </form>
                                        <?php   
                                        }
                                      ?>

                                  </div>
                                </div>
                              </div>
                            </div>


                     <?php }
                    }
                }
                
          ?>
   
        </div>
      </div>
    
    <div style="min-height: 1cm; background-color: #0B5ED7;">
        <p style="text-align: center;color: white;"> Made by the team </p>
    </div>


  <div style="height: 10cm;">

  </div>

  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

