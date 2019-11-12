<div class="login">
 <div class="container">
  <h1 class="text-center">Login</h1> 
<?php
session_start();
if(isset($_SESSION['logged_user'])){
	session_unset();
    session_destroy();
}
if (isset($_POST[do_login])){
	if ($_POST[login]=="admin" & $_POST[password]=="123"){
		$_SESSION['logged_user'] = "admin";
?>
   <div class="row">
    <div class="col-lg-2 col-md-2">
    </div>
	<div class="col-lg-8 col-md-8 col-sm-12">
	<p>You are logged as Admin</p>
	</div>
    <div class="col-lg-2 col-md-2">
    </div>
   </div>
<?php
	}else{
?>
   <div class="row">
    <div class="col-lg-2 col-md-2">
    </div>
	<div class="col-lg-8 col-md-8 col-sm-12">
	<p>Incorrect login or password</p>
	</div>
    <div class="col-lg-2 col-md-2">
    </div>
   </div>
<?php
	}
	}	
	if($_SESSION['logged_user']!=="admin"){
?>
   <form method="post">
   <div class="row">
    <div class="col-lg-2 col-md-2">
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12">
       <div class="form-group">
         <input type="text" class="form-control form-control-lg" placeholder="Login" name="login">
       </div>
       <div class="form-group">
         <input type="password" class="form-control form-control-lg" placeholder="Password" name="password">
       </div>
       <input type="submit" class="btn btn-secondary btn-block" value="Login" name="do_login">
    </div>
    <div class="col-lg-2 col-md-2">
    </div>
  </div> 
  </form>
 <?php
	}
?>
 </div>
</div>

