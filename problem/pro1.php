<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $solve = $_POST['solve'];
    
    
    if (preg_match("/<img src=\"\/admin\/notice_flag\?userid\=admin\">/", $solve)) {
        echo "<script>alert('정답입니다.'); history.back();</script>";
        exit();
    } else {
        echo "<script>alert('정답이 아닙니다.'); history.back();</script>";
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문제1</title>
</head>
<body>
    <form method="post" action="">
        <tr>
        <form method="post" action="">
            <th>http://127.0.0.1:80000/vuln?param=</th>
            <td><input type="text" name="solve"></td>
            <button>입력</button>
        </tr>
    </form>
</body>
</html>