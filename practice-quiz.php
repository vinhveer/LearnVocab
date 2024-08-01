<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learn Vocabulary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include ("navbar.php"); ?>
    <h3 class="container mt-5 mb-5 display-6">
        Practice Quiz
    </h3>
    <div class="container">
        <div class="row">
            <a class="col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="card mb-3">
                    <img src="img\6102035.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Unit 1 - </h5>
                        <p class="card-text">Expand your vocabulary with randomly generated words, including
                            definitions,
                            examples, and pronunciation.</p>
                    </div>
                </div>
            </a>
            <a class="col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="card mb-3">
                    <img src="img\7494959.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Unit 2 - </h5>
                        <p class="card-text">Test your knowledge with various question types and get instant feedback to
                            improve
                            your understanding.</p>
                    </div>
                </div>
            </a>
            <a class="col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="card">
                    <img src="img\7498819.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Unit 3 -</h5>
                        <p class="card-text">Simulate exam conditions with timed quizzes and detailed performance
                            analysis
                            to
                            guide your study plan.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="modal  fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <h3 class="mt-3">Unit 1 - </h3>
                    <p class="mt-3">Start attempt?</p>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <a type="button" class="btn btn-primary" href="take-quiz.php">Ok, start now!</a>
                </div>
            </div>
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