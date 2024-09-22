<?php
    include "db2.php";

    $idx = mysqli_real_escape_string($connect, $_GET['idx']);
    $query = "SELECT * FROM board WHERE idx='$idx'";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($result); 

?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
</head>
<body>
    <form action="writepost.php" method="post">
        <table width=800 border="1" cellpadding=10>
            <tr>
                <th>이름</th>
                <td> <?=$data['name']?> </td>
            </tr>
            <tr>
                <th>제목</th>
                <td> <?=$data['subject']?> </td>
            </tr>
            <tr>
                <th>내용</th>
                <td> <?=nl2br($data['memo'])?> </td>
            </tr>

            <tr>
                <td colspan="2">
                    <div style="float:right;">
                        <a href="del.php?idx=<?=$idx?>">삭제</a>
                        <a href="write.php?idx=<?=$idx?>">수정</a>
                        <a href="board.php">목록</a>
                    <div>
                </td>
            </tr>
        </table>

    </form>
</body>
</html>