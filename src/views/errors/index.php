<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php require 'src/views/templates/header.php' ?>

    <div id="main">
        <h1 class="error center"><?php echo $this->message; ?></h1>
    </div>

    <?php require 'src/views/templates/footer.php' ?>
</body>

</html>