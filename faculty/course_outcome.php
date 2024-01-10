


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Course Outcome Form</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
    <!-- <script type="text/javascript">
    function checkpass() {
        if (document.signup.password.value != document.signup.confirmpassword.value) {
            alert(' Password and Confirm Password field does not match');
            document.signup.confirmpassword.focus();
            return false;
        }
        return true;
    }
    function showpass() {
          var x = document.getElementById("password");
          var y = document.getElementById("confirmpassword");
          if (x.type === "password" ) {
            x.type = "text";
            y.type = "text";
          } else {
            x.type = "password";
            y.type = "password";
          }
        }
    </script> -->

</head>
<!-- <body class="bg-primary"> -->

<body class="sb-nav-fixed">
<?php include_once('includes/navbar.php');?>
    <div id="layoutSidenav">
        <?php include_once('includes/sidebar.php');?>
        <div id="layoutSidenav_content">

    

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h2 align="center">Manage Course Outcomes</h2>
                                    <hr />
                                    <!-- <h3 class="text-center font-weight-light my-4">Create Account</h3></div> -->
                                    <div class="card-body">
                                        <form method="post" name="signup" onsubmit="return checkpass();">

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select class="form-control" id="year" name="year">
                                                             <!-- type="number"
                                                            placeholder="Enter year" required /> -->
                                                        <option selected>Year</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <select  class="form-control" id="sem" name="sem" >
                                                            <!-- type="number"
                                                            placeholder="Enter Semester" required /> -->
                                                        <option selected>Semester</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select name="subject" class="form-control" id="subject" >
                                                            <option selected>Subject</option>
                                                            <option>Engineering Physics</option>
                                                            <option>Engineering Mathematics I</option>
                                                            <option>Fundamentals of Electrical Engineering</option>
                                                            <option>Fundamentals of Mechanical Engineering</option>
                                                            <option>Soft Skill I</option>
                                                            <option>Engineering Physics Lab</option>
                                                            <option>English Language Lab</option>
                                                            <option>Basic Electrical Engineering Lab</option>
                                                            <option>Engineering Graphics & Design Lab</option>
                                                            <option>Engineering Chemistry</option>
                                                            <option>Fundamental Of Electronics Engineering</option>
                                                            <option>Programming For Problem Solving</option>
                                                            <option>Environment and Ecology</option>
                                                            <option>Engineering Chemistry Lab</option>
                                                            <option>Programming For Problem Solving Lab</option>
                                                            <option>Fundamental Of Electronics Engineering Lab</option>
                                                            <option>Workshop Practice Lab</option>
                                                            <option>Engineering Mathematics I.</option>
                                                            <option>Maths IV</option>
                                                            <option>Universal Universal Human Values</option>
                                                            <option>Operating Systems</option>
                                                            <option>Theory of Automata and Formal Languages</option>
                                                            <option>Web Designing</option>
                                                            <option>Operating Systems Lab</option>
                                                            <option>Web Designing Lab</option>
                                                        </select>    
                                                    </div>    
                                                </div>  


                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                    <select name="subcode" class="form-control" id="subcode" >
                                                        <option selected>Subject Code</option>
                                                        <option>BAS101</option>
                                                        <option>BAS103</option>
                                                        <option>BEE101</option>
                                                        <option>BME101</option>
                                                        <option>KAS105</option>
                                                        <option>BAS151</option>
                                                        <option>BAS155</option>
                                                        <option>BEE151</option>
                                                        <option>BCE151</option>
                                                        <option>BAS102</option>
                                                        <option>BEC101</option>
                                                        <option>BCS101</option>
                                                        <option>BAS104</option>
                                                        <option>BAS152</option>
                                                        <option>BCS151</option>
                                                        <option>BEC151</option>
                                                        <option>BWS151</option>
                                                        <option>BAS103.</option>
                                                        <option>KAS 402</option>
                                                        <option>KVE-401</option>
                                                        <option>KCS401</option>
                                                        <option>KCS402</option>
                                                        <option>KIT401</option>
                                                        <option>KCS451</option>
                                                        <option>KIT451</option>
                                                    </select>
                                                    </div>
                                                </div>
                                             </div>  


                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="CO1" name="CO1" type="text">
                                                <label for="inputCO1">CO1</label>
                                            </div>


                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="CO2" name="CO2" type="text">
                                                <label for="inputCO1">CO2</label>
                                            </div>


                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="CO3" name="CO3" type="text">
                                                <label for="inputCO1">CO3</label>
                                            </div>


                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="CO4" name="CO4" type="text">
                                                <label for="inputCO1">CO4</label>
                                            </div>


                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="CO5" name="CO5" type="text">
                                                <label for="inputCO1">CO5</label>
                                            </div>


                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="CO6" name="CO6" type="text">
                                                <label for="inputCO1">CO6</label>
                                            </div>



                                            <!-- <div class="form-floating mb-3">
                                                <input class="form-control" id="email" name="email" type="email"
                                                    placeholder="team@gmail.com" required />
                                                <label for="inputEmail">Email address</label>
                                            </div>


                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="contact" name="contact" type="text"
                                                    placeholder="1234567890" required pattern="[0-9]{10}"
                                                    title="10 numeric characters only" maxlength="10" required />
                                                <label for="inputcontact">Contact Number</label>
                                            </div> -->

                                            <!-- <div class="form-floating mb-3">
                                            
                                                        <select name="department" class="form-control" id="department">
                                                            <option selected>Department</option>
                                                            <option>Computer Science And Engineering</option>
                                                            <option>Computer Science (AL & ML)</option>
                                                            <option>Computer Science (DS)</option>
                                                            <option>Information Technology</option>
                                                            <option>Electronics And Communication Engineering</option>
                                                            <option>Electrical And Electronics Engineering</option>
                                                            <option>Electrical Engineering</option>
                                                            <option>Mechanical Engineering</option>
                                                        </select>
                                            </div> -->

                                            <!-- <div class="form-floating mb-3"> -->
                                            <!-- <label for="semester">Section</label> -->
                                                        <!-- <select name="section" class="form-control" id="section">
                                                            <option selected>Section</option>
                                                            <option>A 1</option>
                                                            <option>A 2</option>
                                                            <option>A 3</option>
                                                            <option>A 4</option>
                                                            <option>A 5</option>
                                                            <option>A 6</option>
                                                            <option>A 7</option>
                                                            <option>A 8</option>
                                                            <option>B 1</option>
                                                            <option>B 2</option>
                                                            <option>B 3</option>
                                                            <option>B 4</option>
                                                            <option>B 5</option>
                                                            <option>B 6</option>
                                                            <option>B 7</option>
                                                            <option>B 8</option>
                                                        </select>
                                            </div> -->

                                            <!-- <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="urollno" name="urollno"
                                                            type="text" placeholder="1234567890" maxlength="13"
                                                            required />
                                                        <label for="inputcontact">University Roll No.</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="addno" name="addno" type="text"
                                                            placeholder="1234567890" maxlength="9" required />
                                                        <label for="inputcontact">Admission No.</label>
                                                    </div>
                                                </div>
                                            </div> -->

                                            <!-- <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0"> -->
                                                        <!-- <label for="semester">Semester</label> -->
                                                        <!-- <select name="semester" class="form-control" id="semester">
                                                            <option selected>Semester</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                        </select>
                                                    </div>
                                                </div> -->

                                                <!-- <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0"> -->
                                                        <!-- <label for="year">Year</label> -->
                                                        <!-- <select name="year" class="form-control" id="year">
                                                            <option selected>Year</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="password" name="password"
                                                            type="password" placeholder="Create a password"
                                                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                                                            title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters"
                                                            required />
                                                        <label for="inputPassword">Password</label>
                                                        <input type="checkbox" onclick="showpass()"> Show Password(s)
                                                        
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="confirmpassword"
                                                            name="confirmpassword" type="password"
                                                            placeholder="Confirm password"
                                                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                                                            title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters"
                                                            required />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div> -->


                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit"
                                                        class="btn btn-primary btn-block" name="submit">Submit</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <!-- <div class="small"><a href="login.php">Have an account? Go to login</a></div> -->
                                        <div class="small"><a href="index.php">Back to Home</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
        </div>
         <?php include_once('includes/footer.php');?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>