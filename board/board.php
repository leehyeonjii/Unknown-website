<?php
include "db2.php";
?>

<table width=800 border="1">
    <tr>
        <th width=100>No</th>
        <th>제목</th>
        <th width=150>작성자</th>
    </tr>

<?php 
    $query="SELECT * FROM board ORDER BY idx DESC";
    $result = mysqli_query($connect, $query);

    while($data = mysqli_fetch_array($result)){
?>

    <tr>
        <td> <?=$data['idx']?> </td>
        <td> <a href="view.php?idx=<?=$data['idx']?>"><?=$data['subject']?></a></td>
        <td> <?=$data['name']?> </td>
    </tr>

<?php } ?>

</table>

<a href="write.php">글쓰기</a>