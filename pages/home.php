<?php
if (strpos($_SERVER['REQUEST_URI'], "pages")) {
     exit(header("Location:../index.php"));
}

$besok                  = date("Y-m-d", strtotime("+1 day"));
$thnbesok               = substr($besok, 0, 4);
$blnbesok               = substr($besok, 5, 2);
$tglbesok               = substr($besok, 8, 2);
?>

<!-- <section id="home" class="slider" data-stellar-background-ratio="0.5">
      <div class="container">
           <div class="row">
                 <div class="owl-carousel owl-theme">
                      <div class="item item-first">
                           <div class="caption">
                                <div class="col-md-offset-1 col-md-10">
                                     <h3>Mari buat hidupmu lebih bahagia</h3>
                                     <h1>Hidup Sehat</h1>
                                     <a href="#team" class="section-btn btn btn-default btn-kuning smoothScroll">Temui Dokter Kami</a>
                                </div>
                           </div>
                      </div>
                      <div class="item item-second">
                           <div class="caption">
                                <div class="col-md-offset-1 col-md-10">
                                     <h3>Kami usahakan yang terbaik untuk Anda</h3>
                                     <h1>Jadikan Kami Sahabat Anda</h1>
                                     <a href="#about" class="section-btn btn btn-default btn-kuning smoothScroll">Lebih Banyak Tentang Kami</a>
                                </div>
                           </div>
                      </div>
                      <div class="item item-third">
                           <div class="caption">
                                <div class="col-md-offset-1 col-md-10">
                                     <h3>Jangan sampai waktu anda bersama keluarga menjadi terganggu</h3>
                                     <h1>Manfaatkan Kesehatan Anda</h1>
                                     <a href="#news" class="section-btn btn btn-default btn-kuning smoothScroll">Lihat Jadwal Dokter</a>
                                </div>
                           </div>
                      </div>
                 </div>
           </div>
      </div>
 </section> -->

<!-- ABOUT -->
<section id="about">
     <section id="appointment">
          <div class="container" style="background: rgba(240, 240, 240, 0.9); padding:5px 20px 35px 20px">
               <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                         <div class="about-info" id="info_pengisian">
                              <h2>TURORIAL PENGISIAN</h2>
                              <!-- <img src="images/tutorial.gif" class="img-responsive" alt="" style="width: 70%; height:70%;" /> -->
                              <!-- <h2 class="wow fadeInUp" data-wow-delay="0.6s">Selamat datang di Pusat Kesehatan Anda</h2> -->
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p style="text-align: justify; color:#000000; text-shadow: 0px 0px 0.5px #000000;">BISMILLAH YAWLOHHHH</p>
                                   <!-- <p style="text-align: justify; color:#000000; text-shadow: 0px 0px 0.5px #000000;"><?= $_SESSION["nama_instansi"] . " merupakan salah satu rumah sakit umum di wilayah " . $_SESSION["kabupaten"] . " yang berkedudukan di " . $_SESSION["alamat_instansi"] . ". " . $_SESSION["nama_instansi"] . " merupakan perkembangan dari balai pengobatan, klinik dan berada dibawah YASKI. " . $_SESSION["nama_instansi"] . " mendapat izin operasional dengan Kode PPK " . $_SESSION["kode_ppkkemenkes"] . " sejak bulan November 2009 dan diresmikan tanggal 21 februari 2010. " . $_SESSION["nama_instansi"] . " dalam memberikan pelayanannya mengambil filosofi  dasar bahwa pelayanan kesehatan yang baik itu tidak harus mahal dan kalau bisa, harus tidak mahal. Filosofi dasar yang kedua adalah bersama yang tidak mampu kita harus maju. Hal ini memiliki arti bahwa " . $_SESSION["nama_instansi"] . " harus mampu memajukan dirinya dan pihak-pihak yang berhubungan dengan dirinya menuju arah yang lebih baik." ?></p> -->
                              </div>
                              <figure class="wow fadeInUp" data-wow-delay="1s" style="width: 300px;">
                                   <img src="images/logo2022.png" class="img-responsive" alt="" />
                                   <!-- <figcaption>
                                        <h3>dr. H. GABRIL TAUFIQ BASRI, Sp.PD., FINASIM</h3>
                                        <p style="color:#000000; text-shadow: 0px 0px 0.5px #000000;">Direktur Utama</p>
                                   </figcaption> -->
                              </figure>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 centered">
                         <div id="ptombol">
                              <div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                                   <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                             <button class="btn btn-info btn-lg" id="plama" style="width: 100%; height: ; margin-bottom:15px;">Form Pasien Lama</button> 
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                             <button class="btn btn-warning btn-lg" id="pbaru" style="width: 100%; height: ; margin-bottom:15px;">Form Pasien Baru</button> 
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                             <button class="btn btn-success btn-lg" id="cek_booking" style="width: 100%; height: ; margin-bottom:15px;">Cek Booking</button>
                                        </div>
                                   </div>
                                   <!-- <a href="index.php?act=LoginPasien" class="btn btn-success" style="text-align:center; padding-left:35px; padding-right:35px;">Log In</a> -->
                              </div>
                         </div>
                    </div>
                    
                    <section id="app-form-cekbook">
                         <div class="col-md-12 col-sm-12" id="cek_book">
                              <?php
                                   // if(strpos($_SERVER['REQUEST_URI'],"pages")){
                                   //      exit(header("Location:../index.php"));
                                   // }

                                   $btnCekBooking=isset($_POST['btnCekBooking'])?$_POST['btnCekBooking']:NULL;
                                   if (isset($btnCekBooking)) {
                                        $nohp               = trim(isset($_POST['nohp']))?trim($_POST['nohp']):NULL;
                                        $nohp               = cleankar($nohp);
                                        $nobooking          = trim(isset($_POST['nobooking']))?trim($_POST['nobooking']):NULL;
                                        $nobooking          = cleankar($nobooking);
                                        $querycekbooking    = bukaquery("select count(no_booking) as noboking,if(tanggal>current_date,'aman','kadaluarsa') as tanggal,status from booking_periksa where no_booking='$nobooking' and no_telp='$nohp'");
                                        if($rsquerycekbooking = mysqli_fetch_array($querycekbooking)) {
                                             if($rsquerycekbooking["noboking"]==0){
                                                  echo "<section id='news' data-stellar-background-ratio='2.5'>
                                                       <div class='container'>
                                                            <div class='row'>
                                                                 <div class='col-md-12 col-sm-12'>
                                                                      <div class='about-info wow fadeInUp' data-wow-delay='0.1s'>
                                                                           <h3>Booking tidak ditemukan</h3><br>
                                                                           Silahkan masukkan No. Booking dan No. Hp/Telp dengan benar... !!! 
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       </section>";
                                                  JSRedirect2("index.php?act=CekBooking",4);
                                             }else if($rsquerycekbooking["noboking"]>0){
                                                  if($rsquerycekbooking["tanggal"]=="kadaluarsa"){
                                                       echo "<section id='news' data-stellar-background-ratio='2.5'>
                                                            <div class='container'>
                                                                 <div class='row'>
                                                                      <div class='col-md-12 col-sm-12'>
                                                                           <div class='about-info wow fadeInUp' data-wow-delay='0.1s'>
                                                                           <h3>Booking kadaluarsa</h3><br>
                                                                           Silahkan melakukan booking ulang... !!! 
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                            </section>";
                                                       JSRedirect2("index.php?act=Home",4);
                                                  }else{
                                                       if($rsquerycekbooking["status"]=="Belum Dibalas"){
                                                       echo "<section id='news' data-stellar-background-ratio='2.5'>
                                                                 <div class='container'>
                                                                      <div class='row'>
                                                                           <div class='col-md-12 col-sm-12'>
                                                                           <div class='about-info wow fadeInUp' data-wow-delay='0.1s'>
                                                                                <h3>No. Booking $nobooking</h3><br>
                                                                                Mohon maaf, booking Anda masih menunggu peninjauan dari admin Kami. Silahkan cek kembali beberapa saat lagi   
                                                                           </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 </section>";
                                                       JSRedirect2("index.php?act=CekBooking",7);
                                                       }else if($rsquerycekbooking["status"]=="Ditolak"){
                                                       $balasan = getOne2("select balasan from booking_periksa_balasan where no_booking='$nobooking'");
                                                       echo "<section id='news' data-stellar-background-ratio='2.5'>
                                                                 <div class='container'>
                                                                      <div class='row'>
                                                                           <div class='col-md-12 col-sm-12'>
                                                                           <div class='about-info wow fadeInUp' data-wow-delay='0.1s'>
                                                                                <h3>No. Booking $nobooking</h3><br>
                                                                                Mohon maaf, booking Anda ditolak".($balasan==""?"":". $balasan").". Silahkan buat janji/booking kembali untuk tanggal/poli yang lain
                                                                           </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 </section>";
                                                       JSRedirect2("index.php?act=Home#appointment",14);
                                                       }else if($rsquerycekbooking["status"]=="Diterima"){
                                                       $querycekbookingperiksa = bukaquery("select booking_registrasi.tanggal_booking,booking_registrasi.jam_booking,booking_registrasi.no_rkm_medis,booking_periksa.nama,booking_periksa.alamat,booking_periksa.no_telp,booking_periksa.email,booking_registrasi.tanggal_periksa,dokter.nm_dokter,poliklinik.nm_poli,booking_registrasi.no_reg,aes_decrypt(personal_pasien.password,'windi') as pass from booking_registrasi inner join dokter on booking_registrasi.kd_dokter=dokter.kd_dokter inner join poliklinik on booking_registrasi.kd_poli=poliklinik.kd_poli inner join booking_periksa_diterima on booking_periksa_diterima.no_rkm_medis=booking_registrasi.no_rkm_medis inner join booking_periksa on booking_periksa_diterima.no_booking=booking_periksa.no_booking inner join personal_pasien on booking_registrasi.no_rkm_medis=personal_pasien.no_rkm_medis where booking_periksa.no_booking='$nobooking'"); 
                                                       if($rsquerycekbookingperiksa = mysqli_fetch_array($querycekbookingperiksa)) {
                                                            $balasan = getOne2("select balasan from booking_periksa_balasan where no_booking='$nobooking'");
                                                            echo "<section id='news' data-stellar-background-ratio='2.5'>
                                                                      <div class='container'>
                                                                           <div class='row'>
                                                                           <div class='col-md-12 col-sm-12'>
                                                                                <div class='about-info wow fadeInUp' data-wow-delay='0.1s'>
                                                                                     <h3>No. Booking $nobooking</h3><br>
                                                                                     Booking Anda diterima, admin Kami sudah melakukan verifikasi data Anda".($balasan==""?"":".<br>$balasan").".<br><br>
                                                                                     <div class='news-thumb wow fadeInUp' data-wow-delay='0.2s'>
                                                                                          <br>
                                                                                          <b>
                                                                                          <table width='95%' border='0' align='center'>
                                                                                               <tr><td width='29%' align='left' valign='top'>Tgl. Booking</td><td valign='top' width='3%' align='center'>:</td><td width='68%' align='left' valign='top'>".$rsquerycekbookingperiksa["tanggal_booking"]." ".$rsquerycekbookingperiksa["jam_booking"]."</td></tr>
                                                                                               <tr><td width='29%' align='left' valign='top'>Tgl. Periksa</td><td valign='top' width='3%' align='center'>:</td><td width='68%' align='left' valign='top'>".$rsquerycekbookingperiksa["tanggal_periksa"]."</td></tr>
                                                                                               <tr><td width='29%' align='left' valign='top'>No.Rekam Medis</td><td valign='top' width='3%' align='center'>:</td><td width='68%' align='left' valign='top'>".$rsquerycekbookingperiksa["no_rkm_medis"]."</td></tr>
                                                                                               <tr><td width='29%' align='left' valign='top'>Nama Pasien</td><td valign='top' width='3%' align='center'>:</td><td width='68%' align='left' valign='top'>".$rsquerycekbookingperiksa["nama"]."</td></tr>
                                                                                               <tr><td width='29%' align='left' valign='top'>No. Hp/Telp</td><td valign='top' width='3%' align='center'>:</td><td width='68%' align='left' valign='top'>".$rsquerycekbookingperiksa["no_telp"]."</td></tr>
                                                                                               <tr><td width='29%' align='left' valign='top'>E-Mail</td><td valign='top' width='3%' align='center'>:</td><td width='68%' align='left' valign='top'>".$rsquerycekbookingperiksa["email"]."</td></tr>
                                                                                               <tr><td width='29%' align='left' valign='top'>Alamat</td><td valign='top' width='3%' align='center'>:</td><td width='68%' align='left' valign='top'>".$rsquerycekbookingperiksa["alamat"]."</td></tr>
                                                                                               <tr><td width='29%' align='left' valign='top'>Unit/Poliklinik</td><td valign='top' width='3%' align='center'>:</td><td width='68%' align='left' valign='top'>".$rsquerycekbookingperiksa["nm_poli"]."</td></tr>
                                                                                               <tr><td width='29%' align='left' valign='top'>Dokter</td><td valign='top' width='3%' align='center'>:</td><td width='68%' align='left' valign='top'>".$rsquerycekbookingperiksa["nm_dokter"]."</td></tr>
                                                                                               <tr><td width='29%' align='left' valign='top'>No.Antri Poli</td><td valign='top' width='3%' align='center'>:</td><td width='68%' align='left' valign='top'>".$rsquerycekbookingperiksa["no_reg"]."</td></tr>
                                                                                               <tr><td width='29%' align='left' valign='top'>Password Login</td><td valign='top' width='3%' align='center'>:</td><td width='68%' align='left' valign='top'>".$rsquerycekbookingperiksa["pass"]."</td></tr>
                                                                                          </table>
                                                                                          </b>
                                                                                          <br>
                                                                                     </div>                
                                                                                     <br>Silahkan hapalkan nomor rekam medis dan password Anda, dan Anda wajib menjaga kerahasiaannya. Klik <a href='index.php?act=LoginPasien' class='btn btn-success' >Log In</a> dan gunakan nomor rekam medis serta password Anda untuk masuk ke aplikasi EPasien kami. Untuk menjaga keamanan data, silahkan ubah password default yang sudah kami berikan di aplikasi EPasien setelah anda login.                     
                                                                                </div>
                                                                           </div>
                                                                           </div>
                                                                      </div>
                                                                 </section>";
                                                       }else{
                                                            echo "<section id='news' data-stellar-background-ratio='2.5'>
                                                                      <div class='container'>
                                                                           <div class='row'>
                                                                           <div class='col-md-12 col-sm-12'>
                                                                                <div class='about-info wow fadeInUp' data-wow-delay='0.1s'>
                                                                                     <h3>Gagal</h3><br> 
                                                                                     Terjadi kesalahan saat pengecekan booking
                                                                                </div>
                                                                           </div>
                                                                           </div>
                                                                      </div>
                                                                 </section>";
                                                            JSRedirect2("index.php?act=CekBooking",4);
                                                       }
                                                       }
                                                  }
                                             }
                                        }else{
                                             echo "<section id='news' data-stellar-background-ratio='2.5'>
                                                       <div class='container'>
                                                       <div class='row'>
                                                            <div class='col-md-12 col-sm-12'>
                                                                 <div class='about-info wow fadeInUp' data-wow-delay='0.1s'>
                                                                      <h3>Gagal</h3><br> 
                                                                      Terjadi kesalahan saat pengecekan booking
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       </div>
                                                  </section>";
                                             JSRedirect2("index.php?act=CekBooking",4);
                                        }
                                             
                                   }else{
                                        echo "<div class=\"container\">
                                                  <div class=\"row\">
                                                       <div class=\"col-md-12 col-sm-12\">
                                                            <form id=\"appointment-form-book\" role=\"form\" onsubmit=\"return validasiIsi();\" method=\"post\" action=\"\">
                                                                 <div class=\"section-title wow fadeInUp\" data-wow-delay=\"0.4s\">
                                                                      <h2><center>Cek Status Booking</center></h2>
                                                                 </div>
                                                                 <div class=\"wow fadeInUp\" data-wow-delay=\"0.8s\">
                                                                      <div class=\"col-md-12 col-sm-12\">
                                                                           <label for=\"nobooking\">Nomor Booking</label>
                                                                           <input type=\"text\" class=\"form-control\" onkeydown=\"setDefault(this, document.getElementById('MsgIsi1Book'));\" id=\"TxtIsi1Book\" pattern=\"[A-Z0-9]{1,65}\" title=\" A-Z0-9 (Maksimal 65 karakter)\" required name=\"nobooking\" placeholder=\"Nomor Booking\" autocomplete=\"off\" autofocus/>
                                                                           <span id=\"MsgIsi1Book\" style=\"color:#CC0000; font-size:10px;\"></span>
                                                                      </div>
                                                                      <div class=\"col-md-12 col-sm-12\">
                                                                           <label for=\"nohp\">Nomor HP/Telp</label>
                                                                           <input type=\"tel\" class=\"form-control\" onkeydown=\"setDefault(this, document.getElementById('MsgIsi2Book'));\" id=\"TxtIsi2Book\" pattern=\"[0-9]{1,65}\" title=\" 0-9 (Maksimal 65 karakter)\" required name=\"nohp\" placeholder=\"Nomor HP/Telp\" autocomplete=\"off\" />
                                                                           <span id=\"MsgIsi2Book\" style=\"color:#CC0000; font-size:10px;\"></span>
                                                                      </div>     
                                                                      <div class=\"col-md-12 col-sm-12\">
                                                                           <button type=\"submit\" class=\"form-control\" id=\"cf-submit-book\" name=\"btnCekBooking\">Cek Status</button>
                                                                      </div>
                                                                 </div>
                                                            </form>
                                                       </div>
                                                  </div>
                                             </div>";
                                   }
                              ?>
                         </div>
                    </section>

                    <section id="app-form-pbaru">
                         <div class="col-md-12 col-sm-12">
                              <form id="appointment-form" role="form" method="post" action="index.php?act=PendaftaranPeriksa" enctype=multipart/form-data>
                                   <div class="about-info wow fadeInUp" data-wow-delay="0.4s">
                                        <h2>
                                             <center>Buat Janji/Booking</center>
                                        </h2>
                                        <div class="col-md-6 col-sm-6">
                                             <label for="nama">Nama Pasien</label>
                                             <input type="text" class="form-control text-uppercase" oninvalid="this.setCustomValidity('BISA KALI DIISI NAMANYAA')" oninput="setCustomValidity('')" id="TxtIsi1Nam" pattern="[a-zA-Z0-9, ./@_]{1,40}" title=" a-zA-Z0-9, ./@_ (Maksimal 40 karakter)" required name="nama" maxlength="40" placeholder="Nama Pasien" autocomplete="off" />
                                             <span id="MsgIsi1Nam" style="color:#CC0000; font-size:10px;"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                             <label for="nik">NIK Pasien</label>
                                             <input type="text" class="form-control text-uppercase" oninvalid="this.setCustomValidity('NIK KOSONG ATAU SALAH BRADER')" oninput="setCustomValidity('')" id="TxtIsi19" pattern="[0-9]{1,40}" title="  0-9 (Maksimal 16 karakter)" required name="nik" maxlength="40" placeholder="NIK Pasien" autocomplete="off" />
                                             <span id="MsgIsi19" style="color:#CC0000; font-size:10px;"></span>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                             <label for="alamat">Alamat Pasien</label>
                                             <input type="text" class="form-control text-uppercase" oninvalid="this.setCustomValidity('BISA KALI DIISI ALAMATNYAA')" oninput="setCustomValidity('')" id="TxtIsi2Alamat" pattern="[a-zA-Z0-9, ./@_]{1,200}" title=" a-zA-Z0-9, ./@_ (Maksimal 200 karakter)" required name="alamat" maxlength="200" placeholder="Alamat Pasien" autocomplete="off" />
                                             <span id="MsgIsi2Alamat" style="color:#CC0000; font-size:10px;"></span>
                                        </div>
                                        <!-- <div class="col-md-12 col-sm-12">
                                                  <label for="email">Email Pasien</label>
                                                  <input type="email" class="form-control" onkeydown="setDefault(this, document.getElementById('MsgIsi4'));" id="TxtIsi4" pattern="[a-zA-Z0-9, ./@_]{1,50}" title=" a-zA-Z0-9, ./@_ (Maksimal 50 karakter)" required name="email" maxlength="50" placeholder="Email Pasien" autocomplete="off" />
                                                  <span id="MsgIsi4" style="color:#CC0000; font-size:10px;"></span>
                                             </div> -->
                                        <div class="col-md-6 col-sm-6">
                                             <label for="nohp">Nomor HP Penanggung Jawab</label>
                                             <input type="tel" class="form-control" oninvalid="this.setCustomValidity('BISA KALI DIISI NOMOR HP-NYAA')" oninput="setCustomValidity('')" id="TxtIsi3" pattern="[0-9]{1,40}" title=" 0-9 (Maksimal 13 karakter)" required name="nohp" maxlength="40" placeholder="NOMOR HP PENANGGUNG JAWAB" autocomplete="off" />
                                             <span id="MsgIsi3" style="color:#CC0000; font-size:10px;"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                             <label for="cbayar">Cara Bayar</label>
                                             <select name="cbayar" id="cbayar" class="form-control" data-toggle="modal"
                                                  data-target="#staticBackdrop">
                                                  <option disabled selected hidden value="">PILIH CARA BAYAR</option>
                                                  <?php
                                                       unset($_SESSION["cbayar"]);
                                                       if (!isset($_SESSION["cbayar"])) {
                                                            $datacbayar   = "";
                                                            $querycbayar  = bukaquery("SELECT * from tabel_reference_jenis_bayar group by cara_bayar");
                                                            // $rsquerypoli = mysqli_fetch_array($querypoli);
                                                            // ekopre($rsquerypoli);
                                                            while ($rsquerycbayar = mysqli_fetch_array($querycbayar)) {
                                                                 $datacbayar = $datacbayar . "<option value='$rsquerycbayar[0]'>$rsquerycbayar[1]</option>";
                                                            }
                                                            $_SESSION["cbayar"] = $datacbayar;
                                                       }
                                                       echo $_SESSION["cbayar"];
                                                  ?>
                                             </select>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                             <label for="tanggal">Pilih Tanggal</label>
                                             <table width="100%">
                                                  <tr>
                                                       <td>
                                                            <select name="TglDaftar" class="form-control">
                                                                 <?php
                                                                      echo "<option>$tglbesok</option>";
                                                                      // loadTgl2();
                                                                      ?>
                                                            </select>
                                                       </td>
                                                       <td>
                                                            <select name="BlnDaftar" class="form-control">
                                                                 <?php
                                                                      echo "<option>$blnbesok</option>";
                                                                      // loadBln2();
                                                                      ?>
                                                            </select>
                                                       </td>
                                                       <td>
                                                            <select name="ThnDaftar" class="form-control">
                                                                 <?php
                                                                      echo "<option>$thnbesok</option>";
                                                                      // loadThn4();
                                                                      ?>
                                                            </select>
                                                       </td>
                                                  </tr>
                                             </table>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                             <label for="poli">Poliklinik</label>
                                             <select name="poli" class="form-control">
                                                  <option disabled selected hidden value="">PILIH POLI TUJUAN</option>
                                                  <?php
                                                       if (!isset($_SESSION["poli"])) {
                                                            $datapoli   = "";
                                                            $querypoli  = bukaquery("SELECT * from poliklinik order by nm_poli");
                                                            // $rsquerypoli = mysqli_fetch_array($querypoli);
                                                            // ekopre($rsquerypoli);
                                                            while ($rsquerypoli = mysqli_fetch_array($querypoli)) {
                                                                 $datapoli = $datapoli . "<option value='$rsquerypoli[0]'>$rsquerypoli[1]</option>";
                                                            }
                                                            $_SESSION["poli"] = $datapoli;
                                                       }
                                                       echo $_SESSION["poli"];
                                                  ?>
                                             </select>
                                        </div>

                                        <!-- file default -->
                                        <div class="col-md-6 col-sm-6" id="uktp">
                                             <label for="alamat">Upload KTP</label>
                                             <input type="file" id="dktp" class="form-control" required name="upktp" oninvalid="this.setCustomValidity('BISA KALI DI-UPLOAD FOTO KTP-NYA')" oninput="setCustomValidity('')" />
                                             <!-- <span id="MsgIsi2" style="color:#CC0000; font-size:10px;"></span> -->
                                        </div>
                                        <div class="col-md-6 col-sm-6" id="ukj">
                                             <label for="alamat">Upload Kartu Jaminan Kesehatan</label>
                                             <input type="file" id="dkj" class="form-control text-uppercase" name="up_kj" />
                                             <!-- <span id="MsgIsi2" style="color:#CC0000; font-size:10px;"></span> -->
                                        </div>

                                        <!-- kode form untuk bpjs -->
                                        <div class="col-md-6 col-sm-6" id="srujuk" hidden>
                                             <label for="alamat">Upload Surat Rujukan</label>
                                             <input type="file" id="dsrujuk" class="form-control text-uppercase" name="up_rujuk" />
                                             <!-- <span id="MsgIsi2" style="color:#CC0000; font-size:10px;"></span> -->
                                        </div>
                                        <div class="col-md-6 col-sm-6" id="skontrol" hidden>
                                             <label for="alamat">Upload Surat Kontrol (Jika Ada)</label>
                                             <input type="file" id="dskontrol" class="form-control text-uppercase" name="up_kontrol"  />
                                             <!-- <span id="MsgIsi2" style="color:#CC0000; font-size:10px;"></span> -->
                                        </div>

                                        <!-- kode form untuk Pihak Ketiga -->
                                        <div class="col-md-12 col-sm-12" id="fgl" hidden>
                                             <label for="alamat">Upload Guarantee Letter</label>
                                             <input type="file" id="dgl" class="form-control text-uppercase" name="up_gl" />
                                             <!-- <span id="MsgIsi2" style="color:#CC0000; font-size:10px;"></span> -->
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                             <label for="pesan">Tambahan Pesan</label>
                                             <textarea class="form-control" rows="2" maxlength="400" oninvalid="this.setCustomValidity('BISA KALI DIISI PESAN KELUHANNYA')" oninput="setCustomValidity('')" id="TxtIsi5" required name="pesan" placeholder="TAMBAHAN PESAN" autocomplete="off"></textarea>
                                             <span id="MsgIsi5" style="color:#CC0000; font-size:10px;"></span>
                                        </div>
                                        <button type="SUBMIT" class="form-control" id="cf-submit-kirim-book" name="btnBooking">Kirimkan</button>
                                   </div>
                              </form>
                         </div>
                    </section>

                    <section id="app-form-plama">
                         <div class="col-md-12 col-sm-12" id="form_plama">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>
                                        <center>Log In Pasien</center>
                                   </h2>
                              </div>
                                   <!-- <div class="wow fadeInUp" data-wow-delay="0.8s">
                                             <div class="col-md-12 col-sm-12">
                                   Jika anda pasien lama atau pernah berobat sebelumnya, untuk nomor rekam medis dan password login bisa Anda tanyakan kepada petugas Kami saat Anda melakukan registrasi secara offline. Dan password bisa Anda ubah setelah login di aplikasi EPasien. Jika Anda pasien baru dan belum pernah periksa sebelumnya, silahkan melakukan <a href="index.php?act=Home#appointment"><b>booking</b></a> atau buat janji melalui menu utama EPasien ini. Setelah admin kami melakukan verifikasi data, Anda akan mendapat password login dan antrian periksa sesuai booking Anda.<br/><br/><br/>
                                   </div> -->
                                   <?php
                                        $BtnLogin=isset($_POST['BtnLogin'])?$_POST['BtnLogin']:NULL;
                                        if (isset($BtnLogin)) {
                                             if(@$_SESSION["Capcay"]!= getOne2("select aes_encrypt(".cleankar($_POST["inputcaptcha"]).",'windi')")){
                                                  echo "<form id=\"appointment-form-plama\" role=\"form\" method=\"post\" action=\"\" enctype=multipart/form-data>
                                                            <div class=\"col-md-12 col-sm-12\">
                                                                 <label for=\"norme\">Nomer Rekam Medis</label>
                                                                 <input type=\"password\" class=\"form-control\" name=\"norme\" oninvalid=\"this.setCustomValidity('KOSONGG BRADERR')\" oninput=\"setCustomValidity('')\" pattern=\"[A-Z0-9-]{1,65}\" title=\" A-Z0-9- (Maksimal 65 karakter)\" required placeholder=\"Masukkan Nomor Rekam Medis\" onkeydown=\"setDefault(this, document.getElementById('MsgIsi1'));\" id=\"TxtIsi1\" autocomplete=\"off\" autofocus/>
                                                                 <span id=\"MsgIsi1\" style=\"color:#CC0000; font-size:10px;\"></span>
                                                            </div>
                                                            <div class=\"col-md-12 col-sm-12\">
                                                                 <label for=\"passworde\">Konfirmasi Nomor Rekam Medis</label>
                                                                 <input type=\"password\" class=\"form-control\" name=\"passworde\" oninvalid=\"this.setCustomValidity('KOSONGG BRADERR')\" oninput=\"setCustomValidity('')\" required placeholder=\"Masukkan Nomor Rekam Medis\" onkeydown=\"setDefault(this, document.getElementById('MsgIsi2'));\" id=\"TxtIsi2\" autocomplete=\"off\" />
                                                                 <span id=\"MsgIsi2\" style=\"color:#CC0000; font-size:10px;\"></span>
                                                            </div>
                                                            <div class=\"col-md-12 col-sm-12\">
                                                                 <label for=\"captcha\">Captcha</label>
                                                                 <table width=\"100%\" border=\"0\">
                                                                      <tr>
                                                                      <td width=\"50%\" valign=\"top\">
                                                                           <img width=\"95%\" height=\"45px\" src=\"pages/captcha.php\" alt=\"gambar\" />
                                                                      </td>
                                                                      <td width=\"50%\">
                                                                           <input type=\"text\" class=\"form-control\" oninvalid=\"this.setCustomValidity('JANGAN KOSONNGG')\" oninput=\"setCustomValidity('')\" onkeydown=\"setDefault(this, document.getElementById('MsgIsi3Cap'));\" id=\"TxtIsi3Cap\" name=\"inputcaptcha\" pattern=\"[0-9]{1,6}\" title=\" 0-9 (Maksimal 6 karakter)\" required placeholder=\"Masukkan Captcha\" autocomplete=\"off\" />
                                                                      </td>
                                                                      </tr>
                                                                 </table>
                                                                 <span id=\"MsgIsi3Cap\" style=\"color:#CC0000; font-size:10px;\"></span>
                                                            </div>
                                                            <div class=\"col-md-12 col-sm-12\">
                                                                 <span style=\"color:#CC0000; font-size:12px;\">Captcha tidak sesuai, silahkan ulangi ...!</span><br/><br/>
                                                            </div>
                                                            <div class=\"col-md-12 col-sm-12\">
                                                                 <button type=\"submit\" class=\"form-control\" id=\"cf-submit-login\" name=\"BtnLogin\">Log In</button>
                                                            </div>
                                                       </form>";
                                             }else{
                                                  unset($_SESSION['Capcay']);
                                                  $usere      = cleankar($_POST['norme']);
                                                  $passworde  = cleankar2($_POST['passworde']);
                                                  if(getOne2("select count(*) from personal_pasien where no_rkm_medis='$usere' and password=aes_encrypt('$passworde','windi')")>0){
                                                      $_SESSION["ses_pasien"]= encrypt_decrypt($usere,"e");
                                                      exit(header("Location:index.php"));
                                                  }else{
                                                      echo "<form id=\"appointment-form-plama\" role=\"form\" onsubmit=\"return validasiIsi();\" method=\"post\" action=\"\" enctype=multipart/form-data>
                                                                  <div class=\"col-md-12 col-sm-12\">
                                                                      <label for=\"norme\">Nomer Rekam Medis</label>
                                                                      <input type=\"password\" class=\"form-control\" name=\"norme\" pattern=\"[A-Z0-9-]{1,65}\" title=\" A-Z0-9- (Maksimal 65 karakter)\" required placeholder=\"Masukkan Nomor Rekam Medis\" onkeydown=\"setDefault(this, document.getElementById('MsgIsi1'));\" id=\"TxtIsi1\" autocomplete=\"off\" autofocus/>
                                                                      <span id=\"MsgIsi1\" style=\"color:#CC0000; font-size:10px;\"></span>
                                                                  </div>
                                                                  <div class=\"col-md-12 col-sm-12\">
                                                                      <label for=\"passworde\">Konfirmasi Nomor Rekam Medis</label>
                                                                      <input type=\"password\" class=\"form-control\" name=\"passworde\" required placeholder=\"Masukkan Nomor Rekam Medis\" onkeydown=\"setDefault(this, document.getElementById('MsgIsi2'));\" id=\"TxtIsi2\" autocomplete=\"off\" />
                                                                      <span id=\"MsgIsi2\" style=\"color:#CC0000; font-size:10px;\"></span>
                                                                  </div>
                                                                  <div class=\"col-md-12 col-sm-12\">
                                                                      <span style=\"color:#CC0000; font-size:12px;\">Maaf, gagal login. Nomor rekam medis ada yang salah atau tidak sama ...!</span><br/><br/>
                                                                  </div>
                                                                  <div class=\"col-md-12 col-sm-12\">
                                                                      <label for=\"captcha\">Captcha</label>
                                                                      <table width=\"100%\" border=\"0\">
                                                                          <tr>
                                                                              <td width=\"50%\" valign=\"top\">
                                                                                  <img width=\"95%\" height=\"45px\" src=\"pages/captcha.php\" alt=\"gambar\" />
                                                                              </td>
                                                                              <td width=\"50%\">
                                                                                  <input type=\"text\" class=\"form-control\" onkeydown=\"setDefault(this, document.getElementById('MsgIsi3'));\" id=\"TxtIsi3\" name=\"inputcaptcha\" pattern=\"[0-9]{1,6}\" title=\" 0-9 (Maksimal 6 karakter)\" required placeholder=\"Masukkan Captcha\" autocomplete=\"off\" />
                                                                              </td>
                                                                          </tr>
                                                                      </table>
                                                                      <span id=\"MsgIsi3\" style=\"color:#CC0000; font-size:10px;\"></span>
                                                                  </div>
                                                                  <div class=\"col-md-12 col-sm-12\">
                                                                      <button type=\"submit\" class=\"form-control\" id=\"cf-submit\" name=\"BtnLogin\">Log In</button>
                                                                  </div>
                                                             </form>";
                                                  }
                                              }                                                  
                                             
                                             // ekopre('halo halo');
                                        }else{
                                             echo "<form id=\"appointment-form-plama\" role=\"form\"  method=\"post\" action=\"\" enctype=multipart/form-data>
                                                       <div class=\"col-md-12 col-sm-12\">
                                                            <label for=\"norme\">Nomer Rekam Medis</label>
                                                            <input type=\"password\" class=\"form-control\" name=\"norme\" pattern=\"[A-Z0-9-]{1,65}\" title=\" A-Z0-9- (Maksimal 65 karakter)\" required placeholder=\"Masukkan Nomor Rekam Medis\" onkeydown=\"setDefault(this, document.getElementById('MsgIsi1'));\" id=\"TxtIsi1\" autocomplete=\"off\" autofocus/>
                                                            <span id=\"MsgIsi1\" style=\"color:#CC0000; font-size:10px;\"></span>
                                                       </div>
                                                       <div class=\"col-md-12 col-sm-12\">
                                                            <label for=\"passworde\">Konfirmasi Nomor Rekam Medis</label>
                                                            <input type=\"password\" class=\"form-control\" name=\"passworde\" required placeholder=\"Masukkan Nomor Rekam Medis\" onkeydown=\"setDefault(this, document.getElementById('MsgIsi2'));\" id=\"TxtIsi2\" autocomplete=\"off\" />
                                                            <span id=\"MsgIsi2\" style=\"color:#CC0000; font-size:10px;\"></span>
                                                       </div>
                                                       <div class=\"col-md-12 col-sm-12\">
                                                            <label for=\"captcha\">Captcha</label>
                                                            <table width=\"100%\" border=\"0\">
                                                                 <tr>
                                                                      <td width=\"50%\" valign=\"top\">
                                                                      <img width=\"95%\" height=\"45px\" src=\"pages/captcha.php\" alt=\"gambar\" />
                                                                      </td>
                                                                      <td width=\"50%\">
                                                                      <input type=\"text\" class=\"form-control\" onkeydown=\"setDefault(this, document.getElementById('MsgIsi3Cap'));\" id=\"TxtIsi3Cap\" name=\"inputcaptcha\" pattern=\"[0-9]{1,6}\" title=\" 0-9 (Maksimal 6 karakter)\" required placeholder=\"Masukkan Captcha\" autocomplete=\"off\" />
                                                                      </td>
                                                                 </tr>
                                                            </table>
                                                            <span id=\"MsgIsi3Cap\" style=\"color:#CC0000; font-size:10px;\"></span>
                                                       </div>
                                                       <div class=\"col-md-12 col-sm-12\">
                                                            <button type=\"submit\" class=\"form-control\" id=\"cf-submit-login\" name=\"BtnLogin\">Log In</button>
                                                       </div>
                                                  </form>";
                                             // ekopre('halo halo');
                                        }
                                   ?>
                                   </div>
                              </div>
                         </div>
                    </section>

               </div>
          </div>
     </section>
</section>

<!-- Modal -->
<!-- <div class="modal fade" id="show_cbayar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div> -->

<!-- TEAM -->
<section id="team" data-stellar-background-ratio="1">
      <div class="container">
           <div class="row">
                <div class="col-md-12 col-sm-12">
                     <div class="about-info">
                          <h2 class="section-title wow fadeInUp" data-wow-delay="0.1s"><center>Dokter Kami</center></h2>
                     </div>
                </div>
                <div class="clearfix"></div>
                <?php
                $_session['dir'] = "images/dokter/";
                $_session['ext'] = ".jpg";
               //  unset matikan jika sudha beres
                unset($_SESSION["dokter"]);
                    if (!isset($_SESSION["dokter"])) {
                         $delay          = 0.2;
                         $datadokter     = "";
                         $querydokter = bukaquery("select dokter.kd_dokter,left(dokter.nm_dokter,20) as dokter,spesialis.nm_sps,dokter.no_ijn_praktek,pegawai.photo,dokter.no_telp from dokter inner join spesialis on dokter.kd_sps=spesialis.kd_sps inner join pegawai on dokter.kd_dokter=pegawai.nik where dokter.status='1' and dokter.kd_dokter<>'-' group by spesialis.nm_sps limit 5");
                         while ($rsquerydokter = mysqli_fetch_array($querydokter)) {
                              $kd_dokter = str_replace(' ', '', $rsquerydokter[0]);
                              $datadokter = $datadokter .
                                   "<div class='col-md-4 col-sm-6'>
                                    <div class='team-thumb wow fadeInUp' data-wow-delay='" . $delay . "s'>
                                          <img alt='Photo' src='$_session[dir]$kd_dokter$_session[ext]' class='img-responsive' style='width: 300px; height: 400px; object-fit: cover;' />
                                          <div class='team-info'>
                                               <h3>$rsquerydokter[1]</h3>
                                               <p>$rsquerydokter[2]</p>
                                               <div class='team-contact-info'>
                                                    <p><i class='fa fa-phone'></i> HP/Telp. $rsquerydokter[5] </p>
                                                    <p><i class='fa fa-envelope-o'></i> No.SIP. $rsquerydokter[3] </p>
                                               </div>
                                               <ul class='social-icon'>
                                                    <li><a href='#' class='fa fa-linkedin-square'></a></li>
                                                    <li><a href='#' class='fa fa-envelope-o'></a></li>
                                               </ul>
                                          </div>
                                    </div>
                                    <br/>
                               </div>";
                              $delay = $delay + 0.2;
                         }
                         $_SESSION["dokter"] = $datadokter;
                    }

                    echo $_SESSION["dokter"];
                    ?>
                <div class="col-md-4 col-sm-6">
                     <div class="wow fadeInUp" data-wow-delay="<?= $delay; ?>s">
                         <br/><br/><br/><br/><center><a href='index.php?act=DokterKami' class="btn btn-warning" >Tampilkan Semua Dokter</a></center>
                     </div>
                </div>

           </div>
      </div>
 </section>


<!-- Jadwal -->
<section id="news" data-stellar-background-ratio="2.5">
     <div class="container">
          <div class="row">
               <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                         <h2>Jadwal Praktek Dokter</h2>
                    </div>
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                         <form id="carikeyword" style="margin-bottom:1%" name="frmCariJadwal" method="post" action="" enctype=multipart/form-data>
                              <table width="100%" border='0' align="center">
                                   <tr class="head">
                                        <td width="20%" align="right"><label for="keyword">Keyword</label></td>
                                        <td width="1%"><label for=":">&nbsp;:&nbsp;</label></td>
                                        <td width="60%"><input name="keyword" type="text" id="keyword" pattern="[a-zA-Z0-9, ./@_]{1,65}" title=" a-zA-Z0-9, ./@_" class="form-control" value="" size="65" maxlength="250" autocomplete="off" /></td>
                                        <td width="19%" align="left">&nbsp;<input name="BtnKeyword" id=btnkey type=submit class="btn btn-warning" value="Cari"></td>
                                   </tr>
                              </table>
                         </form>
                         <div id='hasilcari' style="overflow-x:auto;">
                              <table hidden id="jadwal-tabel" class="table table-striped table-bordered" style="width:100%">
                              <thead>
                                   <tr>
                                   <th width='10%'><center>Hari Kerja</center></th>
                                   <th width='30%'><center>Nama Dokter</center></th>
                                   <th width='30%'><center>Poliklinik</center></th>
                                   <th width='15%'><center>Jam Mulai</center></th>
                                   <th width='15%'><center>Jam Selesai</center></th>
                                   </tr>
                              </thead>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>

<!-- MAKE AN APPOINTMENT -->
<!-- <section id="appointment" data-stellar-background-ratio="3">
      <div class="container">
           <div class="row">
                <div class="col-md-6 col-sm-6">
                     <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-md-6 col-sm-6">
                     <form id="appointment-form" role="form" onsubmit="return validasiIsi();" method="post" action="index.php?act=PendaftaranPeriksa" enctype=multipart/form-data>
                          <div class="about-info wow fadeInUp" data-wow-delay="0.4s">
                               <h2><center>Buat Janji/Booking</center></h2>
                               <div class="col-md-12 col-sm-12">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control text-uppercase" onkeydown="setDefault(this, document.getElementById('MsgIsi1'));" id="TxtIsi1" pattern="[a-zA-Z0-9, ./@_]{1,40}" title=" a-zA-Z0-9, ./@_ (Maksimal 40 karakter)" required name="nama" maxlength="40" placeholder="Nama Anda" autocomplete="off"/>
                                    <span id="MsgIsi1" style="color:#CC0000; font-size:10px;"></span>
                               </div>
                               <div class="col-md-12 col-sm-12">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control text-uppercase" onkeydown="setDefault(this, document.getElementById('MsgIsi2'));" id="TxtIsi2" pattern="[a-zA-Z0-9, ./@_]{1,200}" title=" a-zA-Z0-9, ./@_ (Maksimal 200 karakter)" required name="alamat" maxlength="200" placeholder="Alamat Anda" autocomplete="off" />
                                    <span id="MsgIsi2" style="color:#CC0000; font-size:10px;"></span>
                               </div>
                               <div class="col-md-6 col-sm-6">    
                                    <label for="nohp">Nomor HP/Telephone</label>
                                    <input type="tel" class="form-control" onkeydown="setDefault(this, document.getElementById('MsgIsi3'));" id="TxtIsi3" pattern="[0-9]{1,40}" title=" 0-9 (Maksimal 40 karakter)" required name="nohp" maxlength="40" placeholder="Nomor HP/Telephone Anda" autocomplete="off" />
                                    <span id="MsgIsi3" style="color:#CC0000; font-size:10px;"></span>
                               </div>
                               <div class="col-md-6 col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" onkeydown="setDefault(this, document.getElementById('MsgIsi4'));" id="TxtIsi4" pattern="[a-zA-Z0-9, ./@_]{1,50}" title=" a-zA-Z0-9, ./@_ (Maksimal 50 karakter)" required name="email" maxlength="50" placeholder="Email Anda" autocomplete="off" />
                                    <span id="MsgIsi4" style="color:#CC0000; font-size:10px;"></span>
                               </div>
                               <div class="col-md-6 col-sm-6">
                                    <label for="tanggal">Pilih Tanggal</label>
                                    <table width="100%">
                                        <tr>
                                            <td>
                                               <select name="TglDaftar" class="form-control">
                                                <?php
                                                  echo "<option>$tglbesok</option>";
                                                  loadTgl2();
                                                  ?>
                                               </select>
                                            </td>
                                            <td>
                                                <select name="BlnDaftar" class="form-control">
                                                 <?php
                                                  echo "<option>$blnbesok</option>";
                                                  loadBln2();
                                                  ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="ThnDaftar" class="form-control">
                                                 <?php
                                                  echo "<option>$thnbesok</option>";
                                                  loadThn4();
                                                  ?>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                               </div>
                               <div class="col-md-6 col-sm-6">
                                    <label for="poli">Poliklinik/Unit Penunjang</label>
                                    <select name="poli" class="form-control">
                                         <?php
                                             if (!isset($_SESSION["poli"])) {
                                                  $datapoli   = "";
                                                  $querypoli  = bukaquery("SELECT * from poliklinik order by nm_poli");
                                                  while ($rsquerypoli = mysqli_fetch_array($querypoli)) {
                                                       $datapoli = $datapoli . "<option value='$rsquerypoli[0]'>$rsquerypoli[1]</option>";
                                                  }
                                                  $_SESSION["poli"] = $datapoli;
                                             }

                                             echo $_SESSION["poli"];
                                             ?>
                                    </select>
                               </div>
                               <div class="col-md-12 col-sm-12">
                                    <label for="pesan">Tambahan Pesan</label>
                                    <textarea class="form-control" rows="2" maxlength="400" onkeydown="setDefault(this, document.getElementById('MsgIsi5'));" id="TxtIsi5" required name="pesan" placeholder="Tambahan Pesan" autocomplete="off"></textarea>
                                    <span id="MsgIsi5" style="color:#CC0000; font-size:10px;"></span>
                                    <button type="submit" class="form-control" id="cf-submit" name="btnBooking">Kirimkan</button>
                               </div>
                               <div class="col-md-12 col-sm-12">
                                   <label>
                                        <a href="index.php?act=CekBooking" class="btn btn-warning" style="margin-bottom:10px;">Cek Booking</a> Melihat status booking Anda.<br/>
                                        <a href="index.php?act=LoginPasien" class="btn btn-success" style="text-align:center; padding-left:35px; padding-right:35px;">Log In</a> Jika sudah pernah periksa.
                                   </label><br/><br/>
                               </div>
                          </div>
                    </form>
                </div> 
           </div>
      </div>
</section> -->

<section id="google-map">
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15930.789719616965!2d114.8517418!3d-3.4236774!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x312c636abedd3486!2sRS.%20Pelita%20Insani!5e0!3m2!1sen!2sid!4v1658721088311!5m2!1sen!2sid" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen="true"></iframe>
</section>