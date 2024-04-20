<!-- jika ingin pakai bootstrap jangan lupa copy link terlebih dahulu. 
caranya: buka web bootstrap -> klik docs -> scroll dikit, copas no 2 (include bootstrap's css and JS) -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- ini css metode internal, ada 2 metode lainnya yaitu inline dan external, bisa cek ppt 2 dan dipakai sesuai kebutuhan
    tips edit css: klik kanan pada halaman web dan gunakan fitur inspect untuk melihat preview -->
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

    .rapi {
        width: 260px; 
    }
    
    .ta {
        width: 260px;
        height: 300px;
    }

    </style>

  </head>
  <body>
    <!-- card merupakan bagian dari bootstrap, eksplor untuk lebih lanjutnya ya -->
    <div class="card"> 
        <div class="card-body">
        <center>
            <h1>Kursus Bahasa Pemrograman</h1>
            <br>
            <form METHOD="POST" action="hasil.php">
            <table>
                <tr>
                    <!-- atribut style merupakan css dengan metode inline
                    tapi lebih disarankan metode internal/eksternal agar code desain terpisah dan rapi -->
                    <td style="width: 250px;">Nama</td>
                    <td><input type="text" name="nama" class="rapi"></td>
                </tr>
                
                <tr>
                <td>Pekerjaan</td>
                <td>
                <select name="Pekerjaan" class="rapi">
                    <option value="Pelajar">Pelajar</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Bekerja">Bekerja</option>
                </select>
                </td>
                </tr>
                
                <tr>
                    <td>Jenis Kelamin</td>
                    <!-- ingat, name adalah nama variabel, sedangkan value adalah nilai yang diisikan -->
                    <td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki
                        <input type="radio" name="jk" value="Perempuan">Perempuan</td>
                </tr>

                <tr>
                    <td>Kursus Bahasa Pemrograman</td>
                    <!-- atribut checked digunakan untuk mengeset default
                    di sini name menggunakan tipe array karena checkbox dapat dipilih lebih dari 1
                    span digunakan untuk memisahkan bagian tertentu, biasanya untuk keperluan desain -->
                    <td><input type="checkbox" name="bhs[]" value="C++" checked> C++ <span style="color: red"><del>100k</del> 80k Best Offer!</span><br>
                        <input type="checkbox" name="bhs[]" value="Java"> Java <span style="color: red">90k</span><br>
                        <input type="checkbox" name="bhs[]" value="PHP"> PHP <span style="color: red">90k</span></td>
                </tr>

                <tr>
                    <td>Pengajuan Bantuan Dana</td>
                    <td><textarea class="ta" name="alasan" placeholder="Ceritakan alasan pengajuan dana di sini"></textarea></td>
                </tr>
            </table>
                <br>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </form>
        </center>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>