<?php
    include 'dbConnection.php';
    if(isset($_POST['submit']))
    {
      $firstName=$_POST['firstName'];
      $lastName=$_POST['lastName'];
      $Email=$_POST['email'];
      $class=$_POST['class'];
      $pass=$_POST['Password'];
      $dob=$_POST['dob'];
      $gender=$_POST['Gender'];
      $hno=$_POST['Hno'];
      $landmark=$_POST['Landmark'];
      $city=$_POST['city'];
      $Chno=$_POST['CHno'];
      $Clandmark=$_POST['CLandmark'];
      $Ccity=$_POST['Ccity'];
      $cno=$_POST['Pno'];
      $subject=$_POST['Subject'];
      $teacherGender=$_POST['TeacherGender'];
      $nos=$_POST['nos'];
      $Budget=$_POST['Budget'];
      $start=$_POST['start'];
      $mode=$_POST['Mode'];

      $encrypt = password_hash($pass,PASSWORD_BCRYPT);


      $sql="Select * from Student where Email='$Email'";

      $result=mysqli_query($connect,$sql);
      if($result->num_rows==0&&$hno!='')
      {
          $innersql="Insert into `Student`(`FirstName`,`LastName`,`Email`,`class`,
          `Password`,`DOB`,`Gender`,`HNo`,`Landmark`,`City`,`CHNo`,
          `CLandmark`,`CCity`,`PNo`,`Subject`,`Teacher`,`Sessions`,
          `Budget`,`start`,`Mode`)Values('$firstName','$lastName','$Email','$class','$encrypt',
          '$dob','$gender','$hno','$landmark','$city','$Chno','$Clandmark',
          '$Ccity','$cno','$subject','$teacherGender','$nos','$Budget','$start','$mode')";
          if($connect->query($innersql))
          {
            session_start();
            $_SESSION['loginStatus']="true";
            $_SESSION['email']=$Email;
            echo '<script>alert("Thanks for Joining Us")
            window.location.href = "availClasses.php";
            </script>';
          }
      }else if($result->num_rows==0&&$hno=='')
      {
          $innersql="Insert into `Student`(`FirstName`,`LastName`,`Email`,`class`,
          `Password`,`DOB`,`Gender`,`CHNo`,`CLandmark`,`CCity`,`PNo`,`Subject`,`Teacher`,`Sessions`,
          `Budget`,`start`,`Mode`)Values('$firstName','$lastName','$Email','$class','$encrypt',
          '$dob','$gender','$Chno','$Clandmark','$Ccity','$cno','$subject','$teacherGender',
          '$nos','$Budget','$start','$mode')";
          if($connect->query($innersql))
          {
            session_start();
            $_SESSION['loginStatus']="true";
            $_SESSION['email']=$Email;
            echo '<script>alert("Thanks for Joining Us")
            window.location.href = "availClasses.php";
            </script>';
          }
      }
      else
      {
        echo '<script>alert("Email is already taken")</script>';
      }

    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form</title>
    <style>
      .require:after {
        content:"*";
        color: red;
      }
    </style>
</head>
<body>
     <!--Navbar-->
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
                <a class="nav-link active" href="#" style="color: white;">Get a Home Tutor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="TutorForm.php" style="color: white;">Register as a Tutor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="home.php" style="color: white;">Home</a>
              </li>
            </ul>
      </div>

      </div>
    </nav>
    <br>
    <div class="container" style="align-items: center;"> <div >
      <div style="max-width: 1240px;">
       <div class="shadow p-3 mb-5 bg-body rounded">
       <div style="align-items: center;" >
       <div class="card"  style="align-items: center;"  >
          
           <div class="card-body">
    <div class="container">
        <form name="myform" action="#" method="post" class="form-group">
            <h2 style="text-align: center; font-weight: bold; font-size: 60px; color: blue;">Complete your profile</h2>
            <h4 style="text-align: center; font-weight: bold; font-size: 30px; color: blue;">Basic Information</h4>
            <div class="row">
                <div class="col-md-6" style="margin-top: 20px;font-weight: bold">
                    <label for="inputname" class="require">First Name</label>
                    <input type="text" name="firstName" class="form-control" placeholder="FirstName" required>
                </div>
                <div class="col-md-6" style="margin-top: 20px;font-weight: bold">
                  <label for="inputname" class="require">Last Name</label>
                  <input type="text" class="form-control" name="lastName" placeHolder="LastName" required >
              </div>
              <div class="col-md-6" style="margin-top: 20px;font-weight: bold">
                <label for="inputname" class="require">Email Address</label>
                <input type="email" class="form-control" name="email" placeholder="Email Address" required >
              </div>

              <div class="col-md-6" style="margin-top: 20px;font-weight: bold">
                <label for="inputname" class="require">Class Currently Studying in</label>
                <input type="text" class="form-control" name="class" placeholder="Class Currently Studying in" required >
              </div>

              <div class="col-md-6" style="margin-top: 20px;font-weight: bold">
                <label for="inputname" class="require">Password</label>
                <input type="password" class="form-control" name="Password" placeholder="Password" required >
            </div>
              <div class="col-md-6"style="margin-top: 20px;font-weight: bold">
                    <label for="inputname" class="require">Date of birth</label>
                    <input type="text" class="form-control" name="dob" placeholder="Date Of Birth" required >
                </div>
                <div class="col-md-6"style="margin-top: 20px;font-weight: bold">
                    <label for="Gender" class="require">Gender</label><br>
                    <input class="form-check-input" type="radio" name="Gender" id="inlineRadio1" value="Male" required>
                    <label class="form-check-label" for="inlineRadio1">Male</label><br>
                    <input class="form-check-input" type="radio" name="Gender" id="inlineRadio1" value="Female" required>
                    <label class="form-check-label" for="inlineRadio1">female</label>
                </div>
                
                <div class="col-md-6"style="margin-top: 20px;font-weight: bold">
                    <label for="Permanent">Permanent Address</label>
                    <input type="number" class="form-control" name="Hno" placeholder="House Number"><br>
                    <input type="Address" class="form-control" name="Landmark" placeholder="Landmark"><br>
                    <input type="Address" class="form-control" name="city" placeholder="City">
                </div>
                <div class="col-md-6"style="margin-top: 20px;font-weight: bold">
                    <label for="Current" class="require">Current Address</label>
                    <input type="number" class="form-control" name="CHno" placeholder="House Number" required><br>
                    <input type="Address" class="form-control" name="CLandmark" placeholder="Landmark" required><br>
                    <input type="Address" class="form-control" name="Ccity" placeholder="City" required>
                </div>
                <div class="col-md-6" style="margin-top: 20px;font-weight: bold">
                  <label for="inputname" class="require">Contact Number</label>
                  <input type="number" min="6666666666"max="9999999999"class="form-control" name="Pno"placeholder="Contact Number" required>
              </div>
                
                <div class="col-md-6"style="margin-top: 20px;font-weight: bold">
                  <label for="subjects" class="require" >Subjects</label>
                  <div >
                    <select id="inputState" name="Subject" class="form-select" required>
                      <option value="" selected>Choose...</option>
                      <option value="All Subjects">All Subjects</option>
                      <option value="English">English</option>
                      <option value="Mathematics">Mathematics</option>
                      <option value="Science">Science</option>
                      <option value="Social Science">Social Science</option>
                      <option value="Sanskrit">Sanskrit</option>
                      <option value="Hindi">Hindi</option>
                      <option value="French">French</option>
                      <option value="German">German</option>
                    </select>
                  </div>
              </div>
              <div class="col-md-6"style="margin-top: 20px;font-weight: bold">
                <label for="inputname" class="require">Teacher's Gender Preference</label><br>
                <input class="form-check-input" type="radio" name="TeacherGender" id="inlineRadio1" value="Any(Male or Female)" required>
                    <label class="form-check-label" for="inlineRadio1">Any (Male or Female)</label>
                    <input class="form-check-input" type="radio" name="TeacherGender" id="inlineRadio1" value="Male" required>
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                    <input class="form-check-input" type="radio" name="TeacherGender" id="inlineRadio1" value="Female" required>
                    <label class="form-check-label" for="inlineRadio1">Female</label>
            </div>
              
              <div class="col-md-6"style="margin-top: 20px;font-weight: bold">
                <label for="sessions" class="require">Number of sessions needed in a week</label>
                <div >
                  <select id="inputState" name="nos"class="form-select" required>
                    <option selected value="">Choose...</option>
                    <option value="2">Two classes a week</option>
                    <option value="3">Three classes a week</option>
                    <option value="4">Four classes a week</option>
                    <option value="5">Five classes a week</option>
                  </select>
                </div>
            </div>
            <div class="col-md-6"style="margin-top: 20px;font-weight: bold">
              <label for="budget" class="require" >Monthly Budget</label>
              <div >
                <select id="inputState" name="Budget" class="form-select" required>
                  <option  value=""selected>Choose...</option>
                  <option value="2160-2400">Rs.2160-2400 (8 Sessions in month)</option>
                  <option value="2400-2640">Rs.2400-2640 (8 Sessions in month)</option>
                  <option value="2640-3200">Rs.2640-3200 (8 Sessions in month)</option>
                  
                </select>
              </div>
          </div>
            <div class="col-md-12"style="margin-top: 20px;font-weight: bold">
              <label for="Gender" class="require">When you would like to start?</label><br>
              <input class="form-check-input" type="radio" name="start" id="inlineRadio1" value="Immediately" required>
              <label class="form-check-label" for="inlineRadio1">Immediately</label>
              <input class="form-check-input" type="radio" name="start" id="inlineRadio1" value="2Weeks" required>
              <label class="form-check-label" for="inlineRadio1">Within next 2 weeks</label>
              <input class="form-check-input" type="radio" name="start" id="inlineRadio1" value="Not sure" required>
              <label class="form-check-label" for="inlineRadio1">Not sure, right now just checking prices</label>
          </div>
          <div class="col-md-6"style="margin-top: 20px;font-weight: bold">
            <label for="Gender" class="require">Learning Mode</label><br>
            <input class="form-check-input" type="radio" name="Mode" id="inlineRadio1" value="Offline" required>
            <label class="form-check-label" for="inlineRadio1">Offline</label>
            <input class="form-check-input" type="radio" name="Mode" id="inlineRadio1" value="Online" required>
            <label class="form-check-label" for="inlineRadio1">Online</label>
        </div>
        <div class="col-md-12" style="text-align: center;">
          <button type="submit" name="submit" class="btn btn-primary">Proceed</button>
        </div>
             
        </form>
       <p class="text-center mt-3 text-secondary">If you have account, Please <a href="LoginForm.php">Login Now</a></p>
      </div>
    </div>



  </div>

  </div> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>