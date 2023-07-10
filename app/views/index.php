<?php

ob_start();

?>

<h1>News</h1>


<?php

$content = ob_get_clean();

include 'app/views/layout.php';

?>