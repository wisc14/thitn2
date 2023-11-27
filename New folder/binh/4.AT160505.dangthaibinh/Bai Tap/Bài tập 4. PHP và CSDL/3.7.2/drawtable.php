<?php
require "Pages/head.php"
?>
<div id="center">
    <?php
    require "Pages/left.php"
    ?>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
    <div class="content">
        <h1>Draw Table</h1>
        <table>
            <thead>
                <tr>
                    <th>T</th>
                    <th>h</th>
                    <th>a</th>
                    <th>i</th>
                    <th>B</th>
                    <th>i</th>
                    <th>n</th>
                    <th>h</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= 4; $i++) {
                    echo "<tr>";
                    for ($j = 1; $j <= 8; $j++) {
                        echo "<td>$j</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php
require "Pages/footer.php"
?>