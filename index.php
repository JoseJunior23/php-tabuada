<?php
$num = $_POST['num'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabuada</title>
</head>

<body>
  <form action="index.php" method="post">
    <label for="">Qual será o numero que faremos a tabuada? </label>
    <input type="number" name="num">
    <button type="submit">Mostrar tabuada</button>
  </form>

  <?php for ($i = 1; $i <= 10; $i++) : ?>
    $mult = $num * $i;
    $cont += 1;
    <?php echo $num . ' x ' . $i . ' = ' . $mult . '<br>' ?>

  <?php endfor ?>
</body>

</html>