<?php
    $Variabel = "Lele ayam";
?>

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
    <div class="mainDiv">
        <!--HEADER START-->
        <div class="headerDiv">
            <p class="examTitle"><?php echo $Variabel; ?></p>
            <div class="additionalDiv"> 
                <p class="examLevel">Level 0</p>
                <p class="examType">Ujian 1 Tulis</p>
            </div>
            <div class="nameDiv">
                <form style="overflow: hidden">
                    <label for="exampleInputEmail1">Nama</label>
                    <div class="form-group" style="text-align: right">
                        <!--INPUT NAMA START-->
                        <input style="width: 50%; float: right; clear: both" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                        <!--INPUT NAMA END-->
                    </div>
                </form>
            </div>
        </div>
        <!--HEADER END-->

        <!--BODY START-->
        <div class="bodyDiv">
            <!--VOCABULARY QUESTION SECTION START-->
            <div class="VocabQDiv">
                <!--JUDUL-->
                <b><h4>Kosa Kata</h4></b>
                <br/>
                <br/>
                <div class="VocabQuestion">
                    <!--PERINTAH PERTANYAAN & PERTANYAAN-->
                    <b><span>Berilah Sinonim untuk kata-kata di bawah ini</span></b><br/>
                    <span>Lele Ayam</span>
                </div>
            </div>
            <!--VOCABULARY QUESTION SECTION END-->

            <hr/>

            <!--RULES AND READING SECTION START-->
            <div class="rulesQDiv">
                <b><h4>Struktur dan Kaidah dan Membaca</h4></b>
                <br/>
                <br/>
                <div class="rulesQuestion">
                    <!--PERINTAH PERTANYAAN-->
                    <b><span>Hubungkan antara contoh dan kaidah dengan menuliskan nomor di kolom abu-abu</span></b>
                    <br/>
                    <br/>
                    <!--CONTOH TABLE START-->
                    <table class="table table-bordered">
                        <thead>
                            <tr style="text-align: center">
                                <!--HEAD-->
                                <th scope="col" colspan="100">Contoh</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <!--BODY-->
                                <th width="5%">kata1</th>
                                <th>kata2</th>
                                <th width="5%">kata3</th>
                                <th>kata4</th>
                                <th width="5%">kata5</th>
                                <th>kata6</th>
                            </tr>
                            <tr>
                                <th width="5%">kata1</th>
                                <th>kata2</th>
                                <th width="5%">kata3</th>
                                <th>kata4</th>
                                <th width="5%">kata5</th>
                                <th>kata6</th>
                            </tr>
                            <tr>
                                <th width="5%">kata1</th>
                                <th>kata2</th>
                                <th width="5%">kata3</th>
                                <th>kata4</th>
                                <th width="5%">kata5</th>
                                <th>kata6</th>
                            </tr>
                        </tbody>
                    </table>
                    <!--CONTOH TABLE END-->
                    <br/>
                    <br/>
                    <!--KAIDAH TABLE START-->
                    <table class="table table-bordered">
                        <thead>
                            <tr style="text-align: center">
                                <!--HEAD-->
                                <th colspan="100">Kaidah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <!--BODY-->
                                <th width="5%">1</th>
                                <th>Kata</th>
                                <th width="5%">1</th>
                                <th>Kata</th>
                                <th width="5%">1</th>
                                <th>Kata</th>
                                <th width="5%">1</th>
                                <th>Kata</th>
                            </tr>
                            <tr>
                                <th width="5%">1</th>
                                <th>Kata</th>
                                <th width="5%">1</th>
                                <th>Kata</th>
                                <th width="5%">1</th>
                                <th>Kata</th>
                                <th width="5%">1</th>
                                <th>Kata</th>
                            </tr>
                            <tr>
                                <th width="5%">1</th>
                                <th>Kata</th>
                                <th width="5%">1</th>
                                <th>Kata</th>
                                <th width="5%">1</th>
                                <th>Kata</th>
                                <th width="5%">1</th>
                                <th>Kata</th>
                            </tr>
                        </tbody>
                    </table>
                    <!--KAIDAH TABLE END-->
                </div>
            </div>
            <!--RULES AND READING SECTION END-->
            <hr/>
            <!--PICK WORDS SECTION START-->
            <div class="pickDiv">
                <!--PERINTAH PERTANYAAN-->
                <b><span>Isilah yang kosong dengan memilih kata</span></b>
                <br/>
                <br/>
                <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary">yang</button>
                        <button type="button" class="btn btn-secondary">adalah</button>
                        <button type="button" class="btn btn-secondary">itu</button>
                </div>
                <span>Kamu___orang yang pintar</span>
                <br/>
                <br/>
                <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary">yang</button>
                        <button type="button" class="btn btn-secondary">adalah</button>
                        <button type="button" class="btn btn-secondary">itu</button>
                </div>
                <span>Kamu___orang yang pintar</span>
            </div>
            <!--PICK WORDS SECTION END-->
            <hr/>
            <div class="pickNumberDiv">
                <!--PERINTAH PERTANYAAN-->
                <b><span>Isilah titik di bawah dengan nomor</span></b>
                <br/>
                <br/>
                <!--TABEL JAWABAN-->
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Kata</th>
                            <th>Kata</th>
                            <th>Kata</th>
                        </tr>
                        <tr>
                            <th>Kata</th>
                            <th>Kata</th>
                            <th>Kata</th>
                        </tr>
                        <tr>
                            <th>Kata</th>
                            <th>Kata</th>
                            <th>Kata</th>
                            </tr>
                    </tbody>
                </table>
                <br/>
                <!--KALIMAT-->
                <div>
                    <p>Angkasa tersebut_____indah</p>
                    <p>Angkasa tersebut_____indah</p>
                    <p>Angkasa tersebut_____indah</p>
                </div>
            </div>
        </div>
        <!--BODY END-->
    </div> 
</body>
</html>