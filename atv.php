<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voto?</title>
</head>

<body>


<form method="post" action=""> 

  <label for="idade">Idade</label>
  <input type="number" id="idade" name="idade">
  <button type="submit">Verificar</button>

</form>
       
    <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = $_POST['idade']; 

        if ($idade < 15) { 
            echo "Não Pode Votar";
        }elseif ($idade >=16 && $idade <18){ 
            echo "Voto Facultativo";
        } elseif ($idade >=18 && $idade <65){ 
            echo "Voto Obrigatorio";
        } elseif ($idade >=65){ 
            echo "Voto Facultativo";
       
        }
    }
    ?>
</body>
</html>