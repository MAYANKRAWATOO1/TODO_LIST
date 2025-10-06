<?php
include "connection.php";
if(isset($_POST["submit"])){
    $year = $_POST['year'];
    $discription = $_POST['discr'];
    $time = "INSERT INTO `timeline`( `year`, `discr`) VALUES ('[$year]','[$discription]')";
   $result = mysqli_query($conn,$time);
  }

  $querry = "SELECT * FROM `timeline`";
  $data = mysqli_query($conn,$querry);
  $data1 = mysqli_fetch_all($data,MYSQLI_ASSOC);
//   print_r($data1);
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hungry Point Timeline</title>
    <style>
  body {
  background-color: lightblue;
}

.timeline {
  white-space: nowrap;
  overflow-x: hidden;
display: flex;
flex-direction: row;
}

.timeline ol {
  font-size: 0;
  width: 100vw;
  padding: 250px 0;
  transition: all 1s;
}

.timeline ol li {
  position: relative;
  display: inline-block;
  list-style-type: none;
  width: 160px;
  height: 3px;
  background: #fff;
}

.timeline ol li:last-child {
  width: 280px;
}

.timeline ol li:not(:first-child) {
  margin-left: 14px;
}

.timeline ol li:not(:last-child)::after {
  content: '';
  position: absolute;
  top: 50%;
  left: calc(100% + 1px);
  bottom: 0;
  width: 12px;
  height: 12px;
  transform: translateY(-50%);
  border-radius: 50%;
  background: #F45B69;
}

.timeline ol li div {
  position: absolute;
  left: calc(100% + 7px);
  width: 280px;
  padding: 15px;
  font-size: 1rem;
  white-space: normal;
  color: black;
  background: white;
}

.timeline ol li div::before {
  content: '';
  position: absolute;
  top: 100%;
  left: 0;
  width: 0;
  height: 0;
  border-style: solid;
}

.timeline ol li:nth-child(odd) div {
  top: -16px;
  transform: translateY(-100%);
}

.timeline ol li:nth-child(odd) div::before {
  top: 100%;
  border-width: 8px 8px 0 0;
  border-color: white transparent transparent transparent;
}

.timeline ol li:nth-child(even) div {
  top: calc(100% + 16px);
}

.timeline ol li:nth-child(even) div::before {
  top: -8px;
  border-width: 8px 0 0 8px;
  border-color: transparent transparent transparent white;
}
    </style>
</head>
<body>
    <h1 style="color: #fff;">Hungry Point Timeline</h1>
    <form action="#" method="post">
        <input type="text" placeholder="year" name="year">
        <input type="text" placeholder="discription" name="discr">
        <input type="submit" name="submit">

    </form>
    
    <section class="timeline">  
    <?php
        // $a=0;  
        // foreach($data1 as $a){
        //  $a++;
        //  if ($a % 2 ==0){
        
        ?>
  <ol>
    <li>
      <div>
       
        <time><?php echo $a['year']?></time>
        <p><?php echo $a['discr']?></p>
      </div>
    </li>
    <?php 
    // }
    //  else{?>

    <li>
      <div>
        <time><?php echo $a['year']?></time> 
        <p><?php echo $a['discr']?></p>
      </div>
    </li>
 </ol>
 <?php 

// } 
?>

 <?php 
//  }
 
 ?>
</section> 
</body>
</html>