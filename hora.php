<html>
    <body>
<?php
    $h = date("H");
    if($h >=0 && $h <12){
        echo "<p>" .$h. "hs.Bom dia a todos!</p>";
    }else if($h >=12 && $h <18){
            echo "<p>" .$h. "hs.Boa tarde a todos!</p>";
    }else if($h >=18 && $h <24){
                echo "<p>" .$h. "hs.Boa noite a todos!</p>";
    }
    ?>
    </body>
    </html>