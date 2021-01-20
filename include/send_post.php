<?php 
session_start();
$text = $_POST['text'];

$link = mysqli_connect('localhost', 'root', 'root', 'my_data');
$chek = mysqli_query($link, "SELECT * FROM info WHERE text='$text'");
$chek_rows = mysqli_num_rows($chek);


if ($chek_rows > 0) {
    $_SESSION['message'] = 'You should check in on some of those fields below.';
    header('Location: ../task_10.php');
} else {
    $query = mysqli_query($link, "INSERT INTO `info` (`id`, `text`) VALUES (NULL, '$text')");
    $result = mysqli_query($link, $query);
    header('Location: ../task_9.php');
    mysqli_close($link);
    unset($_SESSION['message']);
}


?>