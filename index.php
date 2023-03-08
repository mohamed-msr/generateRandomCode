<?php 

require "vendor/autoload.php";

//$id = new \Ramsey\Uuid\UuidFactory();

//echo $id->uuid4();

//$s = new App\controllers\user_controller();

echo "<br>";


if(isset($_GET['ms']) && file_exists("app/controllers/" . $_GET['ms'] . ".php")){
    $sr = "App\controllers\\" . $_GET['ms'];
    $i = new $sr();

}
echo "<br>";

echo sayhello();
?>

<form method="get">
    <input type="text" name="ms">
    <input type="submit">
</form>