<div class="container-fluid no-padding">
<div class="wrap3">
    <h1 class=" hwrap3">Welcome <?php echo $user['name']; ?></h1>
</div>

</div>
<div class="container">

    <?php

    $id = $_REQUEST['id'];
    $item = $mysqli->prepare("SELECT * FROM questions WHERE id = ?");
    $item->bind_param('i', $id);
    $item->execute();
    $result = $item->get_result();
    if($pageid < 11) {
    $items = $result->fetch_all();
    ?>
    <form method="post">
        <h1><?php echo $items[0][1] ?></h1>
        <?php
        var_dump($items);
        if (strlen($items[0][2]) > 0) {
            echo "<p>", " <input type='radio' name='answer' value='1'>"," " . $items[0][2] . "</p>";
        }
        if (strlen($items[0][3]) > 0) {
            echo "<p>", " <input type='radio' name='answer' value='1'>" . $items[0][3] . "</p>";
        }
        if (strlen($items[0][4]) > 0) {
            echo "<p>", " <input type='radio' name='answer' value='1'>" . $items[0][4] . "</p>";
        }
        if (strlen($items[0][5]) > 0) {
        echo "<p>", " <input type='radio' name='answer' value='1'>" . $items[0][5] . "</p>";
        }

?>
    <p><input type="submit"  name="sendcontact"/></p>
</form>
    <?php
        }else {
        die("This question doesn't exists");
    }
    ?>


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

