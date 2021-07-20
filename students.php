<?php
//turning off error reporting
include("connect.php");
$sql="SELECT studentid FROM students where studentid LIKE '%CCA%'";
$records=mysqli_query($db,$sql);


?>
<?php
SESSION_START();
?>

<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>attendance system</title>
    <link rel="shortcut icon" href="assets/img/title.gif" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/css/loader.css" rel="stylesheet" />
    <script src="assets/js/canvasjs.min.js"></script>
    <!--*****jquery -3.2.1.js file supports the use of dropdown***-->
    <script src="assets/js/jquery-3.2.1.js"></script>
<!--codes to run the script for constituencies and counties-->
         
        



<!--codes to run the script for constituencies and counties-->
<style type="text/css">
    h4{
        color:red;
    }
</style>
<!--styling up the heading of form-->

</head>

<body >
<!--end of heading section--> 
<ul class="nav navbar-right top-nav">                        
    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" >
  <?php
        //Check to see if the user is logged in.if not redirect user to the loging page.
        
        if(isset($_SESSION['fname']))
        { 
        echo   "Current user: ".$_SESSION['fname']. "&nbsp;".$_SESSION['lname']. " ";
        }else{
          echo "<script type='text/javascript'>
                    alert( 'You must Log in to use the system');
                    </script>";
                echo "<script>
                    window.location = 'index.php'
                  </script>";
        }
        ?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
      <li><a href="manage_account.php"><i class="fa fa-users fa-lg"></i>&nbsp;View User</a></li>
      <li><a href="register_form.php"><i class="fa fa-users fa-lg"></i>&nbsp;Add New User</a></li>
      <li class="divider"></li>
      <li><a href="session_logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;Log Out</a></li>
  </ul>
</div>
  </ul>
<!--************************************************-->
<div style="
    font-family:Nyala, Arial;
    text-align: left; 
    background-color: #526F35;
    padding: 20px; 
    color:white;
    width: 100%;
    height: 200px;
     background-image:url('assets/img/gtbit.png');
    background-size:100%">
    <!--This codes to load the image loader--> 
    
<!--this is the heading section-->   

</div>
<!--end of heading section-->  
        <div>
        <ul class="nav nav-tabs">
            <li ><a href="homepage.php" >Administration <img src="assets/img/details.png"></a></li>
            <li class="active"><a href="students.php" >Students <img src="assets/img/student48.png"></a></li>
            <li><a href="staff.php">faculty<img src="assets/img/staff48.png"></a></li>
            <li><a href="course.php" >Courses <img src="assets/img/course.png"></a></li>
            
            <li><a href="sms.php">SMS <img src="assets/img/details.png"></a></li>
             <!--<li><a href="tab-8" role="tab" data-toggle="tab">Hostel <img src="assets/img/details.png"></a></li>
            <li><a href="tab-7" role="tab" data-toggle="tab">Parents <img src="assets/img/details.png"></a></li>-->
            
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                
                <p>
                    <div class="table-responsive"  >
<!--**************************************************************************************************************************-->
                        <div class="container" style="width:100%">
                            
                                <ul class="nav nav-tabs">
                                  <li class="active"><a href="students.php">New Student <img src="assets/img/new.png"> </a></li>
                                  <li><a href="viewstudentrecord.php">View List<img src="assets/img/view2.png"></a></li>
                                  
                                  <li><a href="reports_students.php">Reports </a></li>
                                </ul>
                            <br>
                            
                        </div>
<!--**************ths is the success msg on saving the cord-->
                
  <!--*************************************************************************************************************************-->
<div class="container-fluid">
       <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Add new student</div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table"> 

                       <form action="students.php" method="POST" enctype="multipart/form-data">
                                 <label>Admission number</label>
                                <input type="text" name="admission_number" placeholder="Admission number" id="ssname" class="form-control">              
                                <div style="float:left;  position:relative">
                                <h4>Personal Details</h4>
                                                                               
                                <label>title</label>
                                <input type="text" name="sirname" placeholder="e.g mr" id="ssname" class="form-control">
                             
                                <label>Firstname</label>
                                <input type="text" name="firstname" placeholder="e.g Jane" id="sfname" class="form-control" >
                              
                                <label>Last Name</label>
                                <input type="text" name="lastname" placeholder="e.g Wangechi" id="slname" class="form-control">
                             
                                <label>ID/Passport NO.</label>
                                 <input type="text" name="idno" class="form-control" placeholder="optional">
                                <label>DOB</label>
                                <input type="date" name="dateofbirth" required class="form-control" max="2010-12-31">
                                <label>Gender</label>
                                <select  name="gender" id="gender"  class="form-control">
                                                                               
                                                                                          

                                                    
                                                 <option value="male">male</option>
                                                          <option value="female">female</option>
                                                </select>
                                
                                </div>
                                <!--section two-->
                                <div style="float:right; position:relative">
                                <h4>Contact Details</h4>
                                                           
                                <label> Mobile</label>
                                <input type="number" name="mobile"  class="form-control">
                                <label> Email</label>
                                <input type="email" name="email" class="form-control" placeholder="xyz@gmail.com"> 

                                <label> Address</label>
                                <input type="text" name="address" class="form-control" >
                               
                                <label> Zip Code</label>
                                <input type="text" name="zipcode" class="form-control">
                                
                                <label> Date of Admission</label>
                                <input type="date" name="reg_date" required class="form-control" value="<?php echo date('Y-m-d'); ?>" >
                                
                                <label>Course </label>
                                <select name="course_id" required class="form-control">
                                                <?php                                                                                                                                                
                                                $sql2="SELECT * FROM course  ";
                                                $records2=mysqli_query($db,$sql2);
                                                $out=mysqli_num_rows($records2);
                                                //check wheather or not classes are entered
                                                        if ($out=0)
                                                        {
                                                                $out="It seems there are classes added yet[<a href='course.php'>Add Class</a>] ";
                                                        }
                                                        else{
                                                            $out=mysqli_num_rows($records2). " Classes found [<a href='course.php'>Add Class</a>] ";
                                                        }
                                                //end of check process. the output is stored in variable $out
                                                while($users2=mysqli_fetch_array($records2,MYSQLI_ASSOC))
                                                        {
                                                            echo "<option>".$users2['coursename']."</option>";
                                                        }
                                                
                                                ?></select>
                                                <?php echo '<font color="red"><i>'.$out. '</i></font>'?><br>

                                
                                </div>                               
                                <!--this is section three-->
                                <div style="float:left;  position:relative; clear:both;">
                             
                                <h4>Guardian/Parent and other Details for student</h4>
                                                     
                                <label> title</label>
                                <input type="text" name="psirname" id="sn" class="form-control">
                                
                                <label>Firstname Name</label>
                                <input type="text" name="pfirstname" id="fn" class="form-control">
                                 
                                 <label>Last Name</label>
                                <input type="text" name="plastname" class="form-control">
                                
                                <label>Mobile</label> 
                                <input type="number" name="pmobile" class="form-control">

                                <label>Emergency Contact</label> 
                                <input type="number" name="emergency_contact" class="form-control">
                                
                                <label>Relationship </label>
                                <input type="text" name="prelationship" placeholder="Father" class="form-control"><br>
                               
                               
                               <input type="submit" name="register" value="Save Record" class="btn btn-success"><br><br>
                                </div>                               
                        </form></div>
</div>
</div>
</div>
</div>
</div>

<!--*************************************PHP CODES TO SAVE THE DATA************************************************-->
<?php
    //include('connect.php');
    if (isset($_POST['register'])){

    $xx=$_POST['course_id'];
        $sql="SELECT * FROM course WHERE coursename='$xx'";
        $user_query=mysqli_query($db,$sql) or die("error getting data");
        while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
        $course_id = $row['course_id'];
        }
        
       
        $admission_number=($_POST['admission_number']);
        $reg_date=($_POST['reg_date']);
        $sirname=($_POST['sirname']);
        $firstname=($_POST['firstname']);
        $lastname=($_POST['lastname']);
      
        $dateofbirth=($_POST['dateofbirth']);
        $gender=($_POST['gender']);
        $mobile=($_POST['mobile']);

        $emergency_contact=($_POST['emergency_contact']);
        $email=($_POST['email']);
        $address=($_POST['address']);
        $zipcode=($_POST['zipcode']);
       
        $monthh = strtotime('date()');
        $mon = date('Y-m-d',$monthh);

    //<!--**************************************************************>
                        $admission_number=($_POST['admission_number']);
                        $psirname=($_POST['psirname']);
                        $pfirstname=($_POST['pfirstname']);
                        $plastname=($_POST['plastname']);
                        $pmobile=($_POST['pmobile']);
                        $prelationship=($_POST['prelationship']);
    
     mysqli_query($db,"INSERT INTO studentstable (admission_number, sirname, firstname, lastname,  dateofbirth, gender,  mobile, email, address, zipcode, course_id,reg_date, emergency_contact)
     VALUES('$admission_number','$sirname','$firstname','$lastname','$dateofbirth','$gender','$mobile','$email',
     '$address','$zipcode','$course_id','$reg_date','$emergency_contact')") or die(mysqli_error($db));

     mysqli_query($db,"INSERT INTO parents(admission_number, psirname, pfirstname, plastname, pmobile, prelationship)
      VALUES('$admission_number','$psirname','$pfirstname','$plastname','$pmobile','$prelationship')") or die(mysqli_error($db));

?>
                        <?php 
                        $query="SELECT * FROM studentstable";
                        $records2=mysqli_query($db,$query);
                        while($rec=mysqli_fetch_array($records2, MYSQLI_ASSOC))
                        {
                        $id = $rec['admission_number'];
                        }?>
                        
                        <script>
 
                        alert('Succsessfully Save. ');
                        
                        </script>
<?php
 //<!--*******************************try add parent's details******************************************************-->  

}?>
<!--**********************************************************************************************************************-->
             

                </div>
                </p>


            </div>
            
        </div>
    </div>
    
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/affix.js"></script>
    <script src="assets/js/alert.js"></script>
    <script src="assets/js/alert1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/bootstrap-wysihtml5.js"></script>
    <script src="assets/js/button.js"></script>
    <script src="assets/js/carousel.js"></script>
    <script src="assets/js/chosen.jquery.min.js"></script>
    <script src="assets/js/ckeditor.js"></script>
    <script src="assets/js/collapse.js"></script>
    <script src="assets/js/color.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/DT_bootstrap.js"></script>
    <script src="assets/js/dynamic.js"></script>
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="assets/js/jquery.dataTables.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/jquery.dialog.js"></script>
    <script src="assets/js/jquery.hoverdir.js"></script>
    <script src="assets/js/jquery.jgrowl.js"></script>
    <script src="assets/js/jquery.knob.js"></script>
    <script src="assets/js/jquery.uniform.min.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/jquery-1.9.1.js"></script>
    <script src="assets/js/jquery-1.9.1.min.js"></script>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/jquery-1.11.0.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery-ui-1.10.3.js"></script>
    <script src="assets/js/modal.js"></script>
    <script src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="assets/js/myjquery.js"></script>
    <script src="assets/js/myjquery1.js"></script>
    <script src="assets/js/npm.js"></script>
    <script src="assets/js/popover.js"></script>
    <script src="assets/js/profile.js"></script>
    <script src="assets/js/raphael-min.js"></script>
    <script src="assets/js/sb-admin-2.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/scrollspy.js"></script>
    <script src="assets/js/tab.js"></script>
    <script src="assets/js/tooltip.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/wysihtml5-0.3.0.js"></script>
<!--when everything is fine the loades stops loadeing-->
<script language="javascript" type="text/javascript">
     $(window).load(function()
      {
        $('#loading').hide();
      });
</script>

</body>

</html>