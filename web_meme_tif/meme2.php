<?php  
include "koneksi.php";
include "functions.php";

$sqlquery = "SELECT * FROM daftarmeme";
$rowresult = getdata($sqlquery);
// var_dump($rowresult);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Meme Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="test.css">

    <!-- Below Url in src="" is of font awesome kit create your own kit and use that 
    url below or also you can use link of font awesome cdn if you don't want yo creeate
    a kit and use older version of font awesome icons-->
    <script src="https://kit.fontawesome.com/924b40cfb7.js" crossorigin="anonymous"></script>

    <style>
        .min-height {
            min-height: 10px;
        }
        .table tbody td .min-height img {
            max-height: 150px;
        }
        .table-hover tbody tr:hover {
            background-color: cornsilk;
        }
    </style>
</head> 
<body>
    <div class="header">
         <div class="header-logo">
            <img src="tif.png" alt="logo">
         </div>
          
         <div class="header-title">
            <a href="index.html">Kumpulan Meme Kocak Mahasiswa TIF Polije PSDKU Nganjuk</a>
         </div>
    </div>
    <ul class="nav">
        <li class="nav-item"><a href="index.html">Beranda</a></li>
        <li class="nav-item"><a href="meme.html">Meme</a></li>
        <li class="nav-item"><a href="kontak.html">Kontak</a></li>

    </ul>
    
    <div class="konten mt-3">
        <h1>Daftar Meme</h1>

        <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr class="bg-primary text-white">
            <th scope="col">No</th>
            <th scope="col">Meme</th>
            <th scope="col">Judul</th>
            <th scope="col">Pembuat</th>
            <th scope="col">Status</th>
            <th scope="col">Like</th>
            <th scope="col">dislike</th>
            </tr>
        </thead>
        <?php $idnumber = 0;?>
        <tbody>
            <?php foreach($rowresult as $row) : $idnumber++; ?>
            <tr>
                <td scope="row">
                    <div class="min-height font-weight-bold">
                        <?=  $idnumber;?>
                    </div>
                </td>                
                <td scope="row" class="wrapper">
                    <div class="min-height text-center">
                        <img src="resource/<?=  $row['gambar'] ;?>" alt="meme image">
                    </div>
                </td>
                <td scope="row">
                    <div class="min-height text-capitalize">
                        <?=  $row["judul"] ;?>
                    </div>
                </td>
                <td scope="row">
                    <div class="min-height text-capitalize">
                        <?=  $row["creator"] ;?>
                    </div>
                </td>
                <td scope="row">
                    <div class="min-height text-capitalize">
                        <?=  $row["status"] ;?>
                    </div>
                </td>
                <td scope="row"><button onclick="Toggle3()" id="btnh3" class="btn2">             
                    <div class="min-height">
                        <i class="fa-solid fa-heart"><span id="like-count3" class="l-count"><?=  $row["love"] ;?></span></i></button>
                    </div>
                </td>
                <td scope="row"><button onclick="Toggle4()" id="btnh4" class="btn3">
                    <div class="min-height">
                        <i class="fa-solid fa-heart-crack"><span id="like-count4" class="l-count2"><?=  $row["hate"] ;?></span></i></button>
                    </div>
                </td>

            </tr>
            <?php  endforeach;?>
        </tbody>
        </table>
        
        <div class="container-fluid mb-5 mt-5">

            <form action="" method="post">
    
                <div class="add-meme">
                <h2>Tambah Meme</h2>
                <input type="number" id="inputAngka" placeholder="Masukkan Nomor" required>
                <input type="file" id="inputGambar" accept="image/*" required>
                <input type="text" id="inputDeskripsi" placeholder="Masukkan Judul" required>
                <label id="input1">Pilih Pembuat
                <select id="inputOpsi">
                    <option value="Kang Jepret">Kang Jepret</option>
                    <option value="Anonymous">Anonymous</option>
                    <option value="Kang Candid">Kang Candid</option>
                </select>
                </label>
        
                <label id="input2">Pilih Status
                    <select id="inputOpsi2">
                        <option value="Dilihat">Dilihat</option>
                        <option value="Diabaikan">Diabaikan</option>
                        <option value="Menarik">Menarik</option>
                    </select>
                </label>
        
                <button type="submit" class="tambah-konten" onclick="tambahkanKonten()">Tambah</button>
            </form>
        </div>
    </div>

    </div>
    <script src="meme.js"></script>
    <script src="app.js"></script>

   
</body>
</html>
