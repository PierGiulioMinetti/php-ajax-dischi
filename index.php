<?php
include __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="dist/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- GENERAL CONTAINER -->
    <div id="app" class="general-container d-flex flex-clmn">
        <!-- HEADER -->
        <div class="header">
            
            <img class="logo-header" src="logo.png" alt="">
        </div>
        <!-- MAIN -->
        <div class="main">
            <div class="container-main">
                <div class="container-album d-flex">
                    <?php foreach ($database as $value) { ?>
                        <div class="single-album ">

                            <div class="album-cover d-flex">
                                <img src="<?php echo $value['poster'] ?>" alt="">
                            </div>
                            <div class="album-description">
                                <p>
                                    <?php echo $value['title'] ?>
                                </p>
                                <p>
                                    <?php echo $value['author'] ?>
                                </p>
                                <p>
                                    <?php echo $value['year'] ?>
                                </p>

                                <p>
                                    <?php echo $value['genre'] ?>
                                </p>


                                <!-- PHP -->
                            

                            <!-- PHP -->
                            </div>
                        </div>
                    <?php } ?>    
                </div>
            </div>
        </div>
    </div>


    <!-- js -->
    <script src="dist/js/main.js"></script>
</body>

</html>