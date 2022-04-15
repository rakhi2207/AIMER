
<?php
  include 'dbConnection.php';
  if(isset($_POST['submit']))
  {
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $Email=$_POST['email'];
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
        $Qualification=$_POST['Qualification'];
        $exp=$_POST['exp'];
        $class=$_POST['class'];
        $subject=$_POST['Subject'];
        $Budget=$_POST['fees'];
        $vehicle=$_POST['vehicle'];
        $mode=$_POST['mode'];

        $encrypt = password_hash($pass,PASSWORD_BCRYPT);


        $sql="Select * from Tutor where Email='$Email'";
  
        $result=mysqli_query($connect,$sql);
        if($result->num_rows==0&&$hno!='')
        {
            $innersql="Insert into `Tutor`(`FirstName`,`LastName`,`Email`,`Password`,
            `DOB`,`Gender`,`HNo`,`Landmark`,`City`,`CHNo`,
            `CLandmark`,`CCity`,`Pno`,`Qualification`,`Exp`,`class`,`Subject`,`Fees`,`Vehicle`,
            `Mode`)Values('$firstName','$lastName','$Email','$encrypt',
            '$dob','$gender','$hno','$landmark','$city','$Chno','$Clandmark',
            '$Ccity','$cno','$Qualification','$exp','$class','$subject','$Budget','$vehicle','$mode')";
            if($connect->query($innersql))
            {
              session_start();
              $_SESSION['loginStatusTutor']=true;
              $_SESSION['Tutoremail']=$Email;
              echo '<script>alert("Thanks for Joining Us")
              window.location.href = "availOrg.php";
              </script>';
            }
        }else if($result->num_rows==0&&$hno=='')
        {
            $innersql="Insert into `Tutor`(`FirstName`,`LastName`,`Email`,`Password`,
            `DOB`,`Gender`,`CHNo`,`CLandmark`,`CCity`,`Pno`,`Qualification`,`Exp`,`class`,`Subject`,`Fees`,`Vehicle`,
            `Mode`)Values('$firstName','$lastName','$Email','$encrypt',
            '$dob','$gender','$Chno','$Clandmark',
            '$Ccity','$cno','$Qualification','$exp','$class','$subject','$Budget','$vehicle','$mode')";

            if($connect->query($innersql))
            {
              session_start();
              $_SESSION['loginStatusTutor']=true;
              $_SESSION['Tutoremail']=$Email;
              echo '<script>alert("Thanks for Joining Us")
              window.location.href = "availOrg.php";
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
                <a class="nav-link active" href="StudentForm.php" style="color: white;">Get a Home Tutor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: white;">Register as a Tutor</a>
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
                          <input type="text" name="firstName" class="form-control" placeholder="First Name" required>
                      </div>
                      <div class="col-md-6" style="margin-top: 20px;font-weight: bold">
                        <label for="inputname" class="require">Last Name</label>
                        <input type="text" name="lastName" class="form-control" placeholder="Last Name"required>
                    </div>
                    <div class="col-md-6" style="margin-top: 20px;font-weight: bold">
                      <label for="Email" class="require">Email Address</label>
                      <input type="text" name="email" class="form-control"placeholder="Email Address" required>
                  </div>
                    <div class="col-md-6" style="margin-top: 20px;font-weight: bold">
                      <label for="Password" class="require">Password</label>
                      <input type="password" class="form-control" name="Password" placeholder="Password" required>
                  </div>
                      <div class="col-md-6"style="margin-top: 20px;font-weight: bold">
                          <label for="inputname" class="require">Date of birth</label>
                          <input type="text" class="form-control"  name="dob" placeholder="Date Of Birth" required>
                      </div>
                      <div class="col-md-6"style="margin-top: 20px;font-weight: bold">
                          <label for="Gender" class="require">Gender</label><br>
                          <input class="form-check-input" type="radio" name="Gender" id="inlineRadio1" value="Male" required>
                          <label class="form-check-label" for="inlineRadio1">Male</label><br>
                          <input class="form-check-input" type="radio" name="Gender" id="inlineRadio1" value="Female" required>
                          <label class="form-check-label" for="inlineRadio1">female</label>
                      </div>
                      
                      <div class="col-md-6"style="margin-top: 20px;font-weight: bold">
                          <label for="pwd">Permanent Address</label>
                          <input type="number" class="form-control"name="Hno" placeholder="Hno"><br>
                          <input type="Address" class="form-control" name="Landmark" placeholder="LandMark"><br>
                          <input type="Address" class="form-control" name="city" placeholder="City">
                      </div>
                      <div class="col-md-6"style="margin-top: 20px;font-weight: bold">
                          <label for="Add1" class="require">Current Address</label>
                          <input type="number" name="CHno" class="form-control" placeholder="Hno" required><br>
                          <input type="Address" name="CLandmark" class="form-control" placeholder="LandMark" required><br>
                          <input type="Address" name="Ccity" class="form-control" placeholder="City" required>
                      </div>
                      <div class="col-md-6"style="margin-top: 20px;font-weight: bold">
                        <label for="number" class="require">Contact Number</label>
                        <input type="number" name="Pno" min="6666666666" max="9999999999"class="form-control" placeholder="Mobile Number" required>
                    </div>
                      
                      <div class="col-md-6"style="margin-top: 20px;font-weight: bold">
                          <label for="qual" class="require">Qualification</label>
                          <input type="qual" name="Qualification" class="form-control" placeholder="Qualification" required>
                      </div>
                      <div class="col-md-6"style="margin-top: 20px;font-weight: bold">
                        <label for="exp"   class="require">Teaching experience</label>
                        <div >
                          <select id="inputState" name="exp" class="form-select" required>
                            <option selected>Choose...</option>
                            <option>1 Year</option>
                            <option>2 Year</option>
                            <option>3 Year</option>
                            <option>4 Year</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-md-6"style="margin-top: 20px;font-weight: bold">
                      <label for="inputname" class="require">Classes</label>
                      <div >
                        <select id="inputState"  name="class" class="form-select" required>
                          <option selected>Choose...</option>
                          <option>I-V</option>
                          <option>V-VIII</option>
                          <option>IX-X</option>
                          <option>XI-XII</option>
                        </select>
                      </div>
                  </div>
                   
                  
                  <div class="col-md-6"style="margin-top: 20px;font-weight: bold">
                    <label for="subjects" class="require">Subjects</label>
                    <div >
                      <select id="inputState" name="Subject" class="form-select" required>
                        <option value="" selected>Choose...</option>
                        <option value="All Subjects">All Subjects</option>
                        <option value="English">English</option>
                        <option value="Mathematics">Mathematics</option>
                        <option value="Science">Science(I-VI)</option>
                        <option value="Science">Chemistry</option>
                        <option value="Science">Physics</option>
                        <option value="Social Science">Social Science</option>
                        <option value="Sanskrit">Sanskrit</option>
                        <option value="Hindi">Hindi</option>
                        <option value="French">French</option>
                        <option value="German">German</option>
                      </select>
                    </div>

                    <div class="col-md-6"style="margin-top: 20px;font-weight: bold">
                      <label for="exp" class="require">Expected Fees</label>
                      <div >
                        <select id="inputState" name="fees" class="form-select" required>
                          <option selected>Choose...</option>
                          <option>1000 and above</option>
                          <option>2500 and above</option>
                          <option>3000 and above</option>
                          <option>3500 and above</option>
                        </select>
                      </div>
                  </div>
                  <div class="col-md-12"style="margin-top: 20px;font-weight: bold">
                    <label for="Gender" name="vehicle" class="require">Vehicle Owned</label>
                    <input class="form-check-input" type="radio" name="vehicle" id="inlineRadio1" value="Yes" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    <input class="form-check-input" type="radio" name="vehicle" id="inlineRadio1" value="No" required>
                    <label class="form-check-label" for="inlineRadio1">No</label>
                </div>
                <div class="col-md-12"style="margin-top: 20px;font-weight: bold">
                  <label for="Gender" name="mode" class="require">Teaching Mode</label>
                  <input class="form-check-input" type="radio" name="mode" id="inlineRadio1" value="Offline">
                  <label class="form-check-label" for="inlineRadio1">Offline</label>
                  <input class="form-check-input" type="radio" name="mode" id="inlineRadio1" value="Online">
                  <label class="form-check-label" for="inlineRadio1">Online</label>
                  <input class="form-check-input" type="radio" name="mode" id="inlineRadio1" value="AnyMode">
                  <label class="form-check-label" for="inlineRadio1">Any Mode</label>
                </div>
           </div>
         </div>

         <div class="col-md-12" style="text-align: center;">
          <button type="submit" class="btn btn-primary" name="submit">Proceed</button>
        </div>
                
                        
               
        </form>
        <p class="text-center mt-3 text-secondary">If you have account, Please <a href="LoginFormTutor.php">Login Now</a></p>

       </div>

       </div>     


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>