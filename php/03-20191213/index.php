<?php
 $products = [
     "apple" => [
         "name" => "iphone X",
         "price" => 999,
     ],
     "samsung" => [
         "name" => "Galaxy s10",
         "price" => 888,
     ]
     ];
     $keys = array_keys($products);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <table>
        <tr>
            <th>#</th>
            <th>name</th>
            <th>price</th>
        </tr>
    </table>
    <tbody>
    <?php
    for ($i = 0; $i < count($keys); $i++) {
      ?>
    <tr>
      <td>
        <?php echo $i + 1; ?>
      </td>
      <td>
        <?php echo $products[$keys[$i]]["name"]; ?>
      </td>
      <td>
        <?php echo $products[$keys[$i]]["price"]; ?>
      </td>
    </tr>
    <?php
    }
    ?>
    </tbody>
</body>
</html>