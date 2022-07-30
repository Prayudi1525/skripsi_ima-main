<?php

function fetch_data()
{
    //output
    ob_end_clean();
    // include "../../fungsi/koneksi.php";

    // if (isset($_GET['id'])) {
    //     $idJoborder = $_GET['id'];
    // }
    $output = '';

    // $sql = "SELECT ac.time_as, ac.id_cargo, ac.doc_no_as, sum(ac.qty_as) as qty_as, ac.rincian_cargo, j.p, j.l, j.t, ac.remarks_as, ac.keterangan, sum(ac.m3_as) as m3_as, sum(ac.ton_as) as ton_as, sum(ac.revton_as) as revton_as, d.id_cargo
    //               FROM actual_stevedoring ac
    //               JOIN detail_joborder d        
    //               ON ac.id_cargo = d.id_cargo
    //               JOIN jenis_barang j
    //               ON ac.id_jenis = j.id_jenis
    //               WHERE ac.id_joborder = '$idJoborder'
    //               AND d.id_joborder = '$idJoborder'
    //               AND ac.keterangan != 'Not Available'
    //              -- AND d.doc_no = ac.doc_no_as
    //               GROUP BY ac.id_cargo
    //               ORDER BY d.id_cargo ASC 
    //               ";

    // $result = mysqli_query($koneksi, $sql);

    // $i = 1;

    // $sqlTotal = "SELECT total_cargo FROM job_order
    //         WHERE id_joborder = '$idJoborder'";
    // $total = mysqli_query($koneksi, $sqlTotal);
    // $rowTotal = mysqli_fetch_array($total);

    // $sm3 = 0.00;
    // $ston = 0.00;
    // $tonm3 = 0.00;

    // while ($row = mysqli_fetch_array($result)) {
    $output .= "
                <tr>
                  <td style='text-align: center; rowspan=\"2\"; ' > Engine </td>
                  <td style='text-align: center;'> 1 </td>
                  <td style='text-align: center;'> [Radiator] - Air Radiator </td>
                  <td style='text-align: center;'> v </td>
                  <td style='text-align: center;'> </td>
                </tr>

                <tr>
                
                  <td style='text-align: center;'> 2 </td>
                  <td style='text-align: center;'> [Radiator] - Hose Radiator </td>
                  <td style='text-align: center;'> v </td>
                  <td style='text-align: center;'> </td>
                </tr>

                ";
    // }
    // $output .= "<tr>
    //             <td style='text-align: center; colspan=\"9\";'><p><b>Total Cargo</b></p> </td>
    //             <td style='text-align: center; '><b>" . $sm3 . "</b></td>
    //             <td style='text-align: center; '><b>" . $ston . "</b></td>
    //             <td style='text-align: center; '><b>" . $tonm3 . "</b></td>
    //           </tr>";
    return $output;
}

require_once 'library/tcpdf.php';
$obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8, false');
$obj_pdf->SetCreator(PDF_CREATOR);
$obj_pdf->SetTitle("Pre Use ");
$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
$obj_pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setHeaderFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetMargins(15, 15, 15);
$obj_pdf->setPrintHeader(false);
$obj_pdf->setPrintFooter(true);
$obj_pdf->setAutoPageBreak(true, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 11);
$obj_pdf->AddPage();
$style = array('width' => 0.7, 'dash' => '2, 2, 2, 2', 'phase' => 0);
$obj_pdf->Line(5, 30, 290, 30, $style);

//content
$content = '';
// include "../../fungsi/koneksi.php";
// include "../../fungsi/fungsi.php";
// if (isset($_GET['id'])) {
//     $idJoborder = $_GET['id'];
// }

// $sqlJO = "SELECT * FROM job_order a
//   INNER JOIN client b
//     ON a.id_client = b.id_client
//   INNER JOIN user
//   	ON id_checker = id_user
//   WHERE id_joborder = '$idJoborder'";
// $data = mysqli_query($koneksi, $sqlJO);
// $rowData = mysqli_fetch_array($data);

// $alat_berat3 = $rowData['alat_berat3'] != "NULL" ? $rowData['alat_berat3'] : "";
// $alat_berat4 = $rowData['alat_berat4'] != "NULL" ? $rowData['alat_berat4'] : "";
// $alat_berat5 = $rowData['alat_berat5'] != "NULL" ? $rowData['alat_berat5'] : "";

$content .= '
  <p align="left" style="width: 550px;"><font style="font-size: 18px"><b>EKANURI</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <font style="font-size: 15px"><b>PRE USE</b></font>
  <br><font style="font-size: 8px">Jl. Ketel Uap I No. 1 Jakarta Utara DKI Jakarta<br>Telp :  (021) 439-02157 | Fax : (021) 385-0830</font></p>
  
  <font size="8">
  <table border="0" cellpadding="1" >
    <tr>  
      <th style="width: 60px;">Area</th>
      <th style="width: 8px;"> : </th>
      <th style="width: 490px;">  </th>
      <th style="width: 63px;">Tanggal</th>
      <th style="width: 8px;"> : </th>
      <th>  </th>
    </tr>
    <tr>  
      <th>Equipment</th>
      <th> : </th>
      <th></th>
      <th>Operator</th>
      <th> : </th>
      <th></th>
    </tr>
    
  </table> </font><br>';

$content .= '<font size="7">
    <table border="1" cellspacing="0" cellpadding="2" align="center">
    
      <tr>
         <th style="text-align: center; width: 70px;" ><b>KOMPONEN </b></th>
        <th style="text-align: center; width: 40px;" ><b>NO.</b></th>
        
        <th style="text-align: center; width: 530" ><b>PART</b></th>
        
        <th style="vertical-align: middle; text-align: center; width: 55px" ><b>Baik</b></th>
        <th style="text-align: center; vertical-align: middle; width: 55px" ><b>Buruk</b></th>
      </tr>
    ';
$content .= fetch_data();
$content .= '</table> <br><br><br>';

$content .= '<table border="0" cellpadding="3">
                <tr>
                  <th style="text-align: center; width: 150px;">Menyetujui :<br>HSE.<br><br><br><br><br><b>(............................................)</b></th>
                  <th style="text-align: center; width: 460px;">Dibuat Oleh :<br>Checker<br><br><br><br><br><b>(nama)</b></th>
                  <th style="text-align: center; width: 150px;">Diperiksa Oleh :<br>Supervisor/Team Leader<br><br><br><br><br><b>(............................................)</b></th>
                </tr>
              </table></font>';

$obj_pdf->writeHTML($content);
$obj_pdf->Output('PreUse-.pdf', 'I');
