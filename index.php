<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Beranda - kusekolah</title>

  <link rel="stylesheet" type="text/css" href="semantic-ui/semantic.css">
  <link rel="stylesheet" type="text/css" href="homepage.css">
  <link rel="stylesheet" type="text/css" href="iconfonts/flaticon.css">
  <link rel="stylesheet" type="text/css" href="dist/components/icon.css">
  <link rel="stylesheet" type="text/css" href="dist/components/header.css">
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
              kusekolah  </a>                
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
                  <input placeholder="Search..." type="text">
                  <i class="flaticon-move icon"></i>
                </div>
              </div>
              <a class="ui item" href="login.html" style="color: white">
                <b>Login</b>
              </a>
            </div>
          </div>
                     
          <div class="ui hidden transition information" style="margin-top: 1px">
            <div class="ui shape">
              <div class="sides">
                <div class="active side">
                  <img src="img/logo.png">
                </div>
              </div>
            </div>
            <h1 class="ui inverted centered header" style="margin-top: -1px">
                  kusekolah
            </h1>
            <p class="ui centered lead">Jangan Pernah Berhenti Belajar, Karena<br> Hidup Tak Pernah Berhenti Mengajarkan<br><sub>- quote -</sub></p>
            <a href="#" class="large basic inverted animated fade ui button">
            <div class="visible content" href="index.php">KELOLA</div>
            <div class="hidden content" onclick="window.location.href='login.html'">Login Akun Anda</i></div>
            </a>
            <br>
          </div>
        </div>
      </div>
    </div>
  <div class="ui vertical feature segment">
    <div class="ui centered page grid">
      <div class="fourteen wide column">
        <div class="ui three column center aligned stackable divided grid">
          <div class="column column-feature">
            <div class="ui icon header">
              <i class="flaticon-graduates icon"></i>
              Prestasi
            </div>
            <p>Info mengenai Prestasi dari<br>Sekolah masing-masing.</p>
            <p>
              <a class="ui button" href="#">
                Lihat
              </a>
            </p>
          </div>
          <div class="column column-feature">
            <div class="ui icon header">
              <i class="flaticon-home icon"></i>
              INFO
            </div>
            <p>Ketahui informasi sekolah Anda<br>sekarang juga.</p>
            <p>
              <a class="ui blue right labeled icon button" href="#">
                Lihat Data
                <i class="right flaticon-move icon"></i>
              </a>
            </p>
          </div>
          <div class="column column-feature">
            <div class="ui icon header">
              <i class="flaticon-calendar icon"></i>
              Event
            </div>
            <p>Agenda terkini dari berbagai<br>sekolah.</p>
            <p>
              <a class="ui button" href="#">
                Lihat
              </a>
            </p>
          </div>
        </div>   
      </div>
    </div>
  </div>
    
  <div class="ui recent-works vertical segment">
    <div class="ui very relaxed stackable centered page grid">
      <div class="row">
        <div class="eight wide centered column">
          <h1 class="center aligned ui inverted header">
            Kabar Terbaru
          </h1>
            <div class="ui horizontal divider"><i class="white flaticon-outcoming icon"></i></div>
            <p class="ui centered lead">Ketahuilah Informasi Terhangat Disekitarmu</p>
        </div>
      </div>
      <div class="fourteen wide column">
        <div class="ui three column aligned stackable divided grid">
          <div class="column">
            <div class="ui card">
              <div class="image">
                <img src="images/totoro-horizontal.jpg">
              </div>
              <div class="content">
                <div class="header">My Neighbor Totoro</div>
                <div class="description">
                  Two sisters move to the country with their father in order to be closer to their hospitalized mother, and discover the surrounding trees are inhabited by magical spirits.
                </div>
              </div>
              <div class="ui blue button">
                <i class="flaticon-outcoming icon"></i>
                Baca
              </div>
            </div>
          </div>
            
          <div class="column">
            <div class="ui card">
              <div class="image">
                <img src="images/totoro-horizontal.jpg">
              </div>
              <div class="content">
                <div class="header">My Neighbor Totoro</div>
                <div class="description">
                  Two sisters move to the country with their father in order to be closer to their hospitalized mother, and discover the surrounding trees are inhabited by magical spirits.
                </div>
              </div>
              <div class="ui blue button">
                <i class="flaticon-outcoming icon"></i>
                Baca
              </div>
            </div>
          </div>

          <div class="column">
            <div class="ui card">
              <div class="image">
                <img src="images/totoro-horizontal.jpg">
              </div>
              <div class="content">
                <div class="header">My Neighbor Totoro</div>
                <div class="description">
                  Two sisters move to the country with their father in order to be closer to their hospitalized mother, and discover the surrounding trees are inhabited by magical spirits.
                </div>
              </div>
              <div class="ui blue button">
                <i class="flaticon-outcoming icon"></i>
                Baca
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   
  <div class="ui vertical segment">
    <div class="ui stackable center aligned page grid">
      <div class="row">
        <div class="eight wide column">
          <h3 class="subscribe-header">Berlangganan Website kusekolah</h3> 
          <div class="ui horizontal divider"><i class="flaticon-mail icon"></i></div>
            <p class="ui centered lead large">Ikuti informasi terkini dari kusekolah via email</p>
          <br/>
        </div>
      </div>
      <div class="ui centered page grid">  
        <div class="ui form eight wide subscribe column">
          <div class="field">
            <div class="ui fluid action input">
              <input placeholder="Email..." type="text">
              <div class="ui button" onclick="window.location.href='follow.php'">Berlangganan</div>
            </div>
          </div>
        </div>
      </div>         
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