<?
    include "db2.php";


    $idx = mysqli_real_escape_string($connect, $_GET['idx']);

    $query = "DELETE FROM board WHERE idx='$idx'";
    mysqli_query($connect, $query);
?>

<script>
    location.href='board.php';
</script>