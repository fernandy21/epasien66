<!DOCTYPE html>
<html lang="en">
<head>
     <title>EPasien <?=$_SESSION["nama_instansi"];?></title>
     <meta charset="UTF-8"/>
     <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
     <meta name="description" content=""/>
     <meta name="keywords" content=""/>
     <meta name="author" content="Tooplate"/>
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
     <link rel="stylesheet" href="css/bootstrap.min.css"/>
     <link rel="stylesheet" href="css/font-awesome.min.css"/>
     <link rel="stylesheet" href="css/animate.css"/>
     <link rel="stylesheet" href="css/owl.carousel.css"/>
     <link rel="stylesheet" href="css/owl.theme.default.min.css"/>
     <link rel="stylesheet" href="css/tooplate-style.css"/>
     <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"/> -->
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="icon" href="images/logo2022ok.png">
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
     <!--<section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>-->
    
     <header>
          <div class="container">
               <div class="row">
                    <div class="col-md-4 col-sm-5">
                         <p>Selamat datang di <?=$_SESSION["nama_instansi"];?></p>
                    </div>
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> <?=$_SESSION["kontak"];?></span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 06:00 - 22:00 (Senin-Sabtu)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#"><?=$_SESSION["email"];?></a></span>
                    </div>
               </div>
          </div>
     </header>
    
     <section class="navbar navbar-default navbar-static-top" role="navigation" style="background-color:#3bb3c2;">
          <div class="container">
               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>
                    
                    <a href="index.php" class="logo-pjk"><img src="images/logo2022ok.png" alt="" height="50px" style="filter:drop-shadow(0 0 1px black)"></a>
                    <!-- <a href="index.php" class="navbar-brand"><i class="fa fa-h-square"></i>ealth care</a> -->
               </div>
               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <?php actionMenu()?>
                    </ul>
               </div>
          </div>
     </section>
     
     <?php actionPages();?>

     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">
                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Informasi Kontak</h4>
                              <p>Jangan ragu untuk menghubungi kami, Anda bisa menghubungi kami melalui kontak di bawah ini :</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> <?=$_SESSION["kontak"];?></p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="mailto:rs.pelitainsani@gmail.com"><?=$_SESSION["email"];?></a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Pengumuman/Informasi</h4>
                              <div class="latest-stories">
                                   <div class="stories-info">
                                       <?php
                                            $querypengumuman = bukaquery("select pegawai.nama,date_format(pengumuman_epasien.tanggal,'%d/%m/%Y')as tanggal,pengumuman_epasien.pengumuman from pengumuman_epasien inner join pegawai on pengumuman_epasien.nik=pegawai.nik order by pengumuman_epasien.tanggal desc limit 1");
                                            if($pengumuman = mysqli_fetch_array($querypengumuman)) {
                                                echo "<p><i class='fa fa-bell'></i> ".$pengumuman["pengumuman"]."</p>
                                                      <span>".$pengumuman["tanggal"].", oleh ".$pengumuman["nama"]."</span>";
                                            }else{
                                                echo "<p><i class='fa fa-bell'></i> Tidak ada pengumuman</p>
                                                      <span>".date('d/m/Y').", oleh Admin</span>";
                                            }
                                       ?>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Jam Buka</h4>
                                   <p>Senin - Sabtu <span>06:00 - 22:00 </span></p>
                                   <p>Minggu<span>Tutup</span></p>
                                   <p>IGD<span>24 Jam</span></p>
                                   <p>Radiologi<span>24 Jam</span></p>
                                   <p>Apotek<span>24 Jam</span></p>
                              </div> 

                              <ul class="social-icon">
                                   <li><a href="https://www.facebook.com/profile.php?id=100064751178401" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="https://www.twitter.com/RSPelitaInsani" class="fa fa-twitter"></a></li>
                                   <li><a href="https://instagram.com/rspelitainsani" class="fa fa-instagram"></a></li>
                                   <li><a href="https://www.youtube.com/channel/UCv0pghdveQ18iynnceynZqw" class="fa fa-youtube-play"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2020 <a href="https://rspelitainsani.com/">RS Pelita Insani</a> | <a href="http://www.yaski.or.id">www.yaski.or.id</a></p>
                                   <!-- <p>Copyright &copy; 2020 <?=$_SESSION["nama_instansi"];?> | <a href="http://www.yaski.or.id">www.yaski.or.id</a></p> -->
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 
                                  <center>
                                     <a href="index.php?act=CekPoli">Poli/Unit Tersedia</a>
                                     <a href="index.php?act=CekAsuransi">Kerja Sama Asuransi</a>
                                     <?=$stokdarah=="aktif"?"<a href=\"index.php?act=CekStokDarah\">Ketersediaan Darah</a>":"";?>
                                  </center>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </footer>
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
     <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> 
     <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
     
     <script src="conf/validator.js" type="text/javascript"></script>
     <script type="text/javascript">
          function formatRupiah(angka, prefix){
               var number_string = angka.replace(/[^,\d]/g, '').toString(),
               split   		= number_string.split(','),
               sisa     		= split[0].length % 3,
               rupiah     		= split[0].substr(0, sisa),
               ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
          
               // tambahkan titik jika yang di input sudah menjadi angka ribuan
               if(ribuan){
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
               }
          
               rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
               return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
          }

          if(!$('#jadwal-tabel thead tr').hasClass('filters')){
               $('#jadwal-tabel thead tr').clone(true).addClass('filters').appendTo( '#jadwal-tabel thead' );
          }
             var tb = $('#jadwal-tabel').DataTable({
               orderCellsTop: true,
               fixedHeader: true,
               initComplete: function() {
                    var api = this.api();
                    // For each column
                    api.columns().eq(0).each(function(colIdx) {
                         // Set the header cell to contain the input element
                         var cell = $('.filters th').eq($(api.column(colIdx).header()).index());
                         var title = $(cell).text();
                         $(cell).html( '<input type="text" class="form-control" placeholder="'+title+'" />' );
                         // On every keypress in this input
                         $('input', $('.filters th').eq($(api.column(colIdx).header()).index()) )
                              .off('keyup change')
                              .on('keyup change', function (e) {
                              e.stopPropagation();
                              // Get the search value
                              $(this).attr('title', $(this).val());
                              var regexr = '({search})'; //$(this).parents('th').find('select').val();
                              var cursorPosition = this.selectionStart;
                              // Search the column for that value
                              api
                                   .column(colIdx)
                                   .search((this.value != "") ? regexr.replace('{search}', '((('+this.value+')))') : "", this.value != "", this.value == "")
                                   .draw();
                              $(this).focus()[0].setSelectionRange(cursorPosition, cursorPosition);
                              });
                    });
               }
               });
               $('#jadwal-tabel_wrapper').hide();
               //  $.(document).ready(function() {
               //      var myVar = $("#hasilcari").find('#jadwal_tabel_length').val(style="text-align: left;");
               // }{})

     // $(document).ready(function () {
                              // });  
     //    $(function() {
          
          // post search data jadwal untuk show di data table 
            $("#carikeyword").bind('submit',function() {
               if($("#keyword").val()!=""){
                    $.post('pages/listjadwaldokter.php',{value:$('#keyword').val()}, function(data){
                         dt = JSON.parse(data)
                         if (dt!=null) {
                            $('#jadwal-tabel').show();
                            $('#jadwal-tabel_wrapper').show();
                            //    let tb = $('#tabel-jadwal').DataTable();
                            tb.clear()
                            dt.forEach(ele => {
                                 if(tb!='undefined'){
                                      tb.row.add([ele[1],ele[0],ele[4],ele[2],ele[3]]).draw(false)
                                 }
                            });
                       }
                       // $("#hasilcari").html(data);
                  });
               }else if($("#keyword").val()==""){
                    $('#jadwal-tabel').hide();
                    $('#jadwal-tabel_wrapper').hide();
               }
                 return false;
            });
          
            // post search data ruangan untuk show di data table 

            
            $(".show_listkamar").click(function() {
                 $('#modal_ruangan').modal('show')
                 // if($("#keyword").val()!=""){
                    $.post('pages/model_data.php',{getkamar:$(this).attr('data-title')}, function(data){
                         ruang = JSON.parse(data)
                         i=1
                         $('#table_modal tbody tr').remove()
                         ruang.forEach(ele => {
                              if(ele.status=="KOSONG"){
                                   status = "Tersedia"
                              }else{
                                   status = "Terisi"
                              }
                              $('#table_modal tbody').append(
                                   '<tr>'
                                   +'<td>'+i+'</td>'
                                   +'<td>'+ele.kd_kamar+'</td>'
                                   +'<td>'+ele.kelas+'</td>'
                                   +'<td>'+formatRupiah(ele.trf_kamar, "Rp.")+'</td>'
                                   +'<td>'+status+'</td>'
                                   +'</tr>'
                                   );
                              i++;
                         });                      
                  });
               $('#modallabel').html($(this).attr('data-title'))
               
               // }else if($("#keyword").val()==""){
               //      $('#jadwal-tabel').hide();
               //      $('#jadwal-tabel_wrapper').hide();
               // }
               //   return false;

            });

          // $(document).ready(function(){
               $("#plama").click(function() {
                    if($(this).text()=="Form Pasien Lama"){
                         // $('#ptombol').attr("style","padding-top:0%");
                         $(this).text("Tutup Form Pasien Lama")
                         $('#form_plama').toggle(700);
                         $('#pbaru').text("Form Pasien Baru");
                         $('#appointment-form').hide(700);
                         $('#cek_booking').text("Cek Booking")
                         $('#cek_book').hide(700);
                    }else if($(this).text()=="Tutup Form Pasien Lama"){
                         $(this).text("Form Pasien Lama")
                         $('#form_plama').toggle(700);
                    }
               })
               $("#pbaru").click(function() {
                    if($(this).text()=="Form Pasien Baru"){
                         $(this).text("Tutup Form Pasien Baru")
                         $('#appointment-form').toggle(700);
                         $('#plama').text("Form Pasien Lama")
                         $('#form_plama').hide(700);
                         $('#cek_booking').text("Cek Booking")
                         $('#cek_book').hide(700);
                    }else if($(this).text()=="Tutup Form Pasien Baru"){
                         $(this).text("Form Pasien Baru")
                         $('#appointment-form').toggle(700);
                         
                    }
               })
               $("#cek_booking").click(function() {
                    if($(this).text()=="Cek Booking"){
                         $(this).text("Tutup Form Cek Booking")
                         $('#cek_book').toggle(700);
                         $('#plama').text("Form Pasien Lama")
                         $('#form_plama').hide(700);
                         $('#pbaru').text("Form Pasien Baru");
                         $('#appointment-form').hide(700);
                    }else if($(this).text()=="Tutup Form Cek Booking"){
                         $(this).text("Cek Booking")
                         $('#cek_book').toggle(700);
                         
                    }
               })
          // })

          $("#cf-submit-kirim-book").submit(function () {
               console.log($(this))
               
          })


            $("#cbayar").change(function() {
               // default hide
               $('#srujuk').hide()
               $('#dsrujuk').prop('required',false);
               $('#fgl').hide()
               $('#dgl').prop('required',false);
               $('#skontrol').hide()
               $('#ukj').hide()
               $('#dkj').prop('required',false);

               if($(this).find(":selected").text()=="BPJS"){
                    $('#skontrol').show()
                    $('#ukj').show()
                    $('#srujuk').show()
                    $('#dkj').prop('required',true);
                    $('#dsrujuk').prop('required',true);
                    
               }else if($(this).find(":selected").text()=="Pihak Ketiga"){
                    $('#fgl').show()
                    $('#dgl').prop('required',true);
                    $('#ukj').show()
                    $('#dkj').prop('required',true);
               }else if($(this).find(":selected").text()=="UMUM"){
                    
                    $('#uktp').removeClass('col-md-6')
                    $('#uktp').removeClass('col-sm-6')
                    $('#uktp').addClass('col-md-12')
                    $('#uktp').addClass('col-sm-12')
                    $('#ukj').hide()
                    $('#dkj').prop('required',false);
               }else if($(this).find(":selected").text()=="Asuransi"){
                    $('#uktp').removeClass('col-md-12')
                    $('#uktp').removeClass('col-sm-12')
                    $('#uktp').addClass('col-md-6')
                    $('#uktp').addClass('col-sm-6')
                    $('#ukj').show()
                    $('#dkj').prop('required',true);
               }
               else{
                    console.log($(this).find(":selected").text())
               }

               //   $('#show_cbayar').modal('show')
               // //   if($("#keyword").val()!=""){
               //      $.post('pages/model_data.php',{getcbayar:$(this).attr('data-title')}, function(data){
               //           ruang = JSON.parse(data)
               //           i=1
               //           $('#table_modal tbody tr').remove()
               //           ruang.forEach(ele => {
               //                if(ele.status=="KOSONG"){
               //                     status = "Tersedia"
               //                }else{
               //                     status = "Terisi"
               //                }
               //                $('#table_modal tbody').append(
               //                     '<tr>'
               //                     +'<td>'+i+'</td>'
               //                     +'<td>'+ele.png_jawab+'</td>'
               //                     +'<td>'+ele.cara_bayar+'</td>'
               //                     // +'<td>'+formatRupiah(ele.trf_kamar, "Rp.")+'</td>'
               //                     // +'<td>'+status+'</td>'
               //                     +'</tr>'
               //                     );
               //                i++;
               //           });                      
               //    });
               // $('#modallabel').html($(this).attr('data-title'))
               
               // }else if($("#keyword").val()==""){
               //      $('#jadwal-tabel').hide();
               //      $('#jadwal-tabel_wrapper').hide();
               // }
               //   return false;

            });

     //    });
     $(function () {
          $('[data-toggle="popover"]').popover()
     })
 
    $(document).ready(function () {
     // $(this).scrollTo("#info_pengisian")
     $(window).scrollTop(0);
     $('#appointment-form').hide();
     $('#form_plama').hide();
     $('#cek_book').hide();
     // $('#ptombol').attr("style","padding-top: 50%");
     // $('#ptombol').attr("top","50px");
     
     if($(".layananradiologi").length>0){
          //cast llist layanan
          $.post('pages/model_data.php',{getradiologi:""}, function(data){
              radiologi = JSON.parse(data)              
               Object.keys(radiologi).forEach(key => {
                    $('.layananradiologi').append(""+
                    "<div class='col-md-4 col-sm-4'>"+
                    "<div class='card' style='margin-top:5%; margin-bottom:5%;  background-color: rgba(255, 255, 255, 1); opacity: 1;'>"+
                    "<img class='card-img-top img-thumbnail' src='images/rad.jpg' alt='Card image cap'>"+
                    "<div class='card-body' style='height:100px'>"+
                                   "<h3 class='card-title'>Pelayanan "+key+"</h5>"+
                                   "<p class='card-text col-md-12 col-sm-12' style='padding-left:14%;'>"+
                                   "</p>"+
                                   "<button type='button' class='btn btn-primary show_listradiologi' data-title='' style='margin-bottom:5%'>Lihat Tarif Layanan</button>"+
                              "</div>"+
                         "</div>"+  
                    "</div>");
               });
          });

          //cast data table
          var tb_radiologi = $('#jadwal-tabel').DataTable({
               orderCellsTop: true,
               fixedHeader: true,
               initComplete: function() {
                    var api = this.api();
                    // For each column
                    api.columns().eq(0).each(function(colIdx) {
                         // Set the header cell to contain the input element
                         var cell = $('.filters th').eq($(api.column(colIdx).header()).index());
                         var title = $(cell).text();
                         $(cell).html( '<input type="text" class="form-control" placeholder="'+title+'" />' );
                         // On every keypress in this input
                         $('input', $('.filters th').eq($(api.column(colIdx).header()).index()) )
                              .off('keyup change')
                              .on('keyup change', function (e) {
                              e.stopPropagation();
                              // Get the search value
                              $(this).attr('title', $(this).val());
                              var regexr = '({search})'; //$(this).parents('th').find('select').val();
                              var cursorPosition = this.selectionStart;
                              // Search the column for that value
                              api
                                   .column(colIdx)
                                   .search((this.value != "") ? regexr.replace('{search}', '((('+this.value+')))') : "", this.value != "", this.value == "")
                                   .draw();
                              $(this).focus()[0].setSelectionRange(cursorPosition, cursorPosition);
                              });
                    });
               }
               });
          
               
     }
    })

    $(document).ready(function () {
     if($(".layananlaborat").length>0){
          //cast llist layanan
          $.post('pages/model_data.php',{getlaborat:""}, function(data){
              laborat = JSON.parse(data)              
               Object.keys(laborat).forEach(key => {
                    $('.layananlaborat').append(""+
                    "<div class='col-md-4 col-sm-4'>"+
                    "<div class='card' style='margin-top:5%; margin-bottom:5%;  background-color: rgba(255, 255, 255, 1); opacity: 1;'>"+
                    "<img class='card-img-top img-thumbnail' src='images/lab.jpg' style='width: 400px; height: 300px; object-fit: cover;' alt='Card image cap'>"+
                    "<div class='card-body' style='height:100px'>"+
                                   "<h3 class='card-title'>Pelayanan "+key+"</h5>"+
                                   "<p class='card-text col-md-12 col-sm-12' style='padding-left:14%;'>"+
                                   "</p>"+
                                   "<button type='button' class='btn btn-primary show_listlaborat' data-title='' style='margin-bottom:5%'>Lihat Tarif Layanan</button>"+
                              "</div>"+
                         "</div>"+  
                    "</div>");
               });
          });

          //cast data table
          var tb_laborat = $('#jadwal-tabel').DataTable({
               orderCellsTop: true,
               fixedHeader: true,
               initComplete: function() {
                    var api = this.api();
                    // For each column
                    api.columns().eq(0).each(function(colIdx) {
                         // Set the header cell to contain the input element
                         var cell = $('.filters th').eq($(api.column(colIdx).header()).index());
                         var title = $(cell).text();
                         $(cell).html( '<input type="text" class="form-control" placeholder="'+title+'" />' );
                         // On every keypress in this input
                         $('input', $('.filters th').eq($(api.column(colIdx).header()).index()) )
                              .off('keyup change')
                              .on('keyup change', function (e) {
                              e.stopPropagation();
                              // Get the search value
                              $(this).attr('title', $(this).val());
                              var regexr = '({search})'; //$(this).parents('th').find('select').val();
                              var cursorPosition = this.selectionStart;
                              // Search the column for that value
                              api
                                   .column(colIdx)
                                   .search((this.value != "") ? regexr.replace('{search}', '((('+this.value+')))') : "", this.value != "", this.value == "")
                                   .draw();
                              $(this).focus()[0].setSelectionRange(cursorPosition, cursorPosition);
                              });
                    });
               }
               });
          
               
     }
    })

    $(document).ready(function () {
    if($(".layananoperasi").length>0){
         //cast llist layanan
         $.post('pages/model_data.php',{getoperasi:""}, function(data){
             operasi = JSON.parse(data)              
              Object.keys(operasi).forEach(key => {
                   $('.layananoperasi').append(""+
                   "<div class='col-md-4 col-sm-4'>"+
                   "<div class='card' style='margin-top:5%; margin-bottom:5%;  background-color: rgba(255, 255, 255, 1); opacity: 1;'>"+
                   "<img class='card-img-top img-thumbnail' src='images/opr.jpg' alt='Card image cap'>"+
                   "<div class='card-body' style='height:100px'>"+
                                  "<h3 class='card-title'>Pelayanan "+key+"</h5>"+
                                  "<p class='card-text col-md-12 col-sm-12' style='padding-left:14%;'>"+
                                  "</p>"+
                                  "<button type='button' class='btn btn-primary show_listoperasi' data-title='' style='margin-bottom:5%'>Lihat Tarif Layanan</button>"+
                             "</div>"+
                        "</div>"+  
                   "</div>");
              });
         });

         //cast data table
         var tb_operasi = $('#jadwal-tabel').DataTable({
              orderCellsTop: true,
              fixedHeader: true,
              initComplete: function() {
                   var api = this.api();
                   // For each column
                   api.columns().eq(0).each(function(colIdx) {
                        // Set the header cell to contain the input element
                        var cell = $('.filters th').eq($(api.column(colIdx).header()).index());
                        var title = $(cell).text();
                        $(cell).html( '<input type="text" class="form-control" placeholder="'+title+'" />' );
                        // On every keypress in this input
                        $('input', $('.filters th').eq($(api.column(colIdx).header()).index()) )
                             .off('keyup change')
                             .on('keyup change', function (e) {
                             e.stopPropagation();
                             // Get the search value
                             $(this).attr('title', $(this).val());
                             var regexr = '({search})'; //$(this).parents('th').find('select').val();
                             var cursorPosition = this.selectionStart;
                             // Search the column for that value
                             api
                                  .column(colIdx)
                                  .search((this.value != "") ? regexr.replace('{search}', '((('+this.value+')))') : "", this.value != "", this.value == "")
                                  .draw();
                             $(this).focus()[0].setSelectionRange(cursorPosition, cursorPosition);
                             });
                   });
              }
              });
         
              
    }
   })

     
 
    </script>
</body>
</html>
