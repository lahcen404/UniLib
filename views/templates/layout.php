<?php 

$baseDir = __DIR__ . '/../../';

require_once $baseDir . '/views/templates/header.php'; 
?>

<main>
    <?php 
    $viewPath = $baseDir . 'views/pages/' . $content_file . '.php';
    require_once $viewPath;
    ?>
</main>

<?php 
require_once $baseDir . '/views/templates/footer.php'; 
?>