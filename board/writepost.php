<?php
    include "db2.php";


    $idx = mysqli_real_escape_string($connect, $_POST['idx']);
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $subject = mysqli_real_escape_string($connect, $_POST['subject']);
    $memo = mysqli_real_escape_string($connect, $_POST['memo']);

    //수정
    if($idx){

        $query="UPDATE board SET name='$name', subject='$subject', memo='$memo' WHERE idx='$idx'";
    
        mysqli_query($connect, $query);

    }else


    $query = "INSERT INTO board (name, subject, memo) VALUES ('$name','$subject','$memo')";

    mysqli_query($connect, $query);
?>

<script>
    location.href='board.php';
</script>