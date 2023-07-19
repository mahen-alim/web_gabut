<?php  
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Meme Page</title>
    <link rel="stylesheet" href="test.css">

    <!-- Below Url in src="" is of font awesome kit create your own kit and use that 
    url below or also you can use link of font awesome cdn if you don't want yo creeate
    a kit and use older version of font awesome icons-->
    <script src="https://kit.fontawesome.com/924b40cfb7.js" crossorigin="anonymous"></script>

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
    
    <div class="konten">
        <h1>Daftar Meme</h1>

        <table id="tabel">
            <tr class="tabel-header">
                <th>No</th>
                <th>Meme</th>
                <th>Judul</th>
                <th>Pembuat</th>
                <th>Status</th>
                <th>Lucu</th>
                <th>B Aja</th>
            </tr>

            <tr class="tabel-konten">
                <td class="nomor">1</td>
                <td class="wrapper"><img src="resource/Senyum Kodomo.png" alt="meme 1"></td>
                <td>Pram Face</td>
                <td>Kang Jepret</td>
                <td>Dilihat</td>
                <td><button onclick="Toggle1()" id="btnh1" class="btn2"><i class="fa-solid fa-heart"><span id="like-count" class="l-count">0</span></i></button></td>
                <td><button onclick="Toggle2()" id="btnh2" class="btn3"><i class="fa-solid fa-heart-crack"><span id="like-count2" class="l-count2">0</span></i></button></td>
            </tr>
          
            <tr class="tabel-konten
            tabel-genap1">
                <td>2</td>
                <td class="wrapper"><img src="resource/helloman.png" alt="meme 1"></td>
                <td>Man Face</td>
                <td>Kang Jepret</td>
                <td>Dilihat</td>
                <td><button onclick="Toggle3()" id="btnh3" class="btn2"><i class="fa-solid fa-heart"><span id="like-count3" class="l-count">0</span></i></button></td>
                <td><button onclick="Toggle4()" id="btnh4" class="btn3"><i class="fa-solid fa-heart-crack"><span id="like-count4" class="l-count2">0</span></i></button></td>
            </tr>

            <tr class="tabel-konten">
                <td>3</td>
                <td class="wrapper"><img src="resource/IMG-20220915-WA0008.jpg" alt="meme 1"></td>
                <td>Mahen Face</td>
                <td>Kang Jepret</td>
                <td>Dilihat</td>
                <td><button onclick="Toggle5()" id="btnh5" class="btn2"><i class="fa-solid fa-heart"><span id="like-count5" class="l-count">0</span></i></button></td>
                <td><button onclick="Toggle6()" id="btnh6" class="btn3"><i class="fa-solid fa-heart-crack"><span id="like-count6" class="l-count2">0</span></i></button></td>
            </tr>

            <tr class="tabel-konten
            tabel-genap1">
                <td>4</td>
                <td class="wrapper"><img src="resource/syam.jpg" alt="meme 1"></td>
                <td>Syam Seleb</td>
                <td>Anonymous</td>
                <td>Dilihat</td>
                <td><button onclick="Toggle7()" id="btnh7" class="btn2"><i class="fa-solid fa-heart"><span id="like-count7" class="l-count">0</span></i></button></td>
                <td><button onclick="Toggle8()" id="btnh8" class="btn3"><i class="fa-solid fa-heart-crack"><span id="like-count8" class="l-count2">0</span></i></button></td>
            </tr>

            <tr class="tabel-konten">
                <td>5</td>
                <td class="wrapper"><img src="resource/syam2.jpg" alt="meme 1"></td>
                <td>Syam Sipaling Lkmm</td>
                <td>Kang Jepret</td>
                <td>Dilihat</td>
                <td><button onclick="Toggle9()" id="btnh9" class="btn2"><i class="fa-solid fa-heart"><span id="like-count9" class="l-count">0</span></i></button></td>
                <td><button onclick="Toggle10()" id="btnh10" class="btn3"><i class="fa-solid fa-heart-crack"><span id="like-count10" class="l-count2">0</span></i></button></td>
            </tr>

            <tr class="tabel-konten
            tabel-genap1">
                <td>6</td>
                <td class="wrapper"><img src="resource/sugeng.jpg" alt="meme 1"></td>
                <td>Sugeng Face</td>
                <td>Kang Jepret</td>
                <td>Dilihat</td>
                <td><button onclick="Toggle11()" id="btnh11" class="btn2"><i class="fa-solid fa-heart"><span id="like-count11" class="l-count">0</span></i></button></td>
                <td><button onclick="Toggle12()" id="btnh12" class="btn3"><i class="fa-solid fa-heart-crack"><span id="like-count12" class="l-count2">0</span></i></button></td>
            </tr>

            <tr class="tabel-konten">
                <td>7</td>
                <td class="wrapper"><img src="resource/pram2.jpg" alt="meme 1"></td>
                <td>Pram Sipaling Lkmm</td>
                <td>Kang Jepret</td>
                <td>Dilihat</td>
                <td><button onclick="Toggle13()" id="btnh13" class="btn2"><i class="fa-solid fa-heart"><span id="like-count13" class="l-count">0</span></i></button></td>
                <td><button onclick="Toggle14()" id="btnh14" class="btn3"><i class="fa-solid fa-heart-crack"><span id="like-count14" class="l-count2">0</span></i></button></td>
            </tr>
        
        </table>
        
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
        <button class="tambah-konten" onclick="tambahkanKonten()">Tambah</button>
    </div>

    </div>
    <script src="meme.js"></script>
    <script src="app.js"></script>

   
</body>
</html>
