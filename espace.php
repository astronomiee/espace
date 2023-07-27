<table border="2">
    <tr>
    <td>id</td>
    <td>name</td>
    <td>age</td>
    <td>address</td>
    <td>edit</td> <td>delete</td>
    </tr>
<?php
include="ayoub.php";
$sh_mysqli_qury($con"SELECT FROM info")
while($row=mysqli_fetch_array($sh)){
    ?>
    <tr>
    <td>?php echo $row['id'] ?></td>
    <td>?php echo $row['name'] ?></td>
    <td>?php echo $row['age'] ?></td>
    <td>?php echo $row['address'] ?></td>
    <td><a href="espace2.php? id=<?php echo $row['id']; ?>">ADAM</a></td>
    <td><a href="ghazioui.php? id=<?php echo $row['id']; ?>">ghazioui</a></td>
    </tr>
    <?php
}
?>