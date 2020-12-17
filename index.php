<?php 
    include __DIR__ .'/database.php';

        foreach($database as $value); { 
?>
            
            <h2> 
               <?php echo $value['year'] ?>     
            </h2>
            
<?php }
               
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
    <div class="general-container d-flex flex-clmn">
    <div class="header">
        <img class="logo-header" src="logo.png" alt="">
    </div>
    <div class="main">
        <div class="container-main">
            <div class="container-album d-flex">
                <div class="single-album">
                    <div class="album-cover d-flex">
                        <img src="logo.png" alt="">
                    </div>
                    <div class="album-description">

                    </div>
                </div>
                <div class="single-album">

                </div>
                <div class="single-album">

                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>