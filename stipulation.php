<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNKNOWN</title>
    <link rel="stylesheet" href="stipulation.css">
    <script src="js\member.js"></script>
</head>
<body>
    <div class="container">
        <header>
            <span class="fs-4">UNKNOWN</span>
        </header>
        <main>
            <div>
                <button class="login_button">로그인</button>
                <button class="join_button">회원가입</button>
            </div>

            <form method="post" name="stipulation_form" action="member_input.php" style="display:non">
                <input type="hidden" name="chk" value="0">
            </form>
        </main>
    </div>

    <footer class="footer mt-5 py-3 bg-primary">
        <div class="container">
            <div class="d-flex flex-column">
                <span class="text-bg-primary"></span>
            </div>
        </div>
</body>
</html>