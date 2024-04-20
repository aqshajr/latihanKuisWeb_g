<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
    body {
        background-image: url('https://wonderfulengineering.com/wp-content/uploads/2014/04/code-wallpaper-38.jpg');
    }

    .card {
        top: 100px;
        left: 550px;
        width: 700px;
        height: 650px;
    }

    </style>

  </head>
  <body>
    <div class="card"> 
        <div class="card-body">
        <center>
            <h1>Kursus Bahasa Pemrograman</h1>
            <br>
            <?php
            // isset digunakan untuk mengecek variabel
            $diskon=0;
            if(isset($_POST['Pekerjaan'])){
                if($_POST['Pekerjaan']=="Pelajar"){
                    $diskon=0.2;
                }
            }

            //foreach as digunakan untuk perulangan pada array
            $harga=0;
            if(isset($_POST['bhs'])){
            foreach($_POST['bhs'] as $bahasa)
            {
                if($bahasa=="C++"){
                    $harga=$harga+80000;
                }

                if($bahasa=="Java"){
                    $harga=$harga+90000;
                }

                if($bahasa=="PHP"){
                    $harga=$harga+90000;
                }
            }
            }

            //contoh error handling
            if(!isset($_POST['jk'])){
                $_POST['jk']="Non-Identified";
            }

            $harga=$harga-($diskon*$harga);
            ?>

            <table>
                <tr>
                    <td style="width: 250px;">Nama</td>
                    <td>:</td>
                    <!-- ini merupakan bentuk singkat dari tag php, tanda = artinya echo
                    INGAT hati-hati dengan pemberian name (nama variabel) karena sifatnya sensitive case -->
                    <td><?= $_POST['nama']?></td>
                </tr>
                
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?= $_POST['Pekerjaan']?></td>
                </tr>
                
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?= $_POST['jk']?></td>
                </tr>

                <tr>
                    <td>Kursus Bahasa Pemrograman</td>
                    <td>:</td>
                    <td><?php
                    if(isset($_POST['bhs'])){
                        foreach($_POST['bhs'] as $bahasa)
                        {
                            echo"$bahasa <br>";
                        }
                    }
                    ?></td>
                </tr>

                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><?= $harga?></td>
                </tr>
            </table>
        </center>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>