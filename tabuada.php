
<?php
$num = $_POST['num'];

for ($i = 1; $i <= 10; $i++) {
  $mult = $num * $i;
  $cont += 1;
  echo $num . ' x ' . $i . ' = ' . $mult . '<br>';
}
