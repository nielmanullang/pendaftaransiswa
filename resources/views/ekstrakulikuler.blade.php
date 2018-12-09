<head>
<title>YAYASAN DARUNNA’IM YAPIA</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="assets/font/font.css" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css" media="screen" />

</head>
<body>
<div class="body_wrapper">
  <div class="center">
    <div class="header_area">
      <center><a href="#"><img src="images/Logo_Fixed.png" alt="" /></a></center>
      <center><b><h2>YAYASAN DARUNNA’IM YAPIA</h2></b></center>
    </div>
    <br>
    <div class="main_menu_area">
        <ul id="nav">
          <li><a href="/">Beranda</a></li>
          <li><a href="#">Berita</a>
            <ul>
                <li><a href="/ekstrakulikuler">Ekstrakulikuler</a></li> 
            </ul>
          </li>
          <li><a href="/register">Pendaftaran</a>
            <ul>
                <li><a href="/informasi-pendaftaran">Informasi Pendaftaran</a></li>
                <li><a href="/register">Formulir Pendaftaran</a></li>
            </ul>
          </li>
          <li><a href="#">Profil</a>
            <ul>
              <li><a href="/tentang-kami">Tentang Kami</a></li>
              <li><a href="/visi-misi">Visi dan Misi</a></li>
            </ul>
          </li>
          @if(Auth::user() != null)
          <li>            
              <a href="/tests">Kuis</a>
          </li>
          @endif
          
          <li>
              @if(Auth::user() != null)
                  <a href="#logout" onclick="$('#logout').submit();">Keluar</a>
              @else
                  <a href="/login" onclick="$('login').submit();">Masuk</a>
              @endif
          </li>
        </ul>
      </div>
    <div class="slider_area">
      <div class="slider">
        <ul class="bxslider">
          <li><img src="quickadmin/images/home1.jpg" alt="" title="Slider caption text" /></li>
          <li><img src="quickadmin/images/home2.jpg" alt="" title="Slider caption text" /></li>
          <li><img src="quickadmin/images/home3.jpg" alt="" title="Slider caption text" /></li>
        </ul>
      </div>
    </div>
    <div class="content_area">
        <div class="main_content floatleft">
          <div class="left_coloum floatleft">
            <div class="single_left_coloum_wrapper">
              <h2 class="title">Ekstrakulikuler</h2>
              <div class="single_left_coloum floatleft"> <img src="quickadmin/images/padus.jpg" alt="" />
                <h3>Paduan Suara (PADUS)</h3>
                <p>Parung-Bogor dalam rangka menyambut HUT RI yang Ke - 71. Merdekaaaaa!!!</p>
                <a class="readmore" href="#"></a> </div>
              <div class="single_left_coloum floatleft"> <img src="quickadmin/images/pramuka.jpg" alt="" />
                <h3>Pramuka</h3>
                <p>SMP PGRI 5 Bogor pada Lomba MAN 2 Bogor 2015 ( Alhamdulillah Generasi baru, Kelas 7 dan 8 melaksanakan kegiatan perdana dan meraih prestasi Juara 2)</p>
                <a class="readmore" href="#"></a> </div>
              <div class="single_left_coloum floatleft"> <img src="quickadmin/images/futsal.jpg" alt="" />
                <h3>Futsal</h3>
                <p>CACO Open Tournament Futsal ditutup dengan sambutan perwakilan SMKN 13, dan penyerahan hadiah kepada para pemenang.</p>
                <a class="readmore" href="#"></a> </div>
            </div>
          </div>
          <div class="right_coloum floatright">
            <div class="single_right_coloum">
              <h2 class="title">Prestasi</h2>
              <ul>
                <li>
                  <div class="single_cat_right_content">
                    <p class="single_cat_right_content_meta">Tahun 2012</p>
                    <h3>Juara 1 Lomba pidato Bahasa Indonesia tingkat KKM 1 MTsN Parung</h3>
                  </div>
                </li>
                <li>
                    <div class="single_cat_right_content">
                      <p class="single_cat_right_content_meta">Tahun 2015</p>
                      <h3>Juara 1 Lomba kaligrafi tingkat Yayasan</h3>
                    </div>
                  </li>
                  <li>
                      <div class="single_cat_right_content">
                        <p class="single_cat_right_content_meta">Tahun 2015</p>
                        <h3>Juara 2 Lomba cerdas cermat tingkat Yayasan</h3>
                      </div>
                  </li>
              </ul>
            </div> 
          </div>
        </div>
        <div class="sidebar floatright">
          <div class="single_sidebar">
            <div class="popular">
              <h2 class="title">Sertifikat Akreditasi</h2>
              Gambar sertifikat akreditasi here...
            </div>
          </div>
      </div>
    </div>  
    <div class="footer_top_area">
        <center><a href="#"><img src="images/Logo_Footer.png" alt="" /></a></center>
        <br>
        <center><span><b><font size="4">Kontak Kami</font></b></span></center></br>
        <center><span><font size="3">Jl. YAPIA Desa Waru Jaya  RT. 03/03 Parung-Bogor</font></span></center></br>
        <center><span><font size="3">Telp : 081289705595/087874785151</font></span></center>
    </div>
    <div class="footer_bottom_area">
      <div class="footer_menu">
        <center>
        <ul id="f_menu">
          <li><a href="#">Beranda</a></li>
          <li><a href="#">Berita</a></li>
          <li><a href="#">Pendaftaran</a></li>
          <li><a href="#">Profil</a></li>
          <li><a href="#">Masuk</a></li>
        </ul>
        </center>
      </div>
      <div class="copyright_text">
        <p>Copyright &copy; YAYASAN DARUNNA’IM YAPIA</a></p>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="assets/js/jquery-min.js"></script> 
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.bxslider.js"></script> 
<script type="text/javascript" src="assets/js/selectnav.min.js"></script> 
<script type="text/javascript">
selectnav('nav', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true
});
</script>
</body>
</html>