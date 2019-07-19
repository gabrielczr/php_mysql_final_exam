<?php

require_once "cat.php";

$cat1 = new Cat('Blackie', 2, 'black', 'male', 'persian');
$cat2 = new Cat('Louise', 5, 'white', 'female', 'common');
$cat3 = new Cat('Thomas', 1, 'grey', 'male', 'russian blue');
//var_dump($cat1);
$cats = array($cat1, $cat2, $cat3); ?>


<table border='1'>
  <thead>
    <tr>
      <th>Name</th>
      <th>Age</th>
      <th>Color</th>
      <th>Sex</th>
      <th>Breed</th>
    </tr>
  </thead>
  <?php foreach ($cats as $cat) {
    $getInfo = $cat->getInfos(); ?>
    <tr>
      <td><?php echo $getInfo['_name'] ?></td>
      <td><?php echo $getInfo['_age'] ?></td>
      <td><?php echo $getInfo['_color'] ?></td>
      <td><?php echo $getInfo['_sex'] ?></td>
      <td><?php echo $getInfo['_breed'] ?></td>
    </tr>
  <?php } ?>
</table>