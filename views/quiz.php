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
        <br>
    <form method="post">
        <h1><?php echo $items[0][0]?> : <?php echo $items[0][1] ?></h1>
        <?php
        var_dump($items);
        for($i = 2; $i <= 5; $i++){
            if (strlen($items[0][$i]) > 0) {
                echo "<div class='input-group'> <span class=\"input-group-addon\"> <input type='radio' name='answer' value='answer".($i - 1)."' aria-label=''></span> <p class='form-control'>" . $items[0][$i] . "</p></div>";
                echo "<br>";
            }
        }
?>
    <p><input class="aefcolor fbbtn btn btn-primary btn-lg" type="submit" name="sendcontact"/></p>
</form>
    <?php
        }else {
        die("<h1>This question doesn't exists</h1>");
    }
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

