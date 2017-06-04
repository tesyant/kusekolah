<?php
session_start();
if (isset($_SESSION['username'])) 
  {
    include "koneksi.php";
    $query = "SELECT * FROM profil";
    $sql = mysql_query($query, $koneksi);
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Master - kusekolah</title>

  <link rel="stylesheet" type="text/css" href="semantic-ui/semantic.css">
  <link rel="stylesheet" type="text/css" href="homepage.css">
  <link rel="stylesheet" type="text/css" href="dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="iconfonts/flaticon.css">
  <link rel="stylesheet" type="text/css" href="dist/components/icon.css">
  <link rel="stylesheet" type="text/css" href="dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="dist/components/table.css">
  <link href='/img/twh.ico' rel='shortcut icon'>
  <link rel="icon" href="img/twh.ico" type="image/x-icon">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="semantic-ui/semantic.js"></script>
  <script src="homepage.js"></script>
  <script>
    $(function(){
        $('.ui.card').popup();
    });
  </script>

  </head>
  <body id="home">
  <div class="ui inverted masthead centered segment">
    <div class="ui page grid">
      <div class="column">
        <div class="ui secondary pointing menu">
          <a class="logo item" onclick="window.location.href='index.php'">
            kusekolah
          </a>
          <div class="ui inline dropdown">
            <a class="item" style="color: white">Data Pokok</a>
            <div class="menu">
              <div class="item" data-text="this week">Kepsek</div>
              <div class="item" data-text="this week">Wakasek</div>
              <div class="item" data-text="this week">Data Guru</div>
              <div class="item" data-text="this week">Data Siswa</div>
              <div class="item" data-text="this week">Data Sekolah</div>
            </div>
          </div> 
          <div class="ui inline dropdown">
              <a class="item" style="color: white">Data Sekolah</a>
              <div class="menu">
              <div class="item" data-text="this week">Kabupaten</div>
              <div class="item" data-text="this week">Prestasi</div>
              <div class="item" data-text="this week">Jurusan</div>
              <div class="item" data-text="this week">Tenkependik</div>
            </div>
          </div>             
          <div class="ui inline dropdown">
              <a class="item" style="color: white">Aset</a>
              <div class="menu">
              <div class="item" data-text="this week">Aset Bangunan</div>
              <div class="item" data-text="this week">Aset Tanah</div>
              <div class="item" data-text="this week">Sarpras</div>
            </div>
          </div>
          <a class="item">
            <i class="flaticon-mail" style="color: white"></i> Hubungi Kami
          </a>
          <div class="right menu">
            <div class="item">
              <div class="ui icon input">
                <input placeholder="Search..." type="text" class="search">
                <i class="flaticon-move link icon"></i>
              </div>
            </div>
            <a class="ui item" href="logout.php" style="color: white">
              Logout
            </a>
            </div>
          </div>
                     
          <div class="ui hidden transition information">
            <h1 class="ui inverted centered header">
                  Hello!
                  <h2><u><?php echo "".$_SESSION['username'];?></u></h2>
            </h1>
              <p class="ui centered lead">Kelola Data Sekolah Anda<br>Sekarang Juga..</p>
            <br>
          </div>
        </div>  
      </div>
    </div>
  </div>

  <!-- Isi Body -->
  <div class="ui horizontal divider"><i class="flaticon-mail icon"></i></div>

  <div class="ui container">
    <table class="ui selectable celled table">
      <thead>
      <tr>
        <th>NPSN</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>E-mail</th>
        <th>Website</th>
      </tr>
      </thead>
      <tbody>
        <?php while($data = mysql_fetch_object($sql)): ?>
      <tr>
        <td><?php echo $data->npsn;?></td>
        <td><?php echo $data->alamat;?></td>
        <td><?php echo $data->telepon;?></td>
        <td><?php echo $data->email;?></td>
        <td><?php echo $data->web;?></td>
      </tr>
        <?php 

        endwhile;?>
      </tbody>
      <tfoot>
        <tr>
        <th colspan="3">
          <div class="ui right floated pagination menu">
            <a class="icon item">
              <i class="left chevron icon"></i>
            </a>
            <a class="item">1</a>
            <a class="item">2</a>
            <a class="item">3</a>
            <a class="item">4</a>
            <a class="icon item">
              <i class="right chevron icon"></i>
            </a>
          </div>
        </th>
        </tr>
      </tfoot>
    </table>
  </div>
    
  <div class="ui inverted footer segment center">
    <div class="ui container">
      <center><img src="img/twh.png" style="width: 40px;height: 40px"></center>
    </div>
      <center>
        <h4 class="ui inverted header">All Right Reserved<br><sub>Copyright 2017</sub></h4>
      </center>
  </div>
</body>
</html>
<?php
  }else
    {
      ?>
      <script>alert('Anda Perlu Login Ke Akun Anda.');
      window.location.assign('login.html');
      </script>
      <?php
    }
?>