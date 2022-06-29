<?php
include "database/connectdb.php";
$sql = "SELECT * FROM book";
$sth = $db->prepare($sql);
$sth->execute();

include "style/navbar.html";
?>
<link rel="stylesheet" href="style/MyStyle.css">
<link rel="stylesheet" href="style/bootstrap.css">
<style>
    .Font{
        font-family: Arial;
    } td{
          font-family: Arial;
      }
    body{
        background-image: url("img/WPUN7Q.png");
        background-size: contain;
    }
    a:hover {
        text-decoration: none;
        color: orange;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
    }
</style>

<!--Table Part-->
<table class="table" style="color: white">
    <thead>
    <tr class="Font">
        <th>Cover Foto</th>
        <th>Title</th>
        <th>Auteur</th>
        <th>Prijs</th>
        <th>Verhaal</th>
        <th>Releasedate</th>
        <th>Tags</th>
        <th>Publisher</th>
        <th>Language</th>
        <th>Rating</th>




    </tr>
    </thead>
    <tbody>
    <?php while($row = $sth->fetch()) { ?>
    <tr>

        <td><img src="img/<?php echo $row["imageNewName"];?>" height="250px"></td>
        <td><a href="BookDetails.php?id=<?php echo $row['id'];?>"><?php echo $row["title"]; ?></a></td>
        <td><?php echo $row["author"]; ?></td>
        <td>&euro;<?php echo $row["price"]; ?></td>
        <td><?php echo $row["description"]; ?></td>
        <td><?php echo $row["releasedate"]; ?></td>
        <td><?php echo $row["tags"]; ?></td>
        <td><?php echo $row["publisher"]; ?></td>
        <td><?php echo $row["language"]; ?></td>
        <td><?php echo $row["rating"]; ?></td>

        </form></td>
        <?php } ?>
    </tr>
    </tbody>
</table>

</html>


