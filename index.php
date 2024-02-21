<?php

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
    <h2 class="text-center mb-5">Genera una password sicura</h2>
    <form action="" methods="GET" class="d-flex justify-content-between align-items-center">
        <div class="my-3 d-flex gap-3 justify-content-start align-items-center">
            <label for="password" class="form-label">Lunghezza Password:</label>
            <input type="number" class="form-control" id="password" value="1">
        </div>
        <button class="btn btn-primary">Crea</button>
    </form>
    <p>La tua password è:</p>
</main>


    <!-- js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>