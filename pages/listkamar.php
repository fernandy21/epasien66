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
                          <h2>Kamar</h2>
                          
                          
                     </div>
                </div>
                       
                <div class="col-md-12 col-sm-12">
                     <div class="news-thumb wow fadeInUp" data-wow-delay="0.3s">
                         <form id="cariKamar" name="frmCariKamar" method="post" action="" enctype=multipart/form-data>
                           <table width="100%" border='0' align="center">
                               <tr class="head">
                                  <td width="20%" align="right"><label for="kamar">Keyword</label></td>
                                  <td width="1%"><label for=":">&nbsp;:&nbsp;</label></td>
                                  <td width="60%"><input name="kamar" type="text" id="kamar" pattern="[a-zA-Z0-9, ./@_]{1,65}" title=" a-zA-Z0-9, ./@_ (Maksimal 65 karakter)" class="form-control" value="" size="65" maxlength="250" autocomplete="off" autofocus/></td>
                                  <td width="19%" align="left">&nbsp;<input name="BtnKamar" type=submit class="btn btn-warning" value="Cari" /></td>
                               </tr>
                           </table>
                         </form>
                         <?php 
                                $kamar      = trim(isset($_POST['kamar']))?trim($_POST['kamar']):NULL;
                                $kamar      = cleankar($kamar);
                                $querykamar = bukaquery("select kamar.kd_kamar,bangsal.kd_bangsal,bangsal.nm_bangsal,kamar.kelas,kamar.trf_kamar,kamar.status from bangsal inner join kamar on kamar.kd_bangsal=bangsal.kd_bangsal where kamar.statusdata='1' ".(isset($kamar)?" and (kamar.kd_kamar like '%$kamar%' or bangsal.nm_bangsal like '%$kamar%' or kamar.kelas like '%$kamar%' or kamar.status like '%$kamar%')":"")." order by kamar.kelas");
                                // $querykamar = bukaquery("select kamar.kd_kamar, bangsal.nm_bangsal, kamar.kelas, kamar.trf_kamar, kamar.status from bangsal inner join kamar on kamar.kd_bangsal=bangsal.kd_bangsal where kamar.statusdata='1' ".(isset($kamar)?" and (kamar.kd_kamar like '%$kamar%' or bangsal.nm_bangsal like '%$kamar%' or kamar.kelas like '%$kamar%' or kamar.status like '%$kamar%')":"")." group by bangsal.nm_bangsal order by kamar.kelas ");
                                $data = array();
                                while($rsquerykamar = mysqli_fetch_array($querykamar)) {
                                  array_push($data,$rsquerykamar);
                                ?>
                                
                                <?php 
                                  }
                                  $prepared_data = group_by('nm_bangsal',$data);
                                  foreach ($prepared_data as $bangsal) {
                                    // ekopre($prepared_data[$bangsal[0]['nm_bangsal']]);
                                    $_session['dir'] = "images/kamar/";
                                    $_session['ext'] = ".jpg";

                                    // $_session['dir'].$kamar['kd_kamar'].$_session['ext']
                                    ?>
                                    <div class="col-md-4 col-sm-4">
                                      <div class="card" style="margin-top:5%; margin-bottom:5%;  background-color: rgba(255, 255, 255, 1); opacity: 1;">
                                        <img class="card-img-top img-thumbnail" src="<?php echo $_session['dir'].$bangsal[0]['kd_bangsal'].$_session['ext'] ?>" alt="Card image cap">
                                        <div class="card-body" style="height:225px">
                                          <h5 class="card-title"><?php echo $bangsal[0]['nm_bangsal'] ?></h5>
                                          <p class="card-text col-md-12 col-sm-12" style="padding-left:14%;">
                                          <?php foreach ($prepared_data[$bangsal[0]['nm_bangsal']] as $kamar) { ?>
                                          <?php  
                                              if($kamar['status']!='KOSONG'){?>
                                                <a tabindex="0" data-placement="bottom" style="margin-right:1px;margin-left:1px;margin-bottom:1px" class="btn btn-sm btn-success fa fa-check-square-o col-md-2 col-sm-2" data-toggle="popover" data-trigger="focus" title="<?php echo $kamar['kd_kamar']?>" data-content="<?php echo  'status kamar : '.'TERISI' ?>"></a>
                                                <?php 
                                              }else{?>
                                                <a tabindex="0" data-placement="bottom" style="margin-right:1px;margin-left:1px;margin-bottom:1px" class="btn btn-sm btn-primary fa fa-square-o col-md-2 col-sm-2" data-toggle="popover" data-trigger="focus" title="<?php echo $kamar['kd_kamar']?>" data-content="<?php echo  'status kamar : '.'TERSEDIA' ?>"></a>
                                              <?php  
                                              }
                                             ?>  
                                          <?php } ?>
                                          </p>
                                          <button type="button" class="btn btn-primary show_listkamar" data-title="<?php echo $bangsal[0]['nm_bangsal'] ?>" style="margin-bottom:5%">Lihat Tarif Kamar</button>
                                        </div>
                                      </div>
                                    </div>

                                <?php  
                                }
                                // ekopre($data)
                          ?>  

                         <!-- <div class="table-responsive">
                            <table class="table table-hover" >
                               <tr>
                                   <th width="15%"><center>Nomer Bed</center></th>
                                   <th width="40%"><center>Nama Kamar</center></th>
                                   <th width="15%"><center>Kelas</center></th>
                                   <th width="15%"><center>Tarif Kamar</center></th>
                                   <th width="15%"><center>Status Kamar</center></th>
                               </tr> -->
                              
                            
                            <!-- Modal -->

                         </div>
                     </div>
                </div>
                                                
           </div>
      </div>
 </section>

 <!-- modal informasi rungan -->
  <div class="modal fade bd-example-modal-lg" id="modal_ruangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modallabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="x-overflow:auto">
        <table class="table table-bordered" id=table_modal>
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Kamar</th>
              <th scope="col">kelas</th>
              <th scope="col">Tarif</th>
              <th scope="col">Status Bed</th>
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