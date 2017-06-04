<?php
session_start();
if (isset($_SESSION['username'])) 
  {
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
              <p class="ui centered lead">Mengelola Data Kepsek</p>
            <br>
          </div>
        </div>  
      </div>
    </div>
  </div>

  <!-- Isi Body -->
  <div class="ui horizontal divider"><i class="flaticon-mail icon"></i></div>

	<?php
		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = '';
		$batas = 5;


		 
		$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
		if(! $koneksi )
		{
		  die('Gagal Koneksi: ' . mysql_error());
		}
		mysql_select_db('dapodik');
		/* Get total number of records */
		$sql = "SELECT count(npsn) FROM profil ";
		$ambildata = mysql_query( $sql, $koneksi );
		if(! $ambildata )
		{
		  die('Gagal Ambil Data: ' . mysql_error());
		}
		$row = mysql_fetch_array($ambildata, MYSQL_NUM );
		$hitung = $row[0];
		 
		if( isset($_GET{'page'} ) )
		{
		   $page = $_GET{'page'} + 1;
		   $offset = $batas * $page ;
		}
		else
		{
		   $page = 0;
		   $offset = 0;
		}
		$left_rec = $hitung - ($page * $batas);
		 
		$sql = "SELECT npsn, kepala_sekolah, nbm, sk_pengangkatan, tmt_jabatan ".
		       "FROM kepsek ".
		       "LIMIT $offset, $batas";
		 
		$ambildata = mysql_query( $sql, $koneksi );
		if(! $ambildata )
		{
		  die('Gagal Ambil Data: ' . mysql_error());
		}
		while($row = mysql_fetch_array($ambildata, MYSQL_ASSOC))
		{
		    ?><div class="ui container">
    <table class="ui selectable celled table">
      <thead>
      <tr>
        <th>NPSN</th>
        <th>Nama</th>
        <th>Nbm</th>
        <th>SK-Pengangkatan</th>
        <th>Tamat Jabatan</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td><?php echo $data->npsn;?></td>
        <td><?php echo $data->kepala_sekolah;?></td>
        <td><?php echo $data->nbm;?></td>
        <td><?php echo $data->sk_pengangkatan;?></td>
        <td><?php echo $data->tmt_jabatan;?></td>
      </tr>
        <?php 

        endwhile;?>
      </tbody>
      </table>
      </div><?php
		    echo "NPSN : {$row['npsn']}  <br> ".
		         "Kepala Sekolah : {$row['kepala_sekolah']} <br> ".
		         "NBM : {$row['nbm']} <br> ".
		         "SK Pengangkatan : {$row['sk_pengangkatan']} <br>".
		         "Tamat Jabatan : {$row['tmt_jabatan']} <br>"
		         ;
		} 
		 
		if( $page > 0 )
		{
		   $last = $page - 2;
		   echo "<a href=\"index.php?page=$last\">10 Data sebelumnya</a> |";
		   echo "<a href=\"index.php?page=$page\">10 Data lagi</a>";
		}
		else if( $page == 0 )
		{
		   echo "<a href=\"index.php?page=$page\">10 Data lagi</a>";
		}
		else if( $left_rec < $batas )
		{
		   $last = $page - 2;
		   echo "<a href=\"index.php?page=$last\">10 Data sebelumnya</a>";
		}

	?>
		<form action="index.php" method="post">
		<input type="text" name="endi" ></input>

		<button onclick="window.location.href='index.php?page=6'">NEXT</button>
		</form>
  <div class="ui container">
    <table class="ui selectable celled table">
      <thead>
      <tr>
        <th>NPSN</th>
        <th>Nama</th>
        <th>Nbm</th>
        <th>SK-Pengangkatan</th>
        <th>Tamat Jabatan</th>
      </tr>
      </thead>
      <tbody>
        <?php while($data = mysql_fetch_object($sql)): ?>
      <tr>
        <td><?php echo $data->npsn;?></td>
        <td><?php echo $data->kepala_sekolah;?></td>
        <td><?php echo $data->nbm;?></td>
        <td><?php echo $data->sk_pengangkatan;?></td>
        <td><?php echo $data->tmt_jabatan;?></td>
      </tr>
        <?php 

        endwhile;?>
      </tbody>
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