<?php 
    include("Functions/ip.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Get Webiste IP</title>
</head>
<body>
    
    <form action="" method="POST" class="hero-body box has-text-centered">
    <p class="has-text-centered">Simple <strong>Get Website IP</strong></p>

        <input class="input has-text-centered" type="text" name="domainget" placeholder="Ex: google.com" required>
        <br>
        <input class="button is-primary box" type="submit" name="ipget" value="Check IP">

        <?php 
            if(isset($_POST['ipget'])){
                echo htmlspecialchars("Domain Adress: " . $dominio, ENT_QUOTES); 
                echo "<br>";
                showIp();
            }
        ?>
    </form>

</body>
</html>