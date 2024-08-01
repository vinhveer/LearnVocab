<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Setup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <img src="../img/image.png" style="width: 100px" class="mt-5">
        <h3 class="mt-2 mb-2 display-6">Database Setup</h3>
        <p class="mb-4">Connect with your MySQL or MariaDB</p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $servername = $_POST['servername'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $db_password = $_POST['db_password'];
            $dbname = "VocabularyDB";

            // Tạo kết nối
            $conn = new mysqli($servername, $username, $password);

            // Kiểm tra kết nối
            if ($conn->connect_error) {
                die('<div class="alert alert-danger">Kết nối thất bại: ' . $conn->connect_error . '</div>');
            }

            // Kiểm tra xem cơ sở dữ liệu đã tồn tại chưa
            $db_check = $conn->select_db($dbname);

            if ($db_check) {
                echo '<div class="alert alert-info">Cơ sở dữ liệu đã tồn tại.</div>';
                echo '<a href="/" class="btn btn-primary">Quay lại trang chủ</a>';
            } else {
                // Tạo cơ sở dữ liệu nếu chưa tồn tại
                $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
                if ($conn->query($sql) === TRUE) {
                    echo '<div class="alert alert-success">Tạo cơ sở dữ liệu thành công</div>';
                } else {
                    die('<div class="alert alert-danger">Lỗi khi tạo cơ sở dữ liệu: ' . $conn->error . '</div>');
                }

                // Kết nối tới cơ sở dữ liệu
                $conn->select_db($dbname);

                // Tạo bảng Sections
                $sql = "CREATE TABLE IF NOT EXISTS Sections (
                section_id INT AUTO_INCREMENT PRIMARY KEY,
                section_name VARCHAR(255) NOT NULL,
                description TEXT
            )";
                if ($conn->query($sql) === TRUE) {
                    echo '<div class="alert alert-success">Tạo bảng Sections thành công</div>';
                } else {
                    die('<div class="alert alert-danger">Lỗi khi tạo bảng Sections: ' . $conn->error . '</div>');
                }

                // Tạo bảng Vocabulary
                $sql = "CREATE TABLE IF NOT EXISTS Vocabulary (
                vocabulary_id INT AUTO_INCREMENT PRIMARY KEY,
                section_id INT,
                word VARCHAR(255) NOT NULL,
                pronunciation VARCHAR(255),
                part_of_speech ENUM('danh từ', 'động từ', 'tính từ', 'trạng từ') NOT NULL,
                meaning TEXT NOT NULL,
                example_sentence TEXT,
                example_sentence_meaning TEXT,
                FOREIGN KEY (section_id) REFERENCES Sections(section_id)
            )";
                if ($conn->query($sql) === TRUE) {
                    echo '<div class="alert alert-success">Tạo bảng Vocabulary thành công</div>';
                } else {
                    die('<div class="alert alert-danger">Lỗi khi tạo bảng Vocabulary: ' . $conn->error . '</div>');
                }

                // Tạo bảng Passwords
                $sql = "CREATE TABLE IF NOT EXISTS Passwords (
                id INT AUTO_INCREMENT PRIMARY KEY,
                password VARCHAR(255) NOT NULL
            )";
                if ($conn->query($sql) === TRUE) {
                    echo '<div class="alert alert-success">Tạo bảng Passwords thành công</div>';
                } else {
                    die('<div class="alert alert-danger">Lỗi khi tạo bảng Passwords: ' . $conn->error . '</div>');
                }

                // Tạo bảng Errors
                $sql = "CREATE TABLE IF NOT EXISTS Errors (
                error_id INT AUTO_INCREMENT PRIMARY KEY,
                vocabulary_id INT,
                description TEXT NOT NULL,
                report_date DATETIME NOT NULL,
                FOREIGN KEY (vocabulary_id) REFERENCES Vocabulary(vocabulary_id)
            )";
                if ($conn->query($sql) === TRUE) {
                    echo '<div class="alert alert-success">Tạo bảng Errors thành công</div>';
                } else {
                    die('<div class="alert alert-danger">Lỗi khi tạo bảng Errors: ' . $conn->error . '</div>');
                }

                // Tạo bảng EditStatus
                $sql = "CREATE TABLE IF NOT EXISTS EditStatus (
                status_id INT AUTO_INCREMENT PRIMARY KEY,
                error_id INT,
                status ENUM('pending', 'in progress', 'fixed') NOT NULL,
                update_date DATETIME NOT NULL,
                FOREIGN KEY (error_id) REFERENCES Errors(error_id)
            )";
                if ($conn->query($sql) === TRUE) {
                    echo '<div class="alert alert-success">Tạo bảng EditStatus thành công</div>';
                } else {
                    die('<div class="alert alert-danger">Lỗi khi tạo bảng EditStatus: ' . $conn->error . '</div>');
                }

                // Thêm mật khẩu vào bảng Passwords
                $sql = "INSERT INTO Passwords (password) VALUES ('$db_password')";
                if ($conn->query($sql) === TRUE) {
                    echo '<div class="alert alert-success">Khởi tạo mật khẩu thành công</div>';
                } else {
                    die('<div class="alert alert-danger">Lỗi khi khởi tạo mật khẩu: ' . $conn->error . '</div>');
                }

                // Tạo tệp connect.php
                $connect_php_content = "<?php\n";
                $connect_php_content .= "\$servername = \"$servername\";\n";
                $connect_php_content .= "\$username = \"$username\";\n";
                $connect_php_content .= "\$password = \"$password\";\n";
                $connect_php_content .= "\$dbname = \"$dbname\";\n";
                $connect_php_content .= "\n";
                $connect_php_content .= "// Tạo kết nối\n";
                $connect_php_content .= "\$conn = new mysqli(\$servername, \$username, \$password, \$dbname);\n";
                $connect_php_content .= "\n";
                $connect_php_content .= "// Kiểm tra kết nối\n";
                $connect_php_content .= "if (\$conn->connect_error) {\n";
                $connect_php_content .= "    die(\"Kết nối thất bại: \" . \$conn->connect_error);\n";
                $connect_php_content .= "}\n";
                $connect_php_content .= "?>";

                file_put_contents('connect.php', $connect_php_content);
                echo '<div class="alert alert-success">Tạo tệp connect.php thành công</div>';
                echo '<a href="index.php" class="btn btn-primary">Quay lại trang chủ</a>';
            }

            $conn->close();
        } else {
            ?>
            <form method="post" action="setup.php">
                <div class="mt-3">
                    <label for="servername" class="form-label">Servername</label>
                    <input type="text" class="form-control" id="servername" name="servername" required>
                </div>
                <div class="mt-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mt-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mt-3">
                    <label for="db_password" class="form-label">Database Password</label>
                    <input type="password" class="form-control" id="db_password" name="db_password" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Start now</button>
            </form>
            <?php
        }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>