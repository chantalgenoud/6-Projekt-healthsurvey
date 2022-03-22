<div>
    
    <?php
session_start();

$pageID = $_POST["pageID"]; //da hat es einen Fehler undefinied array key?


$_SESSION[$pageID] = $_POST;

echo '<pre>';
print_r($_SESSION);
echo '<pre>';
?>

</div>

