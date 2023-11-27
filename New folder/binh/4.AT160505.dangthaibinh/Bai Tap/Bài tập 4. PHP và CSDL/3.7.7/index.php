<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phiên</title>
    <style>
        #wrapper {
            width: 1508px;
            height: auto;
            margin: auto;
        }

        /* Css header  */
        #header {
            margin: 0;
            padding: 0;
        }

        #header img {
            width: 100%;
            height: 250px;
        }

        .img img {
            width: 100%;
            height: auto;
            object-fit: cover;
            object-position: center;
        }

        .link ul {
            display: flex;
            background-color: gainsboro;
            padding-right: 30px;
            list-style-type: none;
            justify-content: right;

        }

        .link li {
            border: 1px solid gray;
            border-radius: 10%;
            padding: 15px;
            background-color: azure;
            margin-right: 10px;
        }

        .link a {
            text-decoration: none;
        }

        /* CSS left  */
        .left img {
            width: 370px;
            height: auto;
            flex-direction: column;
            padding-bottom: 15px;
        }

        .left {
            border-right: 2px solid gray;
        }

        /* Css body  */
        #center {
            display: flex;
        }

        .left {
            flex-basis: 25%;
        }

        .content {
            padding-left: 20px;
        }

        /* Css footer  */
        #footer table {
            width: 100%;
            border-collapse: collapse;
            border: 3px solid wheat;
        }

        #footer table,
        th,
        td {
            border: 3px solid wheat;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }

        .cell-red {
            background-color: rgb(215, 27, 27);
        }

        .cell-green {
            background-color: rgb(12, 175, 12);
        }

        .cell-blue {
            background-color: rgb(8, 8, 201);
        }
    </style>
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
        </div>
        <!-- end footer  -->

    </div>
</body>

</html>