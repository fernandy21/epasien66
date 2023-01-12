<?php
    if(strpos($_SERVER['REQUEST_URI'],"pages")){
        exit(header("Location:../index.php"));
    }

    $btnBooking         =isset($_POST['btnBooking'])?$_POST['btnBooking']&&$_FILES['btnBooking']:NULL;
    // $btnBookingDx       =isset($_FILES['btnBookingDx'])?$_FILES['btnBookingDx']:NULL;
    if (isset($btnBooking)) {
        $nama           = trim(isset($_POST['nama']))?trim($_POST['nama']):NULL;
        $nama           = strtoupper(cleankar($nama));
        $alamat         = trim(isset($_POST['alamat']))?trim($_POST['alamat']):NULL;
        $alamat         = strtoupper(cleankar($alamat));
        $nohp           = trim(isset($_POST['nohp']))?trim($_POST['nohp']):NULL;
        $nohp           = cleankar($nohp);
        $nik            = trim(isset($_POST['nik']))?trim($_POST['nik']):NULL;
        $nik            = cleankar($nik);
        // $email          = trim(isset($_POST['email']))?trim($_POST['email']):NULL;
        // $email          = cleankar($email);
        $pesan          = trim(isset($_POST['pesan']))?trim($_POST['pesan']):NULL;
        $pesan          = cleankar($pesan);
        $poli           = trim(isset($_POST['poli']))?trim($_POST['poli']):NULL;
        $poli           = cleankar($poli);
        $TglDaftar      = trim(isset($_POST['TglDaftar']))?trim($_POST['TglDaftar']):NULL;
        $TglDaftar      = cleankar($TglDaftar);
        $BlnDaftar      = trim(isset($_POST['BlnDaftar']))?trim($_POST['BlnDaftar']):NULL;
        $BlnDaftar      = cleankar($BlnDaftar);
        $ThnDaftar      = trim(isset($_POST['ThnDaftar']))?trim($_POST['ThnDaftar']):NULL;
        $ThnDaftar      = cleankar($ThnDaftar);

        $uktp           = trim(isset($_FILES['uktp']))?trim($_FILES['uktp']):NULL;
        $uktp           = cleankar($uktp);
        $up_kj          = trim(isset($_FILES['up_kj']))?trim($_FILES['up_kj']):NULL;
        $up_kj          = cleankar($up_kj);
        $kartu_berobat  = trim(isset($_FILES['kartu_berobat']))?trim($_FILES['kartu_berobat']):NULL;
        $kartu_berobat  = cleankar($kartu_berobat);
        $up_gl          = trim(isset($_FILES['up_gl']))?trim($_FILES['up_gl']):NULL;
        $up_gl          = cleankar($up_gl);
        $up_rujuk       = trim(isset($_FILES['up_rujuk']))?trim($_FILES['up_rujuk']):NULL;
        $up_rujuk       = cleankar($up_rujuk);
        $up_kontrol     = trim(isset($_FILES['up_kontrol']))?trim($_FILES['up_kontrol']):NULL;
        $up_kontrol     = cleankar($up_kontrol);

        $sekarang       = date("Y-m-d H:i:s");
        $interval       = getOne2("select (TO_DAYS('$ThnDaftar-$BlnDaftar-$TglDaftar')-TO_DAYS('$sekarang'))");

        if($interval>0){
            if ((!empty($nama))&&(!empty($alamat))&&(!empty($nohp))&&(!empty($nik))&&(!empty($pesan))&&(!empty($poli))) {
                $max          = getOne2("select ifnull(MAX(CONVERT(RIGHT(no_booking,4),signed)),0)+1 from booking_periksa where tanggal='$ThnDaftar-$BlnDaftar-$TglDaftar'");
                $no_urut      = "BP$ThnDaftar$BlnDaftar$TglDaftar".sprintf("%04s", $max);
                $email        = "adminPendaftaran@ymail.com";
                $insert       = Tambah4("booking_periksa"," '$no_urut','$ThnDaftar-$BlnDaftar-$TglDaftar','$nama','$nik','$alamat','$nohp','$email','$poli','$pesan','Belum Dibalas','$sekarang'");
                $insertdx     = Tambah4("epasien_dox"," '$no_urut','$nik','$uktp', '$up_kj','$kartu_berobat','$up_gl','$up_rujuk','$up_kontrol'");
                if($insert&&$insertdx){
                    // echo "mantap berhasil anjay";
                    echo "<section id='news' data-stellar-background-ratio='2.5'>
                             <div class='container'>
                                 <div class='row'>
                                     <div class='col-md-12 col-sm-12'>
                                         <div class='section-title wow fadeInUp' data-wow-delay='0.1s'>
                                            <h3>Booking berhasil</h3>
                                         </div>
                                         <div class='news-thumb wow fadeInUp' data-wow-delay='0.2s'>
                                            <br>
                                            <b>
                                            <table width='95%' border='0' align='center'>
                                                <tr><td width='29%' align='left' valign='top'>No. Booking</td><td valign='top' width='3%' align='center'>:</td><td width='68%' align='left' valign='top'>$no_urut</td></tr>
                                                <tr><td width='29%' align='left' valign='top'>Tgl. Booking</td><td valign='top' width='3%' align='center'>:</td><td width='68%' align='left' valign='top'>$sekarang</td></tr>
                                                <tr><td width='29%' align='left' valign='top'>Tgl. Periksa</td><td valign='top' width='3%' align='center'>:</td><td width='68%' align='left' valign='top'>$TglDaftar-$BlnDaftar-$ThnDaftar</td></tr>
                                                <tr><td width='29%' align='left' valign='top'>Nama</td><td valign='top' width='3%' align='center'>:</td><td width='68%' align='left' valign='top'>$nama</td></tr>
                                                <tr><td width='29%' align='left' valign='top'>No. Hp/Telp</td><td valign='top' width='3%' align='center'>:</td><td width='68%' align='left' valign='top'>$nohp</td></tr>
                                                <tr><td width='29%' align='left' valign='top'>E-Mail</td><td valign='top' width='3%' align='center'>:</td><td width='68%' align='left' valign='top'>$email</td></tr>
                                                <tr><td width='29%' align='left' valign='top'>Alamat</td><td valign='top' width='3%' align='center'>:</td><td width='68%' align='left' valign='top'>$alamat</td></tr>
                                                <tr><td width='29%' align='left' valign='top'>Unit/Poliklinik</td><td valign='top' width='3%' align='center'>:</td><td width='68%' align='left' valign='top'>".getOne("select nm_poli from poliklinik where kd_poli='$poli'")."</td></tr>
                                            </table>
                                            </b>
                                            <br>
                                         </div>
                                         <a href='pages/CetakBooking.php?iyem=".encrypt_decrypt("{\"nobooking\":\"$no_urut\"}","e")."' target=_blank class='form-control btn btn-success wow fadeInUp'> Cetak </a>
                                         <br><br>
                                         <b>Catatan: Nomor booking wajib anda ingat.</b> Nomor booking bukan merupakan nomor pendaftaran poliklinik/unit. Kami akan melakukan pengecekan terhadap jadwal & kuota dokter yang tersedia berdasarkan booking Anda. Konfirmasi booking periksa akan Kami sampaikan melalui E-Mail atau Nomor HP/Telp Anda.<br><a href='index.php?act=CekBooking' class='btn btn-danger' style='margin-right:5px'>Cek Booking</a> untuk melihat status booking Anda.
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
                                                    <h3>Gagal melakukan booking</h3><br>
                                                    Nomor HP/Telp yang Anda gunakan untuk melakukan booking terdeteksi sudah digunakan sebelumnya pada tanggal yang sama. <button class='btn btn-success btn-lg' id='cek_booking' style='width: 100%; height: ; margin-bottom:15px;'>Cek Booking</button> jika anda sudah melakukan booking sebelumnya 
                                               </div>
                                          </div>
                                     </div>
                                </div>
                          </section>";
                }
            }else{
                echo "<section id='news' data-stellar-background-ratio='2.5'>
                            <div class='container'>
                                 <div class='row'>
                                      <div class='col-md-12 col-sm-12'>
                                           <div class='about-info wow fadeInUp' data-wow-delay='0.1s'>
                                                <h3>Gagal melakukan booking</h3><br>
                                                Semua field wajib diisi
                                           </div>
                                      </div>
                                 </div>
                            </div>
                      </section>";
                // JSRedirect2("index.php?act=Home",4);
            }
        }else{
            echo "<section id='news' data-stellar-background-ratio='2.5'>
                        <div class='container'>
                             <div class='row'>
                                  <div class='col-md-12 col-sm-12'>
                                       <div class='about-info wow fadeInUp' data-wow-delay='0.1s'>
                                            <h3>Gagal melakukan booking</h3><br>
                                            Maksimal booking 1 hari sebelum periksa
                                       </div>
                                  </div>
                             </div>
                        </div>
                  </section>";
            // JSRedirect2("index.php?act=Home",4);
        }
    }else{
        // JSRedirect("index.php?act=Home");
        echo "nah gagal am hdeh";
    }
?>