<?php

$id = base64_decode($_GET['id']);


$data = mysqli_query($koneksi, "SELECT * FROM pre_uses p 
                                JOIN equipment e 
                                ON p.equipment_id = e.id
                                WHERE p.id = '$id'
                                ");

$pu = mysqli_fetch_assoc($data);


?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Detail Pre Use Checklist</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Pre Use Detail</li>
                </ol>
            </div>
        </div>

    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- <div class="card"> -->
                <div class="col-md-6">
                    <label for="">Equipment : <?= $pu['name'] ?></label><br>
                    <label for="">Tangal Inspection : <?= $pu['created_at'] ?></label>
                    <!-- <input type="text" value="" readonly> -->
                </div>
                <!-- </div> -->
            </div>
        </div>
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Pre Use Detail </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Part</th>
                                    <th>Baik</th>
                                    <th>Buruk</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- part -->
                                <tr>
                                    <td>Air Radiator</td>
                                    <?php
                                    if ($pu['air_radiator'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Hose Radiator</td>
                                    <?php
                                    if ($pu['hose_radiator'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->

                                <!-- part -->
                                <tr>
                                    <td>V Belt</td>
                                    <?php
                                    if ($pu['v_belt'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Tangki BBM</td>
                                    <?php
                                    if ($pu['tangki_bbm'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Oli Engine</td>
                                    <?php
                                    if ($pu['oli_engine'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Oli Hydraulik</td>
                                    <?php
                                    if ($pu['oli_hydraulik'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Air Accu</td>
                                    <?php
                                    if ($pu['air_accu'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Kabel Battery</td>
                                    <?php
                                    if ($pu['kabel_battery'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>TPKB</td>
                                    <?php
                                    if ($pu['tpkb'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Lampu Rotary</td>
                                    <?php
                                    if ($pu['lampu_rotary'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Lampu Depan</td>
                                    <?php
                                    if ($pu['lampu_depan'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Lampu Rem</td>
                                    <?php
                                    if ($pu['lampu_rem'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Lampu Mundur</td>
                                    <?php
                                    if ($pu['lampu_mundur'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Lampu Sein</td>
                                    <?php
                                    if ($pu['lampu_sein'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Indikator PA</td>
                                    <?php
                                    if ($pu['indikator_pa'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Indikator Ta</td>
                                    <?php
                                    if ($pu['indikator_ta'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Indikator Oe</td>
                                    <?php
                                    if ($pu['indikator_oe'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Alarm Mundur</td>
                                    <?php
                                    if ($pu['alarm_mundur'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Klakson</td>
                                    <?php
                                    if ($pu['klakson'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Wiper</td>
                                    <?php
                                    if ($pu['wiper'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Kerangka Boom</td>
                                    <?php
                                    if ($pu['kerangka_boom'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Roller Hook</td>
                                    <?php
                                    if ($pu['roller_hook'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>KP Hook</td>
                                    <?php
                                    if ($pu['kp_hook'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Kanvas Rem Winch</td>
                                    <?php
                                    if ($pu['kanvas_rem_winch'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Drum Winch</td>
                                    <?php
                                    if ($pu['drum_winch'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Wire Sling</td>
                                    <?php
                                    if ($pu['wire_sling'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Kerusakan</td>
                                    <?php
                                    if ($pu['kerusakan'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                                <!-- part -->
                                <tr>
                                    <td>Greasing</td>
                                    <?php
                                    if ($pu['greasing'] == '1') {

                                        echo "<td><i class='fa fa-check'></i></td>";
                                        echo "<td></td>";
                                    } else {
                                        echo "<td></td>";
                                        echo "<td><i class='fa fa-check'></i></td>";
                                    }

                                    ?>
                                </tr>
                                <!-- part -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>

    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->