<?php
$mysqli = new Mysqli("limitatihvadmin.mysql.db", "limitatihvadmin", "Kerzance2", "limitatihvadmin");
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    if ( !empty($_POST['submitType']) && ( $_POST['submitType'] == 'je soutiens la campagne' ) ) {
        $sql =$mysqli->query("UPDATE soutient SET `jaime` = `jaime`+1 where `ID` = 1");
    }
    header('location:index.php');
}
$show = $mysqli->query("SELECT jaime FROM soutient");
$lol = $show->fetch_assoc();
?>

<?php echo "<div><h1> $lol[jaime] </h1></div>"; ?>
<br>
<p>personnes nous soutiennent déjà</p>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <input type = "submit" name="submitType" value = "je soutiens la campagne" id="like"/>
</form>
