<?php
    include '../connect.php';

    $sql = "SELECT * FROM TbSoal";

    $result = mysqli_query($con, $sql);