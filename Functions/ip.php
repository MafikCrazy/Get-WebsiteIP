<?php
    if(isset($_POST['ipget'])){
        $dominio = $_POST['domainget'];
    }
    
    function showIp() {
        $dominio = $_POST['domainget'];
        $ipSite = gethostbyname($dominio);
        $msg = "IP Adress: " . $ipSite;
    
        echo htmlspecialchars($msg, ENT_QUOTES);
    }
