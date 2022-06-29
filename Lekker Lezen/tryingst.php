<?php
include "database/connectdb.php";
$sql = "SELECT * FROM book";
$sth = $db->prepare($sql);
$sth->execute();
$z = 0;

    while ($row = $sth->fetch()) {$z++;
        if ($z < 4){
            ?>
    <div class="card">
        <img class="card-img-top" src="img/<?php echo $row['imageNewName'];?>" height="380px" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Top <?php echo $z;?></h5>
            <h6 class="card-title"><a href="BookDetails.php?id=<?php echo $row['id'];?>"><?php echo $row['title']; ?></a></h6>
            <p class="card-text"><?php echo $row['description'];?></p>
        </div>
    </div>
<?php }}?>