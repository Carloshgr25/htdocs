<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegando arquivos pelo form</title>
</head>
<body>

    <form action="testearqform.php" method="post" enctype="multipart/form-data">
        
        <input type="file" name="img">
        <button type="submit">Cadastrar</button>

    </form>

</body>
</html>