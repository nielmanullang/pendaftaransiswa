<head>
<title>Visi dan Misi</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="assets/font/font.css" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css" media="screen" />

<style>
    p.ex1 {
        border: 0px solid red; 
        padding-bottom: 10px;
    }
</style>

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
          <li><a href="#">Pendaftaran</a>
            <ul>
                <li><a href="informasi_pendaftaran.html">Informasi Pendaftaran</a></li>
                <li><a href="/register">Formulir Pendaftaran</a></li>
            </ul>
          </li>
          <li><a href="#">Profil</a>
            <ul>
              <li><a href="/tentang-kami">Tentang Kami</a></li>
              <li><a href="/visi-misi">Visi dan Misi</a></li>
            </ul>
          </li>
          <li>
              @if(Auth::user() != null)
                  <a href="#logout" onclick="$('#logout').submit();">Keluar</a>
              @else
                  <a href="/login" onclick="$('login').submit();">Masuk</a>
              @endif
          </li>
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
        <h2>Tentang Kami</h2>
        <p>Penulis &nbsp; <b>Pengelola</b> - 22 Juni 2018 </p>
        <div>
        </br>
        <p align="justify"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTS DARUNNA’IM YAPIA diharapkan dapat mendidik dan mencetak santri/santriwati  dan alumni yang berakhlak mulia, cerdas, berwawasan dan berketrampilan, sehingga menjadi anak yang shalih-shalihah yang dapat berbakti kepada orang  tua, nusa, bangsa dan agama serta dapat membanggakan bangsa dan Negara.</b></p>
      </br>
      <p align="justify"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seiring perkembangan zaman yang begitu pesat diharapkan para santri menjadi yang terdepan dalam mengisi pembangunan ini dengan baik sehingga para santri kedepan tidak bisa dipandang sebelah mata oleh sebagian banyak orang, oleh karena itu target yang ingin dicapai mudah-mudahan dapat terealisasi dengan baik sehingga dimasa yang akan datang akan  tumbuh insane muda yang mengisi pembangunan ini dengan Iman yang mantap.</b></p>  
    </br></br>
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
            <li><a href="/register">Pendaftaran</a></li>
            <li><a href="#">Profil</a></li>
             <li>
              @if(Auth::user() != null)
                  <a href="#logout" onclick="$('#logout').submit();">Keluar</a>
              @else
                  <a href="/login" onclick="$('login').submit();">Masuk</a>
              @endif
          </li>
          </ul>
        </center>
      </div>
      <div class="copyright_text">
        <p>Copyright &copy; YAYASAN DARUNNA’IM YAPIA</a></p>
      </div>
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