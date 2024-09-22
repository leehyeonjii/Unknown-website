<?php

include('db.php');

if (isset($_POST['user_id']) && isset($_POST['user_pw']))
{
    // 보안 강화
    $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
    $user_pw = mysqli_real_escape_string($db, $_POST['user_pw']);

    // 에러 체크
    if(empty($user_id)){
        echo "<script>alert('아이디를 입력해주세요.'); history.back();</script>";
        exit();
    } 
    else if(empty($user_pw)){
        echo "<script>alert('비밀번호를 입력해주세요.'); history.back();</script>";
        exit();
    } 
    else {
        $sql = "SELECT * FROM member WHERE mb_id = '$user_id'";
        $result = mysqli_query($db, $sql);

        if(mysqli_num_rows($result) === 1)
        {
            $row = mysqli_fetch_assoc($result);
            $hash = $row['mb_pw'];

            if(password_verify($user_pw, $hash))
            {
                header("location: home.php");
                exit();
            }
        }
        else{
            echo "<script>alert('아이디를 다시 입력해주세요.'); history.back();</script>";
        }
    }
}

?>
