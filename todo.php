<?php
include'connection.php';
if(isset($_POST['submit'])){
$id = $_POST['id'];
$todo = $_POST['todo'];
$inset ="INSERT INTO `todo`(`id`, `todo`) VALUES ('id','todo')";
header('location: "todo.php"');
$quarry = mysqli_query($conn,$inset);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<form action='todo.php' class="header" method='post'>
  <h2>My To Do List</h2>
  <input type="text" id="myInput" placeholder="Title..." name="todo">
  <button type="submit" name="submit">save</button>
<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>TASK</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            
            <td class="task"><a href="#"><i class="bi bi-trash"></i></a></td>
            <td class="task"><a href="#"><i class="bi bi-file-earmark-arrow-up"></i></a></td>
        </tr>
    </tbody>
</table>
</form>
</body>
</html>