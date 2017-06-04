<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Filter - kusekolah</title>

  <link rel="stylesheet" type="text/css" href="semantic-ui/semantic.css">
  <link rel="stylesheet" type="text/css" href="homepage.css">
  <link rel="stylesheet" type="text/css" href="iconfonts/flaticon.css">
  <link rel="stylesheet" type="text/css" href="dist/components/icon.css">
  <link rel="stylesheet" type="text/css" href="dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="dist/components/checkbox.css">  
  <link rel="stylesheet" type="text/css" href="dist/components/container.css">
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
          <a class="logo item">
            kusekolah  </a>                
          <div class="ui inline dropdown">
            <a class="item">Data Pokok</a>
            <div class="menu">
              <div class="item" data-text="this week">Kepsek</div>
              <div class="item" data-text="this week">Wakasek</div>
              <div class="item" data-text="this week">Data Guru</div>
              <div class="item" data-text="this week">Data Siswa</div>
              <div class="item" data-text="this week">Data Sekolah</div>
            </div>
          </div> 
          <div class="ui inline dropdown">
              <a class="item">Data Sekolah</a>
              <div class="menu">
              <div class="item" data-text="this week">Kabupaten</div>
              <div class="item" data-text="this week">Prestasi</div>
              <div class="item" data-text="this week">Jurusan</div>
              <div class="item" data-text="this week">Tenkependik</div>
            </div>
          </div>             
          <div class="ui inline dropdown">
              <a class="item">Aset</a>
              <div class="menu">
              <div class="item" data-text="this week">Aset Bangunan</div>
              <div class="item" data-text="this week">Aset Tanah</div>
              <div class="item" data-text="this week">Sarpras</div>
            </div>
          </div>
          <a class="item">
            <i class="flaticon-mail"></i> Hubungi Kami
          </a>
          <div class="right menu">
            <div class="item">
              <div class="ui icon input">
                <input placeholder="Search..." type="text">
                <i class="flaticon-move icon"></i>
              </div>
            </div>
            <a class="ui item" href="login.html">
              <b>Login</b>
            </a>
          </div>
        </div>
                   
        <div class="ui hidden transition information">
            <p class="ui centered lead"><h1>Halaman Filter</h1><sub><h4>Pilih mana saja yang ingin ditampilkan</h4></sub></p>
          <br>
        </div>
      </div>
    </div>
  </div>

  <div class="ui container">
    <div class="ui horizontal divider">
      <i class="flaticon-home icon"></i>
    </div>
  </div>
  
  <div class="ui container">
  <form class="ui large form" action="insert.php" method="post" >
    

      <div class="ui internally celled grid">
        <div class="row">
          <div class="four wide column">
            <div class="ui floating dropdown fluid labeled search button">
            <span class="text">Profil</span>
              <div class="menu">
                <div class="ui blue fits basic button item">ALL</div>
                <div class="ui divider"></div>
                <div class="item">Jenjang</div>
                <div class="item">Chinese</div>
                <div class="item">Danish</div>
                <div class="item">Dutch</div>
                <div class="item">English</div>
                <div class="item">French</div>
              </div>
            </div>
          </div>
          <div class="four wide column">
            <div class="ui floating dropdown fluid labeled search button">
            <span class="text">Profil</span>
              <div class="menu">
                <div class="item">Jenjang</div>
                <div class="item">Chinese</div>
                <div class="item">Danish</div>
                <div class="item">Dutch</div>
                <div class="item">English</div>
                <div class="item">French</div>
              </div>
            </div>
          </div>
          <div class="four wide column">
            <div class="ui floating dropdown fluid labeled search button">
            <span class="text">Profil</span>
              <div class="menu">
                <div class="item">Jenjang</div>
                <div class="item">Chinese</div>
                <div class="item">Danish</div>
                <div class="item">Dutch</div>
                <div class="item">English</div>
                <div class="item">French</div>
              </div>
            </div>
          </div>
          <div class="four wide column">
            <div class="ui floating dropdown fluid labeled search button">
            <span class="text">Profil</span>
              <div class="menu">
                <div class="item">Jenjang</div>
                <div class="item">Chinese</div>
                <div class="item">Danish</div>
                <div class="item">Dutch</div>
                <div class="item">English</div>
                <div class="item">French</div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="four wide column">
            <div class="ui floating dropdown fluid labeled search button">
            <span class="text">Profil</span>
              <div class="menu">
                <div class="item">Jenjang</div>
                <div class="item">Chinese</div>
                <div class="item">Danish</div>
                <div class="item">Dutch</div>
                <div class="item">English</div>
                <div class="item">French</div>
              </div>
            </div>
          </div>
          <div class="four wide column">
            <div class="ui floating dropdown fluid labeled search button">
            <span class="text">Profil</span>
              <div class="menu">
                <div class="item">Jenjang</div>
                <div class="item">Chinese</div>
                <div class="item">Danish</div>
                <div class="item">Dutch</div>
                <div class="item">English</div>
                <div class="item">French</div>
              </div>
            </div>
          </div>
          <div class="four wide column">
            <div class="ui floating dropdown fluid labeled search button">
            <span class="text">Profil</span>
              <div class="menu">
                <div class="item">Jenjang</div>
                <div class="item">Chinese</div>
                <div class="item">Danish</div>
                <div class="item">Dutch</div>
                <div class="item">English</div>
                <div class="item">French</div>
              </div>
            </div>
          </div>
          <div class="four wide column">
            <div class="ui floating dropdown fluid labeled search button">
            <span class="text">Profil</span>
              <div class="menu">
                <div class="item">Jenjang</div>
                <div class="item">Chinese</div>
                <div class="item">Danish</div>
                <div class="item">Dutch</div>
                <div class="item">English</div>
                <div class="item">French</div>
              </div>
            </div>
          </div>
        </div>
        <div class="">
          
        </div>
      </div>
    
    
    </div>
    <div class="ui horizontal section divider">Pilih filter dari data-data diatas.</div>
    <div class="ui large fluid blue button">
      <a style="color: white">Sign Up</a>
    </div>
  </div>

  <div class="ui inverted footer segment center">
    <div class="ui container">
      <center><img src="img/twh.png" style="width: 40px;height: 40px"></center>
    </div>
    <br>
      <center>
        <h4 class="ui inverted header">All Right Reserved<br><sub>&copy; 2017</sub></h4>
      </center>
  </div>
</body>
</html>