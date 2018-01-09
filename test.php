<!DOCTYPE html>
<html>
<body>

<?php

require_once("ssbDBconnect.php");

echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>first_name</th>";
echo "<th>last_name</th>";
echo "<th>username</th>";
echo "<th>password</th>";
echo "</tr>";


	  $statement = $db->prepare("SELECT id, first_name, last_name, username, password FROM player");
      $statement->execute();

      while($row = $statement->fetch(PDO::FETCH_ASSOC))
      {

        $id      = $row['id'];
        $firstN  = $row['first_name'];
        $lastN   = $row['last_name'];
        $userN   = $row['username'];
        $pass    = $row['password'];

        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $firstN . "</td>";
        echo "<td>" . $lastN . "</td>";
        echo "<td>" . $userN . "</td>";
        echo "<td>" . $pass . "</td>";
        echo "</tr>";

    }
    echo "</table>";
        

?>
</body>
</html>