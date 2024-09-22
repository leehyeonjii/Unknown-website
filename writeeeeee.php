<?php
    include "db2.php";

    $name = (isset($_POST['name']) && $_POST['name'] != '') ? $_POST['name']: '';
    $subject = (isset($_POST['subject']) && $_POST['subject'] != '') ? $_POST['subject']: '';
    $content = (isset($_POST['summernote']) && $_POST['summernote'] != '') ? $_POST['summernote']: '';

    $sql = "insert into board(name,subject,summernote)values('$name','$subject','$content')";
    
    mysqli_query($db2, $sql);

    $sql = "INSERT INTO mboard(name,subject,summernote)VALUES(:name,:subject,:summernote, NOW())";

    $stmt = $con ->prepare($sql);
    $stmt->binParam(':name', $name);
    $stmt->binParam(':subject', $subject);
    $stmt->binParam(':summernotet', $content);

    $arr = ['result' => 'success'];

    $j=json_encode($arr);
    die($j);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>write</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>
<body>

    <div class="container">
        
        <div class="container mt-4 mb-3">
            <h1>게시판</h1>
        </div>
        
        <div class="mb-2 d-flex gap-2">
            <input type="text" name="name" placeholder="이름" class="form-control w-25" id="name">
            <input type="text" name="subject" placeholder="제목" class="form-control w-70" id="subject">
        </div>

        <div id="summernote"></div>
        
        <form action="board.php" method="post">
            <div class="mt-2 d-flex gap-2 justify-content-end">
                <button class="btn btn-primary" id="btn_submit">확인</button>
            </div>
        </form>
    
    </div>

    <script>
        const btn_submit = document.querySelector("#btn_submit");
        btn_submit.addEventListener("click",()=>{
            const btn_name = document.querySelector("#name")
            const btn_subject = document.querySelector("#subject")
            if(btn_name.value == ''){
                alert('이름을 입력하세요.')
                btn_name.focus()
                return false
            }
            if(btn_subject.value == ''){
                alert('제목을 입력하세요.')
                btn_subject.focus()
                return false
            }

            var markupStr = $('#summernote').summernote('code');
            console.log(markupStr)

            if(markupStr == '<p><br></p>'){
                alert('내용을 입력하세요.')
            }
            
        })
    </script>

    <script>
      $('#summernote').summernote({
        placeholder: '내용을 입력해 주세요',
        tabsize: 2,
        height: 300,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>
</body>
</html>