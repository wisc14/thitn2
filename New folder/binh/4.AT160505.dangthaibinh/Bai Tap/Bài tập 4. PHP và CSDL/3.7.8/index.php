<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
    <link rel="stylesheet" href="./style.css">
    <script src="./main.js" defer></script>
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <div class="img">
                <img src="./images/banner.jpg" alt="banner">
            </div>
            <div class="link">
                <nav>
                    <ul>
                        <li><a href="index.php?page=home">Home</a></li>
                        <li><a href="index.php?page=login">Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- end header  -->

        <div id="center">
            <div class="left">
                <img src="./images/developer.jpg" alt="banner">
            </div>

            <div class="content">
                <?php
                if (isset($_GET['page'])) {
                    $page = $_GET["page"];
                    switch ($page) {
                        case 'home':
                            include "pages/home.php";
                            break;
                        case 'login':
                            include "pages/login.php";
                            break;
                        default:
                            include "pages/login.php";
                            break;
                    }
                } else {
                    include "pages/login.php";
                }
                ?>
            </div>
        </div>

        <!-- footer  -->
        <div id="footer">
            <table>
                <tr>
            <td style="background-color: blue"></td>
            <td style="background-color: red"></td>
            <td style="background-color: pink"></td>
        </tr>
        <tr>
            <td style="background-color: yellow"></td>
            <td style="background-color: green"></td>
            <td style="background-color: grey"></td>
        </tr>
        <tr>
            <td style="background-color: cyan"></td>
            <td style="background-color: white"></td>
            <td style="background-color: orange"></td>

            </table>
        <!-- end footer  -->

</body>

</html>