<?php
include 'header.php';
?>
<div class="main" style="padding: 0px;">
   <div class="col-md-10" style="padding: 0px;border-bottom: 2px #000 solid">
       <p style="font-size: 29px;font-weight: 600;margin: 6px 0px 5px 13px;">Main page</p>
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
   <div class="">
   </div>
</div>

<?php
include 'footer.php';
?>