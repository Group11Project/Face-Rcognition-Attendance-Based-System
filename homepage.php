<?php
include("connect.php"); 
include('anaysispage.php');
$cname="";
$cemail="";
$ccontact="";
$clocation="";
?>
<!--*****************Analysis data*****************************-->
<?php
SESSION_START();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>attendance system</title>
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/css/loader.css" rel="stylesheet" />
    <script src="assets/js/canvasjs.min.js"></script>
    <!--*****jquery -3.2.1.js file supports the use of dropdown***-->
    <script src="assets/js/jquery-3.2.1.js"></script>

<script type="text/javascript">
var class1=<?php  echo $class1; ?>;
var class2=<?php  echo $class2; ?>;
var class3=<?php  echo $class3; ?>;
var class4=<?php  echo $class4; ?>;
var class5=<?php  echo $class5; ?>;
var class6=<?php  echo $class6; ?>;
var class7=<?php  echo $class7; ?>;
var class8=<?php  echo $class8; ?>;
window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {
        title:{
            text: "Number of students" 

        },
        data: [              
        {
            // Change type to "doughnut", "line", "splineArea", etc.
            type: "spline",

            dataPoints: [
                { label: "Form 1",  y: class1  },
                { label: "Form 2", y: class2  },
                { label: "Form 3", y: class3  },
                { label: "Form 4",  y: class4  },
            ]
        }
        ]
    });
    chart.render();
}
</script>


</head>
<!--<style type="text/css">
    body{
        margin-right: 10px;
        margin-left: 10px;
        }
</style>

-->
<style type="text/css">
  .panel-success{
    background-color: rgba(245, 245, 245, 0);
    border:none;
  }

</style>



<body
        background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover; >
<!--end of heading section--> 
<ul class="nav navbar-right top-nav">                        
    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" >
  <?php
        //Check to see if the user is logged in.if not redirect user to the loging page.
        
        if(isset($_SESSION['fname']))
        { 
        echo   "Current user: ".$_SESSION['fname']. "&nbsp;".$_SESSION['lname']. " ";
        $adm=$_SESSION['role'];
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
    <div>
        <ul class="nav nav-tabs">
            <li class="active"><a href="homepage.php" >Administration <img src="assets/img/details.png"></a></li>
            <li ><a href="students.php" >Students <img src="assets/img/student48.png"></a></li>
            <li><a href="staff.php">faculty<img src="assets/img/staff48.png"></a></li>
            <li><a href="course.php" >Courses <img src="assets/img/course.png"></a></li>
            <li><a href="sms.php">SMS <img src="assets/img/details.png"></a></li>
            <!--<li><a href="tab-8" role="tab" data-toggle="tab">Hostel <img src="assets/img/details.png"></a></li>
            <li><a href="tab-7" role="tab" data-toggle="tab">Parents <img src="assets/img/details.png"></a></li>-->
            
        </ul>
        <div class="tab-content">
        <form action="homepage.php" method="POST" enctype="multipart/form-data">
        <input type="submit" name="regi" value="Add today  as working day" class="btn btn-success">
        </form>
       <?php 
       echo "Today is " . date("Y-m-d") . "<br>";
       $dat=date("Y-m-d");
       
       
       ?>
        <?php
   // include("connect.php");
    if (isset($_POST['regi'])){
mysqli_query($db,"INSERT INTO attendence( AttDate ) VALUES ('$dat')") or die(mysqli_error($db));
     
?>
                        <?php 
                      ?>
                                        
                        <script>
 
                        alert('Succsessfully Save.');
                                               </script>
<?php }?>
       

 


            <div class="tab-pane active" role="tabpanel" id="tab-1">
                
                <p>
                    <div class="table-responsive"  >
<!--****************************************************************************-->
                        


                        
  <!--*************************************************************************************************************************-->


<div >
                        
 <h4>
<table class="table" style="text-align:center" >
   <tr >
       
       <td >
    <div class="panel panel-success">
      <div class="panel-heading">Students</div>
        <div class="panel-body">
       
       <font color="red">
            <?php
            $sql="SELECT * FROM studentstable";

            $result=mysqli_query($db,$sql) or die("error getting data");
            $num_rows=mysqli_num_rows($result);
             echo "$num_rows Student[s] found</font><br>";
             echo "<a href='viewstudentrecord.php'>View students";
             
             
             ?><br>
             <?php
            $sql="SELECT * FROM studentstable WHERE gender='female'";
            $result=mysqli_query($db,$sql) or die("error getting data");
            $num_rows=mysqli_num_rows($result);
             echo "$num_rows Female Students</font>"; 
             ?>
             <img src="assets/img/students.png">
             <?php
            $sql="SELECT * FROM studentstable WHERE gender='male'";
            $result=mysqli_query($db,$sql) or die("error getting data");
            $num_rows=mysqli_num_rows($result);
             echo "$num_rows Male Students</font>";
             ?>
             </font>
             <img src="assets/img/students.png">
       </div>
       </td>
       
       <td>
      <div class="panel panel-success" >
        <div class="panel-heading">Staff/Office</div>
          <div class="panel-body">     
                <a href="viewstaff.php" >View Staffs<br>
               
               
         </div> 
        </td>
      
   </tr> 
   <tr>
        <td>
    <div class="panel panel-success">
      <div class="panel-heading">Communication</div>
          <div class="panel-body">
       <a href="sms.php" >Bulk sms<br><img src="assets/img/sms.png"></a><br>
<!--***when i click a link to get a confirmation wheathert to continue of not-->
       <script type="text/javascript">
              function AlertIt() {
              var answer = confirm ("Please click on OK to continue.")
              if (answer)
              window.location="http://www.continue.com";
              }
      </script>
<!--***when i click a link to get a confirmation wheathert to continue of not-->
 <!--      <a href="javascript:AlertIt();">Bulk Emails</a> -->
      </div>
       </td>
       
       <td>
      <div class="panel panel-success">
        <div class="panel-heading">Parent/Guardians</div>
          <div class="panel-body">
  <a href="parents.php<?php echo '?id=no'?>">View List<br></a>
       </div>
       </td>
   </tr>   
   <tr>
                  <script>
                  function myFunction3() {                
                      var person = prompt("Please confirm your password before accessing this module");
                      if (person =="<?php  echo $password; ?>") {
                          txt = "Welcome to the fee module";
                          window.location="pro1.php";
                      } else {
                         var txt ="You are not allowed to access this module";
                          alert(txt);
                      }
                  }
                  </script>
      
       
   </tr>
  </table></h4></div>
  

  <!--*********************************************************************************-->  

    

    <script src="assets/js/jquery.min.js"></script>
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
    <script src="assets/js/slideshow.js"></script>

    <script language="javascript" type="text/javascript">
     $(window).load(function()
      {
        $('#loading').hide();
      });
</script>

<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
</body>

</html>