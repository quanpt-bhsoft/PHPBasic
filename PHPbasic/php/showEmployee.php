<?php require 'connect.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="../css/show.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
  </head>
  <body >
    <div class = "c">
        <H1 class = "a">Employee</H1>
        <div>
        <div class = "haaa"><button><a href="insert.php?id=insert">ADD</a></button></div>
            <table class = "b">
            <thead>
              <tr>
                  <th>ID</th>
                  <th>Name</th> 
                  <th>Brith</th>
                  <th>Email</th>
                  <th>Position</th>
                  <th>Address</th>
                  <th>Gender</th>
                  <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT * from employee";
            $result = mysqli_query($conn,$sql);
             if(mysqli_num_rows($result) > 0){
              while ($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                  <td><?php echo $row['ID'] ?></td>
                  <td><?php echo $row['Name'] ?></td>
                  <td><?php echo $row['Brith'] ?></td>
                  <td><?php echo $row['Email'] ?></td>
                  <td><?php echo $row['Position'] ?></td>
                  <td><?php echo $row['Address'] ?></td>
                  <td><?php echo $row['Gender'] ?></td>
                  <td><div class = "d"><a href="update.php?id=<?php echo $row['ID'] ?>"><i class="fas fa-wrench"></i></a> <a href="delete.php?id=<?php echo $row['ID'];?>" onclick = "return confirm('Are you sure want to delete?');"><i class="fas fa-trash-alt"></i></a> </div> </td>
                </tr>
                <?php }
            }
                ?>
            </tbody>

            </table>
        </div>
    </div>
  </body>
</html>