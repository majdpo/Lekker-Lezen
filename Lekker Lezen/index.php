<?php
include "database/connectdb.php";
$sql = "SELECT * FROM book ORDER BY rating DESC; ";
$sth = $db->prepare($sql);
$sth->execute();
?>
<html>
<head>
    <title>Boek handel</title>
</head>
<link rel="stylesheet" href="style/MyStyle.css">
<link rel="stylesheet" href="style/bootstrap.css">
<link rel="shortcut icon" href="img/Cartoon-book-on-reansparent-background-PNG.png">
<body id="body-index">
<?php include "style/navbar.html";?>
<br>
<img src="img/Graduation-student-with-books-design-clipart-PNG.png" height="300px" width="300px" style="float: right; margin-right: 100px; margin-top: 50px">
    <div id="Top10BookList">
        <h3 id="ToppingTop10">Top 10 Boeken</h3>
            <div id="top-10-scroll">
    <?php $i = 1;

        while ($row = $sth->fetch()) {
            $title = $row['title'];
            $imageNewName = $row['imageNewName'];
            $description = $row['description'];
            $id = $row['id'];
if ($i < 11) {
    echo " <p id='Top10Numbering'>$i</p><img src='img/$imageNewName' style='margin-left: 115px' width='50px'> <Br> <p style='text-align: center; color: black'>$title</p><hr>";
}$i++;}?>
            </div>
    </div>
    <div id="image-in-mid"><a href="Ontdek.php"><img src="img/middleimage.jpg" width="100%"></a></div>
    <Br>
    <div id="Top-selling">
        <h2>Ｍｅｅｓｔｅ ｖｅｒｋｏｃｈｔ</h2>
        <div class="card-group">
    <?php include "MeesteVerkocht.php";?>
        </div>
    </div>
</body>
</html>
