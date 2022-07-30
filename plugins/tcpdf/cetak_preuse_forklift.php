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
                  <td style='text-align: center; rowspan=\"6\"; ' > Engine </td>
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

                <tr>
                  <td style='text-align: center;'> 3 </td>
                  <td style='text-align: center;'> [Radiator] - V-Belt </td>
                  <td style='text-align: center;'> v </td>
                  <td style='text-align: center;'> </td>
                </tr>

                <tr>
                  <td style='text-align: center;'> 4 </td>
                  <td style='text-align: center;'> [Bahan Bakar] - Tangki Bahan Bakar & Solar </td>
                  <td style='text-align: center;'> v </td>
                  <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 5 </td>
                <td style='text-align: center;'> [Oli] - Oli Engine </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
            </tr>

              <tr>
                <td style='text-align: center;'> 6 </td>
                <td style='text-align: center;'> [Oli] - Oli Hidraulik </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
            </tr>

              <tr>
                <td style='text-align: center; rowspan=\"15\"; ' > Kelistrikan </td>
                <td style='text-align: center;'> 7 </td>
                <td style='text-align: center;'> [Batteray/Accu] - Air Accu </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
            </tr>

              <tr>
                <td style='text-align: center;'> 8 </td>
                <td style='text-align: center;'> [Batteray Accu] - Kabel Batteray </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
            </tr>

              <tr>
                <td style='text-align: center;'> 9 </td>
                <td style='text-align: center;'> [Batteray Accu] - Kepala Batteray </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
            </tr>

              <tr>
                <td style='text-align: center;'> 10 </td>
                <td style='text-align: center;'> [Batteray Accu] - Tutup Pelindung Kepala Batteray </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
            </tr>

              <tr>
                <td style='text-align: center;'> 11 </td>
                <td style='text-align: center;'> [Lampu-Lampu] - Lampu Rotary </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
            </tr>

              <tr>
                <td style='text-align: center;'> 12 </td>
                <td style='text-align: center;'> [Lampu-Lampu] - Lampu Depan </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
            </tr>

              <tr>
                <td style='text-align: center;'> 13 </td>
                <td style='text-align: center;'> [Lampu-Lampu] - Lampu Rem </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
            </tr>

              <tr>
                <td style='text-align: center;'> 14 </td>
                <td style='text-align: center;'> [Lampu-Lampu] - Lampu Mundur </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
            </tr>

              <tr>
                <td style='text-align: center;'> 15 </td>
                <td style='text-align: center;'> [Lampu-Lampu] - Lampu Sein </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
            </tr>

              <tr>
                <td style='text-align: center;'> 16 </td>
                <td style='text-align: center;'> [Indikator Alarm] - Indikator Pengisian Accu </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
            </tr>

              <tr>
                <td style='text-align: center;'> 17 </td>
                <td style='text-align: center;'> [Indikator Alarm] - Indikator Temperatur Air </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
            </tr>

              <tr>
                <td style='text-align: center;'> 18 </td>
                <td style='text-align: center;'> [Indikator Alarm] - Indikator Oli Engine </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
            </tr>

              <tr>
                <td style='text-align: center;'> 19 </td>
                <td style='text-align: center;'> [Indikator Alarm] - Alarm Mundur </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
            </tr>

              <tr>
                <td style='text-align: center;'> 20 </td>
                <td style='text-align: center;'> [Indikator Alarm] - Klakson </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
            </tr>

              <tr>
                <td style='text-align: center;'> 21 </td>
                <td style='text-align: center;'> [Pembersih Kaca] - Wiper </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
            </tr>

              <tr>
              <td style='text-align: center; rowspan=\"4\"; ' > Fungsi Pengereman </td>
                <td style='text-align: center;'> 22 </td>
                <td style='text-align: center;'> [Rem Kaki] - Minyak Rem </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 23 </td>
                <td style='text-align: center;'> [Rem Kaki] - Master Rem </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 24 </td>
                <td style='text-align: center;'> [Rem Tangan] - Kanvas Rem </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 25 </td>
                <td style='text-align: center;'> [Rem Tangan] - Kabel Rem </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center; rowspan=\"10\"; ' >  Perangkat Penggerak Forklift </td>
                <td style='text-align: center;'> 26 </td>
                <td style='text-align: center;'> [Fork / garpu] - Pengunci Garpu / Lock Fork </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 27 </td>
                <td style='text-align: center;'> [Fork / garpu] - Roller Bearing Fork </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 28 </td>
                <td style='text-align: center;'> [Fork / garpu] - Pengaman Garpu / Guard Fork </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 29 </td>
                <td style='text-align: center;'> [Chain / Rantai] - Ketegangan Rantai </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 30 </td>
                <td style='text-align: center;'> [Chain / Rantai] - Roller Bearing Rantai </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 31 </td>
                <td style='text-align: center;'> [Chain / Rantai] - Pelumasan Rantai / Chain Greasing </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 32 </td>
                <td style='text-align: center;'> [Cylinder Hydraulic] - Cylinder Tilt </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 33 </td>
                <td style='text-align: center;'> [Cylinder Hydraulic] - Cylinder Maslift </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 34 </td>
                <td style='text-align: center;'> [Cylinder Hydraulic] - Cylinder Steering </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 35 </td>
                <td style='text-align: center;'> [Cylinder Hydraulic] - Steering Axle </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center; rowspan=\"9\"; ' > Lain-Lain </td>
                <td style='text-align: center;'> 36 </td>
                <td style='text-align: center;'> [Body] - Cabin & Lantai (Deck) </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 37 </td>
                <td style='text-align: center;'> [Jok/Tempat Duduk] - Karpet / Kulit Jok </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 38 </td>
                <td style='text-align: center;'> [Jok/Tempat Duduk] - Sabuk Pengaman </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 39 </td>
                <td style='text-align: center;'> [Spion] - Kaca Spion </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 40 </td>
                <td style='text-align: center;'> [Ban] - Tekanan Angin </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 41 </td>
                <td style='text-align: center;'> [Ban] - Kembangan Ban </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 42 </td>
                <td style='text-align: center;'> [APAR] - Tabung APAR </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 43 </td>
                <td style='text-align: center;'> [Kebocoran] - Kebocoran Oli </td>
                <td style='text-align: center;'> v </td>
                <td style='text-align: center;'> </td>
              </tr>

              <tr>
                <td style='text-align: center;'> 44 </td>
                <td style='text-align: center;'> [Kebocoran] - Kebocoran Angin </td>
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
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8, false');
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
  <p align="left" style="width: 200px;"><font style="font-size: 18px"><b>EKANURI</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <font style="font-size: 15px"><b>PRE USE</b></font>
  <br><font style="font-size: 8px">Jl. Ketel Uap I No. 1 Jakarta Utara DKI Jakarta<br>Telp :  (021) 439-02157 | Fax : (021) 385-0830</font></p>
  
  <font size="8">
  <table border="0" cellpadding="1" >
    <tr>  
      <th style="width: 60px;">Area</th>
      <th style="width: 8px;"> : </th>
      <th style="width: 200px;">  </th>
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
        
        <th style="text-align: center; width:270" ><b>PART</b></th>
        
        <th style="vertical-align: middle; text-align: center; width: 55px" ><b>Baik</b></th>
        <th style="text-align: center; vertical-align: middle; width: 55px" ><b>Buruk</b></th>
      </tr>
    ';
$content .= fetch_data();
$content .= '</table> <br><br><br>';

$content .= '<br><br><br><br><table border="0" cellpadding="3">
                <tr>
                  <th style="text-align: center; width: 165px;">Menyetujui :<br>Mekanik<br><br><br><br><br><b>(............................................)</b></th>
                  <th style="text-align: center; width: 150px;">Dibuat Oleh :<br>Operator<br><br><br><br><br><b>(nama)</b></th>
                  <th style="text-align: center; width: 150px;">Diperiksa Oleh :<br>Supervisor/Team Leader<br><br><br><br><br><b>(............................................)</b></th>
                </tr>
              </table></font>';

$obj_pdf->writeHTML($content);
$obj_pdf->Output('PreUse-.pdf', 'I');
