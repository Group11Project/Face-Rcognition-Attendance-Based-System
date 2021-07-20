
<?php
include("connect.php"); 
?>
<?php
SESSION_START();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>attendence system</title>
    <link rel="shortcut icon" href="assets/img/title.gif" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/css/loader.css" rel="stylesheet" />
    <script src="assets/js/canvasjs.min.js"></script>
    <!--*****jquery -3.2.1.js file supports the use of dropdown***-->
    <script src="assets/js/jquery-3.2.1.js"></script>

<!--***************the year search text box*************************************************-->

<!--***************the year search text box*************************************************-->
<style> 
body {
  font-family: Tahoma;
}

header {
  text-align: center;
}

#calendar {
  width: 100%;
}

#calendar a {
  color: #8e352e;
  text-decoration: none;
}

#calendar ul {
  list-style: none;
  padding: 0;
  margin: 0;
  width: 100%;
}

#calendar li {
  display: block;
  float: left;
  width: 14.342%;
  padding: 5px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  margin-right: -1px;
  margin-bottom: -1px;
}

#calendar ul.weekdays {
  height: 40px;
  background: #8e352e;
}

#calendar ul.weekdays li {
  text-align: center;
  text-transform: uppercase;
  line-height: 20px;
  border: none !important;
  padding: 10px 6px;
  color: #fff;
  font-size: 13px;
}

#calendar .days li {
  height: 180px;
}

#calendar .days li:hover {
  background: #d3d3d3;
}

#calendar .date {
  text-align: center;
  margin-bottom: 5px;
  padding: 4px;
  background: #333;
  color: #fff;
  width: 20px;
  border-radius: 50%;
  float: right;
}

#calendar .event {
  clear: both;
  display: block;
  font-size: 13px;
  border-radius: 4px;
  padding: 5px;
  margin-top: 40px;
  margin-bottom: 5px;
  line-height: 14px;
  background: #e4f2f2;
  border: 1px solid #b5dbdc;
  color: #009aaf;
  text-decoration: none;
}

#calendar .event-desc {
  color: #666;
  margin: 3px 0 7px 0;
  text-decoration: none;
}

#calendar .other-month {
  background: #f5f5f5;
  color: #666;
}

/* ============================
        Mobile Responsiveness
   ============================*/
@media (max-width: 768px) {
  #calendar .weekdays, #calendar .other-month {
    display: none;
  }

  #calendar li {
    height: auto !important;
    border: 1px solid #ededed;
    width: 100%;
    padding: 10px;
    margin-bottom: -1px;
  }

  #calendar .date {
    float: none;
  }
}</style>


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
            <li><a href="staff.php">Staff Member <img src="assets/img/staff48.png"></a></li>
            <li><a href="course.php" >Courses <img src="assets/img/course.png"></a></li>
           <li><a href="sms.php">SMS  <img src="assets/img/details.png"></a></li>
            <!--<li><a href="tab-8" role="tab" data-toggle="tab">Hostel <img src="assets/img/details.png"></a></li>
            <li><a href="tab-7" role="tab" data-toggle="tab">Parents <img src="assets/img/details.png"></a></li>-->
            
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                
                <p>
                    <div class="table-responsive"  >
<!--****************************************************************************-->
                        
                        
  <!--*************************************************************************************************************************-->
<div id="page-wrapper">
            <div class="container-fluid">

                
                <!-- Page Heading -->
                <nav>
                <?php
                    $id = $_GET['id'];
  
                   
                    
                    
                    ?>

                       
                       
                        <center><h4><strong> attendence of student with &nbsp;<?php echo $id; ?>   admission no.</strong><h4></center>
                
                        
                                            
                        <div>   
                            <div >
                                                                                
                           

                            <div class=>
                                <div >
    
                            <form method="post">
                                    <div >
                                    <table  >
                                    
                                        
                                        <tbody>
                        <?php 
                    $id=$_GET['id']; 
                    $cnt=0;
                    $abs=0;

                    $sql ="SELECT  * from attendence";
                    $user_query=mysqli_query($db,$sql) or die("error getting data");
                    while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){

                  
                        ?>
                                               
                                                
                                            
                            </tr>
                                                <?php } ?>
                                        </tbody>
                                    </table>
                                </form>

            </div>
                            </div>
                        </div>
                    </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
</div>
  <!--*********************************************************************************-->  
   
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
    <script language="javascript" type="text/javascript">
     $(window).load(function()
      {
        $('#loading').hide();
      });
</script>
 <div id="calendar-wrap">
        <header>
            <h4>july 2021</h4>
        </header>
        <div id="calendar">
            <ul class="weekdays">
                <li>Sunday</li>
                <li>Monday</li>
                <li>Tuesday</li>
                <li>Wednesday</li>
                <li>Thursday</li>
                <li>Friday</li>
                <li>Saturday</li>
            </ul>
    
            <!-- Days from previous month -->
    
            <ul class="days">
                <li class="day other-month">
                    <div class="date">27</div>
                </li>
                <li class="day other-month">
                    <div class="date">28</div>
                   
                </li>
                <li class="day other-month">
                    <div class="date">29</div>
                </li>
                <li class="day other-month">
                    <div class="date">30</div>
                </li>
                <li class="day other-month">
                    <div class="date">31</div>
                </li>
    
                <!-- Days in current month -->
    
                <li class="day">
                    <div class="date">1</div>
                </li>
                <li class="day">
                    <div class="date">2</div>

                </li>
            </ul>
    
            <!-- Row #2 -->
    
            <ul class="days">
                <li class="day">
                    <div class="date">3</div>
                </li>
                <li class="day">
                    <div class="date">4</div>
                </li>
                <li class="day">
                    <div class="date">5</div>
                </li>
                <li class="day">
                    <div class="date">6</div>
                </li>
                <li class="day">
                    <div class="date">7</div>
                    <div class="event">
                        <div class="event-desc">
                            Group Project meetup
                        </div>
                        <div class="event-time">
                            6:00pm to 8:30pm
                        </div>
                    </div>
                </li>
                <li class="day">
                    <div class="date">8</div>
                </li>
                <li class="day">
                    <div class="date">9</div>
                </li>
            </ul>
    
            <!-- Row #3 -->
    
            <ul class="days">
                <li class="day">
                    <div class="date">10</div>
                </li>
                <li class="day">
                    <div class="date">11</div>
                </li>
                <li class="day">
                    <div class="date">12</div>
                </li>
                <li class="day">
                    <div class="date">13</div>
                </li>
                <li class="day">
                    <div class="date">14</div>
                    <div class="event">
                        <div class="event-desc">
                            Board Meeting
                        </div>
                        <div class="event-time">
                            
                        </div>
                    </div>
                </li>
                <li class="day">
                    <div class="date">15</div>
                </li>
                <li class="day">
                    <div class="date">16</div>
                </li>
            </ul>
    
            <!-- Row #4 -->
    
            <ul class="days">
                <li class="day">
                    <div class="date">17</div>
                </li>
                <li class="day">
                    <div class="date">18</div>
                </li>
                <li class="day">
                    <div class="date">19</div>
                </li>
                <li class="day">
                    <div class="date">20</div>
                </li>
                <li class="day">
                    <div class="date">21</div>
                </li>
                <li class="day">
                    <div class="date">22</div>
                    <div class="event">
                        <div class="event-desc">
                            Conference call
                        </div>
                        <div class="event-time">
                            9:00am to 12:00pm
                        </div>
                    </div>
                </li>
                <li class="day">
                    <div class="date">23</div>
                </li>
            </ul>
    
            <!-- Row #5 -->
    
            <ul class="days">
                <li class="day">
                    <div class="date">24</div>
                </li>
                <li class="day">
                    <div class="date">25</div>
                    <div class="event">
                        <div class="event-desc">
                            Conference Call
                        </div>
                        <div class="event-time">
                            1:00pm to 3:00pm
                        </div>
                    </div>
                </li>
                <li class="day">
                    <div class="date">26</div>
                </li>
                <li class="day">
                    <div class="date">27</div>
                </li>
                <li class="day">
                    <div class="date">28</div>
                </li>
                <li class="day">
                    <div class="date">29</div>
                </li>
                <li class="day">
                    <div class="date">30</div>
                </li>
            </ul>
    
            <!-- Row #6 -->
    
            <ul class="days">
                <li class="day">
                    <div class="date">31</div>
                </li>
                <li class="day other-month">
                    <div class="date">1</div> <!-- Next Month -->
                </li>
                <li class="day other-month">
                    <div class="date">2</div>
                </li>
                <li class="day other-month">
                    <div class="date">3</div>
                </li>
                <li class="day other-month">
                    <div class="date">4</div>
                </li>
                <li class="day other-month">
                    <div class="date">5</div>
                </li>
                <li class="day other-month">
                    <div class="date">6</div>
                </li>
            </ul>
    
        </div><!-- /. calendar -->
    </div><!-- /. wrap -->

    
</body>

</html>