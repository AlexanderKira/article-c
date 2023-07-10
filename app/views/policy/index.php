<?php

ob_start();

?>

<?php foreach($allnews as $news): ?>

<div>
    <a href="index.php?page=policynews&action=read&id=<?php echo $news['id']; ?>"><?php echo $news['name'] . '<br>' . $news['date_at']; ?></a>
</div>

<?php endforeach;?>
<?php

$content = ob_get_clean();

include 'app/views/layout.php';

?>