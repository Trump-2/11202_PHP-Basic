<!DOCTYPE html>
<html>

<head>
  <title>9x9 乘法表</title>
  <style>
  table {
    border-collapse: collapse;
    margin: 20px;
  }

  th,
  td {
    border: 1px solid black;
    padding: 8px;
    text-align: center;
  }
  </style>
</head>

<body>
  <!-- <h2>9x9 乘法表</h2>
  <table>
    <tr>
      <th></th>
      <?php for ($i = 1; $i <= 9; $i++) : ?>
        <th><?php echo $i; ?></th>
      <?php endfor; ?>
    </tr>
    <?php for ($row = 1; $row <= 9; $row++) : ?>
      <tr>
        <th><?php echo $row; ?></th>
        <?php for ($col = 1; $col <= 9; $col++) : ?>
          <td><?php echo $row * $col; ?></td>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </table> -->

  <h2>9 x 9 乘法表</h2>

  <table>
    <tr>
      <th></th>

      <?php
      for($i = 1;$i <= 9; $i++){
        echo "<th>$i</th>";
      }
      ?>
    </tr>
    <?php
    for ($i = 1; $i <= 9; $i++) {
      echo "<tr>";
      echo "<th>$i</th>";

      for ($j = 1; $j <= 9; $j++) {
        echo "<td>" . $i * $j . "</td>";
      }

      echo "</tr>";
    }
    ?>
  </table>

</body>

</html>