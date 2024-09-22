<?php

include('db.php');

if (isset($_POST['user_name']) && isset($_POST['user_id']) && isset($_POST['user_pw'])) {
    // 보안 강화
    $user_name = mysqli_real_escape_string($db, $_POST['user_name']);
    $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
    $user_pw = mysqli_real_escape_string($db, $_POST['user_pw']);

    // 에러 체크
    if (empty($user_name)) {
        echo "<script>alert('이름을 입력해주세요.'); history.back();</script>";
        exit();
    } else if (empty($user_id)) {
        echo "<script>alert('아이디를 입력해주세요.'); history.back();</script>";
        exit();
    } else if (empty($user_pw)) {
        echo "<script>alert('비밀번호를 입력해주세요.'); history.back();</script>";
        exit();
    } else {
        //비밀번호 암호화
        $hash = password_hash($user_pw, PASSWORD_DEFAULT);

        //아이디, 이름 동시에 중복체크
        $sql_name = "SELECT * FROM member WHERE mb_name='$user_name' AND mb_id='$user_id'";
        $order = mysqli_query($db, $sql_name);

        if (!$order) {
            die("Query failed: " . mysqli_error($db));
        }

        if (mysqli_num_rows($order) > 0) {
            echo "<script>alert('아이디 또는 이름이 이미 있어요'); history.back();</script>";
            exit();
        } else {
            $sql_save = "INSERT INTO member (mb_name, mb_id, mb_pw) VALUES ('$user_name', '$user_id', '$hash')";
            $result = mysqli_query($db, $sql_save);

            if (!$result) {
                die("Query failed: " . mysqli_error($db));
            } else {
                echo "<script>alert('회원가입이 완료되었습니다.'); location.href='member_login.php';</script>";
            }
        }
    }
}

?>
