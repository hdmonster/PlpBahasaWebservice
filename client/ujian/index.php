<?php include '../../connections/ujian/read.php'?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UJIAN BAHASA ARAB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="index.css" />
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="main.js"></script>
    <script type="text/javascript" src="http://livejs.com/live.js"></script>
</head>
<body>
<?php

    while ($row = mysqli_fetch_array($result)) {

    $soal = $row['soal'];

?>
<div class="mainDiv">
    <!--HEADER START-->
    <div class="headerDiv">
        <p class="examTitle">PLP BAHASA ARAB TALAQQI</p>
        <div class="additionalDiv">
            <p class="examLevel">Level 0</p>
            <p class="examType">Ujian 1 Tulis</p>
        </div>
        <div class="nameDiv">
            <form style="overflow: hidden">
                <label for="exampleInputEmail1">Nama</label>
                <div class="form-group" style="text-align: right">
                    <input style="width: 50%; float: right; clear: both" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                </div>
            </form>
        </div>
    </div>

    <!--HEADER END-->

    <!--BODY START-->
    <div class="bodyDiv">
    </div>
    <!--BODY END-->
    </div>
    <?php }?>
</body>
</html>