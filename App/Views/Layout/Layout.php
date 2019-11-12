<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>BeeJeeTest</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
    </head>
    <body>
		<nav class="navbar navbar-expand-lg fixed-top ">
		<a class="navbar-brand" href="/home">Home</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse " id="navbarSupportedContent">
			<ul class="navbar-nav mr-4">
       
		<li class="nav-item">
         <a class="nav-link" href="/home">Task list</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="/newtask">New task</a>
       </li>		
       <li class="nav-item">
<?php
if(isset($_SESSION['logged_user']))
	echo '	<a class="nav-link" href="/login">Logout</a>';
else
	echo '	<a class="nav-link" href="/login">Login</a>';
?>
       </li>		
	   </ul>
		</div>
		</nav>   

<?= $body ?>

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src='/js/main.js'></script>

</body>
</html>