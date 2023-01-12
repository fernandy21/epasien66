<?php
    if(strpos($_SERVER['REQUEST_URI'],"pages")){
        exit(header("Location:../index.php"));
    }
?>
<section id="news" data-stellar-background-ratio="2.5">
      <div class="container">
           <div class="row">
                <div class="col-md-12 col-sm-12">
                     <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                          <h2>Radiologi</h2>

                          
                     </div>
                </div>
                       
                <div class="col-md-12 col-sm-12 layananradiologi">
                     <div class="news-thumb wow fadeInUp" data-wow-delay="0.3s">
                        <!-- <form id="cariKamar" name="frmCariRadiologi" method="post" action="" enctype=multipart/form-data>
                           <table width="100%" border='0' align="center">
                               <tr class="head">
                                  <td width="20%" align="right"><label for="radiologi">Keyword</label></td>
                                  <td width="1%"><label for=":">&nbsp;:&nbsp;</label></td>
                                  <td width="60%"><input name="radiologi" type="text" id="radiologi" pattern="[a-zA-Z0-9, ./@_]{1,65}" title=" a-zA-Z0-9, ./@_ (Maksimal 65 karakter)" class="form-control" value="" size="65" maxlength="250" autocomplete="off" autofocus/></td>
                                  <td width="19%" align="left">&nbsp;<input name="BtnRadiologi" type=submit class="btn btn-warning" value="Cari" /></td>
                               </tr>
                           </table>
                         </form> -->
                         
                         <!-- <div class="table-responsive">
                            <table class="table table-hover" >
                               <tr>
                                   <th width="60%"><center>Nama Pemeriksaan</center></th>
                                   <th width="20%"><center>Kelas</center></th>
                                   <th width="20%"><center>Tarif Radiologi</center></th>
                               </tr> -->
                               <?php 
                                //   if(!isset($_SESSION["radiologi"])){
                                    //   $dataradiologi  = "";
                                    //   $queryradiologi = bukaquery("select jns_perawatan_radiologi.nm_perawatan,jns_perawatan_radiologi.total_byr,jns_perawatan_radiologi.kelas from jns_perawatan_radiologi inner join penjab on penjab.kd_pj=jns_perawatan_radiologi.kd_pj where jns_perawatan_radiologi.status='1' and penjab.png_jawab like '%umum%' order by jns_perawatan_radiologi.kelas");
                                    //   $a = array();
                                    //   while($rsqueryradiologi = mysqli_fetch_array($queryradiologi)) {
                                        // array_push($a,$rsqueryradiologi);
                                        //    $dataradiologi=$dataradiologi.
                                        //           "<tr>
                                        //                <td align='left'>".$rsqueryradiologi["nm_perawatan"]."</td>
                                        //                <td align='center'>".$rsqueryradiologi["kelas"]."</td>
                                        //                <td align='center'>".formatDuit($rsqueryradiologi["total_byr"])."</td>
                                        //           </tr>";
                                    //   }
                                    //   $_SESSION["radiologi"]=$dataradiologi;
                                //   }
                                //   echo json_encode($a)

                                //   $radiologi      = trim(isset($_POST['radiologi']))?trim($_POST['radiologi']):NULL;
                                //   $radiologi      = cleankar($radiologi);
                                //   if(!empty($radiologi)){
                                //       $queryradiologi = bukaquery("select jns_perawatan_radiologi.nm_perawatan,jns_perawatan_radiologi.total_byr,jns_perawatan_radiologi.kelas from jns_perawatan_radiologi inner join penjab on penjab.kd_pj=jns_perawatan_radiologi.kd_pj where jns_perawatan_radiologi.status='1' and penjab.png_jawab like '%umum%' and (jns_perawatan_radiologi.nm_perawatan like '%$radiologi%' or jns_perawatan_radiologi.kelas like '%$radiologi%') order by jns_perawatan_radiologi.kelas");
                                //       while($rsqueryradiologi = mysqli_fetch_array($queryradiologi)) {
                                //         // array_push($a,$rsqueryradiologi);
                                //         // ekopre($rsqueryradiologi);
                                //         //    echo "<tr>
                                //         //            <td align='left'>".$rsqueryradiologi["nm_perawatan"]."</td>
                                //         //            <td align='center'>".$rsqueryradiologi["kelas"]."</td>
                                //         //            <td align='center'>".formatDuit($rsqueryradiologi["total_byr"])."</td>
                                //         //          </tr>";
                                //     }
                                // }
                                // //   echo json_encode($a)
                                // else{
                                //     ekopre($a);
                                    
                                //     // echo $_SESSION["radiologi"];
                                //   }    
                              ?>
                           </table> 
                         </div>
                     </div>
                </div>
           </div>
      </div>
 </section>

<div class="modal fade bd-example-modal-lg" id="modal_radiologi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body" style="x-overflow:auto">
        <table class="table table-bordered" id=table_radiologi>
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Perawatan</th>
            <th scope="col">Nama Kelas</th>
            <th scope="col">Tarif</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
        </table>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</div>
