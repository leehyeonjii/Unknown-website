<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, 그리고 Bootstrap 기여자들">
    <meta name="generator" content="Hugo 0.122.0">
    <title>회원가입</title>
    
    <link rel="canonical" href="https://getbootstrap.kr/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <link href="member_login.css" rel="stylesheet">

</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">

    <main class="form-signin w-100 m-auto">
            <form action="join_server.php" method="post">
                <h1 class="h3 mb-3 fw-normal">회원가입</h1>
                
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="user_name" name="user_name">
                    <label for="user_name">이름</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="user_id" name="user_id">
                    <label for="user_id">아이디</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="user_pw" name="user_pw">
                    <label for="user_pw">비밀번호</label>
                </div>

                <button class="btn btn-primary w-100 py-2" type="submit">가입</button>
                <a href="member_login.php" class="btn d-block text-center mt-2 w-100 py-1" type="submit">이미 회원이신가요?</a>
            </form>
    </main>

    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
