<div class="tasklist">	
<div class="container">
    <h1 class="text-center">Task list</h1>
	<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3">
    <span class="font-weight-bold"><a href='/home/index/<?php echo $page.'/name/'.($order=='asc'?'desc':'asc')?>'>Name</a></span>
    </div>
   <div class="col-lg-3 col-md-3 col-sm-3">
    <span class="font-weight-bold"><a href='/home/index/<?php echo $page.'/email/'.($order=='asc'?'desc':'asc')?>'>E-mail</a></span>
   </div>
   <div class="col-lg-3 col-md-3 col-sm-3">
    <span class="font-weight-bold">Text</span>
   </div>
   <div class="col-lg-3 col-md-3 col-sm-3">
    <span class="font-weight-bold"><a href='/home/index/<?php echo $page.'/status/'.($order=='asc'?'desc':'asc')?>'>Status</a></span>
   </div>
   </div>
<?php
  if (empty($column) | empty($order))
    $tasks=App::$db->execute("SELECT * FROM tasks");
  else
    $tasks=App::$db->execute("SELECT * FROM tasks ORDER BY ".$column." ".$order);
  $tasksnum=count($tasks);
  for($i=($page-1)*3; $i<$tasksnum&$i<$page*3; $i++){
    $row=$tasks[$i];
	echo '<div class="row">';
    echo '<div class="col-lg-3 col-md-3 col-sm-3">'.$row['name'].'</div>';
    echo '<div class="col-lg-3 col-md-3 col-sm-3">'.$row['email'].'</div>';
    echo '<div class="col-lg-3 col-md-3 col-sm-3">'.$row['task'].'</div>';
    echo '<div class="col-lg-3 col-md-3 col-sm-3"></div>';
    echo '</div>';
  }

  if ($tasksnum>3)
  {
    echo '<p><ul class="pagination justify-content-center">';
	for ($i=0; $i<$tasksnum; $i+=3)
	{
		$active=(int)($i/3+1)==$page?' active':'';
		if (empty($column) | empty($order))
		  $sorting='';
		else
		  $sorting='/'.$column.'/'.$order;	
		echo '<li class="page-item'.$active.'"><a class="page-link" href="/home/index/'.(int)($i/3+1).$sorting.'">'.(int)($i/3+1).'</a></li>';
	}
    echo '</ul></p>';
  }
?>  
  </div>
  </div>
