<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learn Vocabulary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include ("navbar.php"); ?>
    <div class="container">
        <a class="btn mt-5 mb-2 p-0" href="practice-quiz.php">
            <i class="fa-solid fa-arrow-left fs-3"></i>
        </a>
        <h3 class="mt-2 mb-5">Take quiz - Random vocabulary</h3>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-4">Đâu là nghĩa đúng của từ "Hello"</h5>
                <form>
                    <div class="form-check mt-3">
                        <input type="radio" class="form-check-input" name="answer" id="ans-1">
                        <label class="form-check-label" for="ans-1">Xin chào</label>
                    </div>
                    <div class="form-check mt-3">
                        <input type="radio" class="form-check-input" name="answer" id="ans-2">
                        <label class="form-check-label" for="ans-2">Tạm biệt</label>
                    </div>
                    <div class="form-check mt-3">
                        <input type="radio" class="form-check-input" name="answer" id="ans-3">
                        <label class="form-check-label" for="ans-3">Cảm ơn</label>
                    </div>
                    <div class="form-check mt-3">
                        <input type="radio" class="form-check-input" name="answer" id="ans-4">
                        <label class="form-check-label" for="ans-4">Xin lỗi</label>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-5">
            <button class="btn btn-outline-primary"><i class="fa-solid fa-circle-check"></i> Check answer</button>
            <button class="btn btn-outline-success"><i class="fa-solid fa-forward"></i> Next question</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>