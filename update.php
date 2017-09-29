<!DOCTYPE html>

<?php include 'db.php';

$id = (int)$_GET['id'];

$sql = "select * from tasks where id='$id'";

$rows = $db->query($sql); 

$row= $rows->fetch_assoc();

if(isset($_POST['send'])){

$task = htmlspecialchars($_POST['task']);
$sql ="update tasks set name='$task' where id='$id'";

$db->query($sql);

header('location: index.php');
}

?>

<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>CRUD app with PHP</title>
</head>

<body>

<div class="container">
	<div class="row" style="margin-top: 70px;">
		<center><h1>Update</h1></center>
		
		<div class="col-md-10 col-md-offset-1">
			
				
				
        <form method="post">
        	<div class="form-group">
        		<label>Task Name</label>
        		<input type="text" required name="task" value="<?php echo $row['name'];?>" class="form-control">
        	</div>
        	<input type="submit" name="send" value="Update" class="btn btn-success">
          <a href="index.php" class="btn btn-warning">Cancel</a>
        </form>
      
      
		</div>
	</div>
	
</div>

</body>

</html>