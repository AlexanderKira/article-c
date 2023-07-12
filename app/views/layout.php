<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Документ</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 </head>
 <body>
 <div class="container">
		<nav class="navbar navbar-expand-lg bg-body-tertiary">
	  <div class="container-fluid">
		<a class="navbar-brand" href="index.php">Новости</a>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		  <div class="navbar-nav">
			<a class="nav-link" href="index.php?page=lifenews">Жизнь</a>
			<a class="nav-link" href="index.php?page=policynews">Политика</a>
			<a class="nav-link" href="index.php?page=sportnews">Спорт</a>
		  </div>
		</div>
	  </div>
	</nav>
	
	
	<div class="container mt-4">
		<?php echo $content; ?>
	</div>
 </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 </body>
</html>