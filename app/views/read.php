<?php

ob_start();

?>

<h2><?php echo $news['name'];?></h2>
<h3><?php echo $news['discription'];?></h3>
<h4><?php echo $news['author'];?></h4>
<h4><?php echo $news['date_at'];?></h4>

<?php

$content = ob_get_clean();

include 'app/views/layout.php';
?>