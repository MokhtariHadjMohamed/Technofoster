<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technofoster</title>
    <link rel="icon" href="Public/Assest/Images/logo_technofoster_header.png" type="image/x-icon">

    <!-- Main Css -->
    <link rel="stylesheet" href="Public/Css/main.css">
    <?php echo $styleSheet;?>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gPublic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <!-- Normalize -->
    <link rel="stylesheet" href="Public/Css/normalize.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="Public/Css/all.min.css">
</head>

<body>
    <?php include __DIR__ . '/nav_bar.php'; ?>

    <main>
        <?php echo $content; ?>
    </main>

    <?php include __DIR__ . '/footer.php'; ?>

    <script src="Public/Js/main.js"></script>
</body>

</html>