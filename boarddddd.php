<?php
    include('db2.php');

    $sql = "SELECT * FROM board ORDER BY idx DESC";
    $result = mysqli_query($db2, $sql);

    $stmt= $conn->prepare($sql);
    $stmt ->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $rs = $stmt->fetchALL();
?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>board</title>
</head>
<body>
    <div class="container mt-3">
        <h1 class="h1">게시판</h1>
    </div>
    <table class="table table-bordered table-hover">
        <colgroup>
            <col width="10%" />
            <col width="60%" />
            <col width="30%" />
        </colgroup>   
        <tr>
            <th> No </th>
            <th> 제목 </th>
            <th> 작성자 </th>
        </tr>
        <?php
        foreach($rs AS $row){
        ?>
        <tr>
            <td> <?=$row['idx']; ?></td>
            <td> <?=$row['subject']; ?> </td>
            <td> <?=$row['name']; ?> </td>
        </tr>
        <?php } ?>
    </table>

    <form action="write.php" method="post">
        <button>글쓰기</button>
    </form>
</body>
</html>
    
    <script>
        $sql = "SELECT * FROM board ORDER BY idx DESC";
        $result = mysqli_query($db, $sql);

        while($data = mysqli_fetch_array($result)){
        <tr>
            <td> <?=$data['idx']?> </td>
            <td> <?=$data['name']?> </td>
            <td> <?=$data['subject']?> </td>
        </tr>
        }
    </script>


