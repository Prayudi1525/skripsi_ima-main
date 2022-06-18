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
                <h1>Draft Pre Use Checklist</h1>
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