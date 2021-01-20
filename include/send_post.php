<?php 
session_start();
$text = $_POST['text'];

$link = mysqli_connect('localhost', 'root', 'root', 'my_data');
$chek = mysqli_query($link, "SELECT * FROM info WHERE text='$text'");
$chek_rows = mysqli_num_rows($chek);


if ($chek_rows > 0 ||  $chek_rows == False) {
    $_SESSION['message'] = 'You should check in on some of those fields below.';
    header('Location: ../task_10.php');
} else {
    $query = mysqli_query($link, "INSERT INTO `info` (`id`, `text`) VALUES (NULL, '$text')");
    $result = mysqli_query($link, $query);
    mysqli_close($link);
}


?>