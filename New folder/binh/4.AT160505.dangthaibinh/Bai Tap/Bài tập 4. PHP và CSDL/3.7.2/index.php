<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo và sử dụng template</title>
</head>

<body>
    <?php
    require "Pages/head.php"
    ?>
    <div id="center">
        <?php
        require "Pages/left.php"
        ?>
        <div class="content">
            <h1>Dang Thai Binh</h1>
            <p>Mã sinh viên : <b>AT160505</b></p>
            <p>Lớp : <b>AT16E</b></p>
            <p>Address :<b>Quang Trung, Uông bí, Quảng Ninh</b></p>
            <p>Email : <b>thaibinhdang2710@gmail.com</b></p>
            <p>Số điện thoại : <b>0829084017</b></p>
        </div>
    </div>
    <?php
    require "Pages/footer.php"
    ?>
</body>

</html>