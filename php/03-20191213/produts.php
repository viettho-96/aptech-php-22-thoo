<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    table{
      border-collapse: collapse
    }
    th,td{
      border: 1px solid black;
    }
  </style>
</head>
<body>
<?php
 $products = [
     "apple" => [
         "Name" => "iphone X",
         "Price" => 999,
     ],
     "samsung" => [
         "Name" => "Galaxy s10",
         "Price" => 888,
     ]
     ];
     $keys = array_keys($products);
?>
  <table>
     <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Price</th>
      </tr>
     </thead>
     <tbody>
      <?php
        $tong = 0;
        for ($i = 0; $i < count($keys); $i++) {
      ?>
          <tr>
            <td>
              <?php echo $i + 1; ?>
            </td>
            <td>
              <?php echo $products[$keys[$i]]["Name"]; ?>
            </td>
            <td>
              <?php echo $products[$keys[$i]]["Price"]; ?>
            </td>
          </tr>
          <?php $tong = $tong + $products[$keys[$i]]["Price"];
          } 
          ?>
      <tr>
        <th colspan="2">Tổng</th>
        <td>
          <?php echo $tong; ?>
        </td>
      </tr>
     </tbody>
  </table>
</body>
</html>