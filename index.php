<?php  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script type='text/javascript' src='js/jquery-3.6.0.min.js'></script>
    <script type='text/javascript' src='js/ui.js'></script>
    <title>Document</title>
</head>
<body>
    
    <?php
    include_once 'pages/navigation.php';
    echo '<div class="site">';
    include_once 'pages/header.php'; // Вставка шапки
    include_once 'pages/main.php';  // Вставка основного блока
    include_once 'pages/footer.php'; // Вставка футера
    echo '</div>';
    ?>
</body>
</html>