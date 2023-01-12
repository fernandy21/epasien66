<?php 
    require_once('../conf/conf.php');
    require_once('../conf/command.php');
    if(isset($_POST['getkamar'])){
        $kamar      = trim(isset($_POST['getkamar']))?trim($_POST['getkamar']):NULL;
        $kamar      = cleankar($kamar);
        echo getDataKamar($kamar);
    }else if(isset($_POST['getradiologi'])){
        $radiologi      = trim(isset($_POST['getradiologi']))?trim($_POST['getradiologi']):NULL;
        $radiologi      = cleankar($radiologi); 
        echo getDataRadiologi($radiologi,);
    }else if(isset($_POST['getlayananradiologi'])){
        $radiologi      = trim(isset($_POST['getlayananradiologi']))?trim($_POST['getlayananradiologi']):NULL;
        $radiologi      = cleankar($radiologi); 
        echo getDataRadiologi($radiologi,1);
    }else if(isset($_POST['getlaborat'])){
        $laborat      = trim(isset($_POST['getlaborat']))?trim($_POST['getlaborat']):NULL;
        $laborat      = cleankar($laborat); 
        echo getDataLaborat($laborat,);
    }else if(isset($_POST['getlayananlaborat'])){
        $laborat      = trim(isset($_POST['getlayananlaborat']))?trim($_POST['getlayananlaborat']):NULL;
        $laborat      = cleankar($laborat); 
        echo getDataLaborat($laborat,1);
    }else if(isset($_POST['getoperasi'])){
        $operasi      = trim(isset($_POST['getoperasi']))?trim($_POST['getoperasi']):NULL;
        $operasi      = cleankar($operasi); 
        echo getDataOperasi($operasi,);
    }else if(isset($_POST['getlayananoperasi'])){
        $operasi      = trim(isset($_POST['getlayananoperasi']))?trim($_POST['getlayananoperasi']):NULL;
        $operasi      = cleankar($operasi); 
        echo getDataOperasi($operasi,1);
    }else if(isset($_POST['getcbayar'])){
        $cbayar      = trim(isset($_POST['getcbayar']))?trim($_POST['getcbayar']):NULL;
        $cbayar      = cleankar($cbayar);
        echo getDataCBayar($cbayar);
    }



    // list fungsi
    function getDataRadiologi($radiologi,$key=null)
    {
        $queryradiologi = bukaquery("select jns_perawatan_radiologi.nm_perawatan,jns_perawatan_radiologi.total_byr,jns_perawatan_radiologi.kelas from jns_perawatan_radiologi inner join penjab on penjab.kd_pj=jns_perawatan_radiologi.kd_pj where jns_perawatan_radiologi.status='1' and penjab.png_jawab like '%umum%' order by jns_perawatan_radiologi.kelas");
        $a = array();
            while($rsqueryradiologi = mysqli_fetch_array($queryradiologi)) {
                if($rsqueryradiologi['kelas']=='-'){
                    $rsqueryradiologi['kelas'] = 'Umum';
                }
                array_push($a,$rsqueryradiologi);
            }
        $a = group_by('kelas',$a);
        if($key!=null){
            
        }
        return json_encode($a);
    }

    function getDataKamar($kamar)
    {
        $querykamar = bukaquery("select kamar.kd_kamar,bangsal.nm_bangsal,kamar.kelas,kamar.trf_kamar,kamar.status from bangsal inner join kamar on kamar.kd_bangsal=bangsal.kd_bangsal where kamar.statusdata='1' ".(isset($kamar)?" and (kamar.kd_kamar like '%$kamar%' or bangsal.nm_bangsal like '%$kamar%' or kamar.kelas like '%$kamar%' or kamar.status like '%$kamar%')":"")." order by kamar.kelas");
        $a=array();
        while($rsquerykamar = mysqli_fetch_array($querykamar)) {
            array_push($a,$rsquerykamar);
            }
        return json_encode($a);
    }

    function getDataLaborat($laborat)
    {
        $querylaborat = bukaquery("select jns_perawatan_lab.kd_jenis_prw,jns_perawatan_lab.nm_perawatan,jns_perawatan_lab.total_byr,jns_perawatan_lab.kelas from jns_perawatan_lab inner join penjab on penjab.kd_pj=jns_perawatan_lab.kd_pj where jns_perawatan_lab.status='1' and penjab.png_jawab like '%umum%' ".(isset($laborat)?" and (jns_perawatan_lab.nm_perawatan like '%$laborat%' or jns_perawatan_lab.kelas like '%$laborat%')":"")." order by jns_perawatan_lab.kelas");
        $a = array();
            while($rsquerylaborat = mysqli_fetch_array($querylaborat)) {
                if($rsquerylaborat['kelas']=='-'){
                    $rsquerylaborat['kelas'] = 'Umum';
                }
                array_push($a,$rsquerylaborat);
            }
        $a = group_by('kelas',$a);
        // if($key!=null){
            
        // }
        return json_encode($a);
    }

    function getDataOperasi($operasi)
    {
        $queryoperasi = bukaquery("select paket_operasi.nm_perawatan,(paket_operasi.operator1+paket_operasi.operator2+paket_operasi.operator3+paket_operasi.asisten_operator1+paket_operasi.asisten_operator2+paket_operasi.asisten_operator3+paket_operasi.instrumen+paket_operasi.dokter_anak+paket_operasi.perawaat_resusitas+paket_operasi.alat+paket_operasi.dokter_anestesi+paket_operasi.asisten_anestesi+paket_operasi.asisten_anestesi2+paket_operasi.bidan+paket_operasi.bidan2+paket_operasi.bidan3+paket_operasi.perawat_luar+paket_operasi.sewa_ok+paket_operasi.akomodasi+paket_operasi.bagian_rs+paket_operasi.omloop+paket_operasi.omloop2+paket_operasi.omloop3+paket_operasi.omloop4+paket_operasi.omloop5+paket_operasi.sarpras+paket_operasi.dokter_pjanak+paket_operasi.dokter_umum) as total,paket_operasi.kelas from paket_operasi inner join penjab on penjab.kd_pj=paket_operasi.kd_pj where paket_operasi.status='1' and penjab.png_jawab like '%umum%' and (paket_operasi.nm_perawatan like '%$operasi%' or paket_operasi.kelas like '%$operasi%') order by paket_operasi.kelas");
        $a = array();
            while($rsqueryoperasi = mysqli_fetch_array($queryoperasi)) {
                if($rsqueryoperasi['kelas']=='-'){
                    $rsqueryoperasi['kelas'] = 'Umum';
                }
                array_push($a,$rsqueryoperasi);
            }
        $a = group_by('kelas',$a);
        // if($key!=null){
            
        // }
        return json_encode($a);
    }

    function getDataCBayar($cbayar)
    {
        $querycbayar = bukaquery("select penjab.png_jawab, tabel_reference_jenis_bayar.kd_pj, tabel_reference_jenis_bayar.cara_bayar from tabel_reference_jenis_bayar inner join penjab on penjab.kd_pj=tabel_reference_jenis_bayar.kd_pj where tabel_reference_jenis_bayar.cara_bayar ".(isset($datacbayar)?" and (tabel_reference_jenis_bayar.cara_bayar like '%$datacbayar%')":"")." order by penjab.png_jawab");
        $a=array();
        while($rsquerycbayar = mysqli_fetch_array($querycbayar)) {
            array_push($a,$rsquerycbayar);
            }
        return json_encode($a);
    }

?>