<?php
include 'header.php';
?>
<div class="main" style="padding: 0px;">
   <div class="col-md-10" style="padding: 0px;border-bottom: 2px #000 solid">
       <p style="font-size: 29px;font-weight: 600;margin: 6px 0px 5px 13px;">Add Student</p>
   </div>
   <div class="col-md-2" style="padding: 0px;border-bottom: 2px #000 solid">
       <nav class="navbar navbar-inverse sidebar" role="navigation">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown" style="border-bottom: none;border-top: none;">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <span class="caret"></span></a>
                         <ul class="dropdown-menu forAnimate" role="menu">
                             <li><a href="#">Profile <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                             <li><a href="#">Log out <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-log-out"></span></a></li>                    
                         </ul>
                     </li>
                </ul>
                </div>
            </div>
       </nav>       
   </div>
   <div class="col-md-8 col-md-offset-2" style="margin-top: 20px; border: 2px #245269 dotted; padding: 10px;">
       <form action="" method="post">
        <div class="form-group">
          <label for="fname">First Name:</label>
          <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
        </div>
        <div class="form-group">
          <label for="lname">Last Name:</label>
          <input type="text" class="form-control" id="lName" placeholder="Enter Last Name" name="lname">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
        <div class="">
          <label for="gender">Gender:</label>
          <label class="radio-inline"><input type="radio" name="optradio">Male</label>
          <label class="radio-inline"><input type="radio" name="optradio">Female</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
</div>

<?php
include 'footer.php';
?>