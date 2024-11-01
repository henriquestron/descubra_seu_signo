<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signos</title>
    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>
    <header>
    
        
        <h1>
            Descubra o seu signo!!
        </h1>
        <form id="signo-form" method="POST" action="show_zodiac_sign.php">
            <div class="data">
                <p>Data de Nascimento: </p><input type="date" id="data_nascimento" name="data_nascimento" required>
            </div>
            <button type="submit" class="btn btn-primary mt-4 w-100">Enviar</button>
        </form>
        
    </header>
</body>
<?php include('header.php'); ?>

</html>
