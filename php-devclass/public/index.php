<?php require "../bootstrap.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - DevClass</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <!-- função load() para não precisar digitar novamente todo o html, é so alocar as paginas na pasta "pages" dentro de public -->
        <?php  
        
            try{

                require load();

            }catch(Exception $e){

                echo $e->getMessage();
            }

        ?>
        
    </div>
</body>
</html>