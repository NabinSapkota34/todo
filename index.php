<?php
include('./db_config.php');

// print_r($conn);

$sql = "select * from todo_item";
$result = $conn->query($sql);

echo "<pre>";
print_r($result);
echo "</pre>";

// $row = $result->fetch_assoc();
// print_r($row);

// while($row = $result->fetch_assoc()){
//   print_r($row);
// }


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP Session</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <div class="container p-3">
    <h3 class="text-center">TODO Application</h3>
    <form action="savetodo.php" method="post">
      <input type="text" class="form-control" name="todo" id="" placeholder="Enter your TODO list">
      <button type="submit" class="btn btn-success mt-2 btn-center">Add Todo</button>
    </form>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($row = $result->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $row['id'] ?></td>
          <td><?php echo $row['title'] ?></td>
            <?php 
                    echo "<td><a class='btn btn-danger' href='./delete.php?id=".$row['id']."'>Delete</a>
                    <a class='btn btn-danger' href='./update.php?id=".$row['id']."'>Update</a>
                    
                    </td>"
                  ?>

        </tr>
      <?php

      }
      ?>

    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body></html>
<!-- <a href="update.php?updateid='.$id'" class="btn btn-danger"> Update </a> -->