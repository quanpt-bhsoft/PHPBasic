<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php require 'connect.php';
    if($_GET['id'] == 'id' ){
      $sqlii = "INSERT INTO `employee` value (null,'".$_POST['Name']."' ,'".$_POST['Brith']."', '".$_POST['Email']."','".$_POST['Position']."','".$_POST['Address']."','".$_POST['gender']."')";
      $resultii = mysqli_query($conn,$sqlii);
      if(!$resultii){
        die('loi'.mysqli_error($resultii));
      }else{
      header("location:showEmployee.php");
    }}else{
    ?>
  <div class="container">
  <h2>Insert</h2>
  <form class="form-horizontal" action="insert.php?id=id" method= "post" autocomplete = "off">
    <div class="form-group">
       <label class="control-label col-sm-2" for="email">Name :</label>
       <div class="col-sm-10">
          <input type="text" class="form-control" id="email" name="Name">
       </div>
    </div>
    <div class="form-group">
       <label class="control-label col-sm-2" for="email">Brith :</label>
       <div class="col-sm-10">
          <input type="date" class="form-control" id="email"  name="Brith">
       </div>
    </div>
    <div class="form-group">
       <label class="control-label col-sm-2" for="email">Email :</label>
       <div class="col-sm-10">
          <input type="text" class="form-control" id="email"name="Email">
       </div>
    </div>
    <div class="form-group">
       <label class="control-label col-sm-2" for="email">Position :</label>
       <div class="col-sm-10">
          <input type="text" class="form-control" id="email" name="Position">
       </div>
    </div>
    <div class="form-group">
       <label class="control-label col-sm-2" for="email">Address :</label>
       <div class="col-sm-10">
          <input type="text" class="form-control" id="email" name="Address">
       </div>
    </div>
    <div class="form-group">
        
       <label class="control-label col-sm-2" for="email">Gender :</label>
       <div class="col-sm-10">
          <select name="gender" size="1">
            <option value="">--Choose--</option>
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
          </select>
       </div>
    </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10" >
        <button type="submit" class="btn btn-default" style = "background : #007bff">Submit</button>
      </div>
    </div>
  </form>
  </div>
  <?php } ?>
</body>
</html>