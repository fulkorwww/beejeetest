<div class="newtask">
 <div class="container">
  <h1 class="text-center">Send new task</h1> 
<?php
  $result=$name=$email=$text="";
  try{
	  $name=$_POST['name'];
	  $email=$_POST['email'];
	  $text=$_POST['text'];
  }catch(Exception $e){
	  $result="All fields are required";
  }
    if(strlen($result)==0 & strlen($name)==0 & strlen($email)==0 & strlen($text)==0){
?>
  <form method="post">
   <div class="row">
    <div class="col-lg-2 col-md-2">
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12">
       <div class="form-group">
         <input type="text" class="form-control form-control-lg" placeholder="Your Name" name="name">
       </div>
       <div class="form-group">
         <input type="email" class="form-control form-control-lg" placeholder="YourEmail@email.com" name="email">
       </div>
       <div class="form-group">
         <textarea class="form-control form-control-lg" placeholder="Your task" name="text"></textarea>
       </div>
       <input type="submit" class="btn btn-secondary btn-block" value="Save" name="">
    </div>
    <div class="col-lg-2 col-md-2">
    </div>
   </div>
  </form>
<?php
  }
  else{
	if (strlen($name)==0 | strlen($email)==0 | strlen($text)==0){
	  $result="All fields are required";
	}else{
      $query='INSERT INTO tasks(name, email, task) VALUES ("'.$name.'","'.$email.'","'.$text.'")';
      try{
	    $qry=App::$db->execute($query);
		$result="Task was successfully saved!";
	  }catch(Exception $e){
	    $result="Task can not be saved";
	  }	
    }  	
?>
    <div class="row">
    <div class="col-lg-2 col-md-2">
    </div>
	<div class="col-lg-8 col-md-8 col-sm-12">
	<p><?php
	echo $result;
	?></p>
	</div>
    <div class="col-lg-2 col-md-2">
    </div>
	</div>
<?php
  }
?>
 
 </div>
</div>

