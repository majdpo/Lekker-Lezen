<?php
include "database/connectdb.php";
$id = $_GET['id'];
$sql = "SELECT * FROM book WHERE id=$id";
$sth = $db->prepare($sql);
$sth->execute();
?>
<html>
<head>
    <title>Details</title>
</head>
<link rel="stylesheet" href="style/bootstrap.css">
<link rel="stylesheet" href="style/MyStyle.css">
<body style="background-image: url('img/ksenia-makagonova-LuK-MuZ-yf0-unsplash.jpg'); background-size: cover">
<?php include "style/navbar.html";?>
<?php while ($row = $sth->fetch()) { $imageNewName = $row['imageNewName'];?>
<div id="DetailsBook">
    <?php echo "<span style='color: orangered'>Title: </span> " . $row["title"];?>
    <Br>
    <?php echo "<span style='color: orangered'>Author: </span> " .  $row["author"];?>
    <Br>
    <?php echo "<span style='color: orangered'>Publisher: </span>: " . $row["publisher"];?>
    <Br>
    <?php echo "<span style='color: orangered'>Tags: </span>: " . $row["tags"];?>
    <br>
    <?php echo "<span style='color: orangered'>Language: </span> " . $row["language"];?>
    <Br>
    <?php echo "<span style='color: orangered'>Price: </span>" . "	&euro;" . $row["price"];?>
    <br>
    <?php echo "<span style='color: orangered'>Rating: </span>" . $row["rating"] . "/5";?>
    <Br>
    <?php echo "<span style='color: orangered'>Release Date: </span>" . $row["releasedate"];?>
    <br>
    <br>
    <?php $description = $row['description']?>
    <?php echo "<span style='color: orangered'>Overview</span> <Br> <p style='font-size: 17px'>$description</p>";?>
</div>
<div style="margin-left: 780px; margin-top: 30px; margin-right: 350px; background: rgba(255,255,255,0.2); backdrop-filter: blur(2px)"><img src="img/<?php echo $imageNewName;?>" height="620px" width="421px"></div>
<?php };?>

</body>
</html>
