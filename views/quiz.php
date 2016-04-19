<form method="post">
    <p>andwoord 1 <input type="radio" name="answer" value="1"></p>
    <p>andwoord 2 <input type="radio" name="answer" value="2"></p>
    <p>andwoord 3 <input type="radio" name="answer" value="3"></p>
    <p>andwoord 4 <input type="radio" name="answer" value="4"></p>
    <p><input type="submit"  name="sendcontact"/></p>

</form>
</pre>
<hr>

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
<?php
//$query  = "INSERT INTO acount_data (facebookId, facebookName) VALUES ('$id', '$name')";
//$mysqli->query($query);
