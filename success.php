<?php
session_start();
if(isset($_SESSION['password'])){
    $password = $_SESSION['password'];
    session_destroy();
} else{
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

           <!-- css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="p-5 m-5">
        <div class="container my-5">
        <div class="alert alert-info">
                La password generata è: <strong><?= $password ?></strong>
            </div>
            <a class="btn btn-primary" href="index.php">Torna Indietro</a>
        </div>
    </main>
    

    
</body>
</html>