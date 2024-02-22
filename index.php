<?php
$length = $_GET['lenght'] ?? NULL;

if(!empty($length)){
    $password = generate_password($length);
}

function generate_password($length){
    // preparo una password
    $password = '';

    // elenco i possibili caratteri

    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $symbols = '!?*%$#@&(){}[]';

    $characters = $letters . strtoupper($letters) . $numbers . $symbols;

    // calcolo il totale dei caratteri
    $total_characters = mb_strlen($characters);

    //Estrai lettere a caso
    while(mb_strlen($password) < $length){
        //prendo un indice random
        $random_index = rand(0, $total_characters - 1);
        // prendo un carattere a caso
        $random_characters = $characters[$random_index];

        $password .= $random_characters;
    }

    // restituisco la password generata 
    return $password;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator password</title>

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <!-- css -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<header>
    <div class="container d-flex justify-content-center my-5">
        <h1>Strong Password Generator</h1>
    </div>
</header>
<main class="container p-5">
    <?php if(isset($password)):?>
        <div class="alert alert-info">
            La password generata è: <strong><?= $password ?></strong>
        </div>
    <?php endif; ?>
    <h2 class="text-center mb-5">Genera una password sicura</h2>
    <form action="" methods="GET" class="d-flex justify-content-between align-items-center">
        <div class="my-3 d-flex gap-3 justify-content-start align-items-center">
            <label for="password" class="form-label">Lunghezza Password:</label>
            <input type="number" class="form-control" id="password" name="lenght" min="5" value="<?= $length ?? 1?>">
        </div>
        <button class="btn btn-primary">Crea</button>
    </form>
</main>


    <!-- js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>