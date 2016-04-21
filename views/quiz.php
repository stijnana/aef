<div class="container-fluid no-padding">
<div class="wrap3">
    <h1 class=" hwrap3">Welcome <?php echo $user['name']; ?></h1>
</div>

</div>
<div class="container">
<form method="post">
    <?php
    $data = $mysqli->query("SELECT * FROM questions , Answers , acount_data");

    ?>

    <p>andwoord 1 <input type="radio" name="answer" value="1"></p>
    <p>andwoord 2 <input type="radio" name="answer" value="2"></p>
    <p>andwoord 3 <input type="radio" name="answer" value="3"></p>
    <p>andwoord 4 <input type="radio" name="answer" value="4"></p>
    <p><input type="submit"  name="sendcontact"/></p>

</form>
<?php
if(isset($_POST['sendcontact']))
{
    $test = $_POST['answer'];
    echo $test;
    $query  = "INSERT INTO questions (facebookId, facebookName) VALUES ('$id', '$name')";
    $mysqli->query($query);
}
?>

</form>
</div>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

