<?php

if (isset($_POST['approved'])) {

    $id = $_POST['id'];
    // print_r($_POST);

    $updateStatus = mysqli_query($koneksi, "UPDATE pre_uses SET status = '3' WHERE id = '$id'  ");

    if ($updateStatus) {
        setcookie('pesan', 'Pre Use berhasil di Approved!', time() + (3), '/');
        setcookie('warna', 'alert-success', time() + (3), '/');
    } else {

        setcookie('pesan', 'Pre Use gagal di Approved!', time() + (3), '/');
        setcookie('warna', 'alert-danger', time() + (3), '/');

        // die("ada kesalahan : " . mysqli_error($koneksi));
    }
    header("location:index.php?p=preuse_approval");
}

$data = mysqli_query($koneksi, "SELECT p.*, e.name  FROM pre_uses p 
                                JOIN equipment e 
                                ON p.equipment_id = e.id
                                WHERE p.status = '2'
                                ");

?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Verifikasi Pre Use Checklist</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Verifikasi</li>
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
            <div class="col-md-9">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Verifikasi</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">ID</th>
                                    <th>Date</th>
                                    <th>Equipment</th>
                                    <th>Inspection</th>
                                    <th>Approved</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // $pus = mysqli_fetch_assoc($data);
                                foreach ($data as $key => $pu) {

                                    $total = 31;

                                    // $oke = $pu['air_radiator'] + $pu['hose_radiator'] + $pu['v_belt'];

                                    $oke = $pu['air_radiator'] + $pu['hose_radiator'] + $pu['v_belt'] + $pu['tangki_bbm'] + $pu['oli_engine'] + $pu['oli_hydraulik'] + $pu['air_accu'] + $pu['kabel_battery'] + $pu['kepala_battery'] + $pu['tpkb'] + $pu['lampu_rotary'] + $pu['lampu_depan'] + $pu['lampu_rem'] + $pu['lampu_mundur'] + $pu['lampu_sein'] + $pu['indikator_pa'] + $pu['indikator_ta'] + $pu['indikator_oe'] + $pu['alarm_mundur'] + $pu['klakson'] + $pu['wiper'] + $pu['kerangka_boom'] + $pu['roller_hook'] + $pu['kp_hook'] + $pu['kanvas_rem_winch'] + $pu['drum_winch'] + $pu['wire_sling'] + $pu['gear_swing'] + $pu['drums_swing'] + $pu['kerusakan'] + $pu['greasing'];

                                    $terdeteksi = $total - $oke;

                                ?>

                                    <tr>
                                        <td><a href="?p=preuse_detail&id=<?= base64_encode($pu['id']) ?>"><?= $key + 1 ?></a></td>
                                        <td><?= formatTanggal($pu['created_at']) ?></td>
                                        <td><?= $pu['name'] ?></td>
                                        <td>
                                            <?php
                                            if ($terdeteksi > 0) {
                                                # code...
                                                echo "<span class='text-danger'>" . $terdeteksi . " <small>Terdeteksi</small></span>/ ";
                                            } else {
                                                # code...
                                                echo "0/";
                                            }


                                            ?>
                                            <?= $total ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#approve-<?= $pu['id'] ?>">
                                                <i class="fa fa-check"></i>
                                            </button>
                                            <a href="?p=preuse_detail&id=<?= base64_encode($pu['id']) ?>"><button class="btn bg-warning"><i class="fa fa-search"></i></button></a>


                                            <!-- Modal -->
                                            <div class="modal fade" id="approve-<?= $pu['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form action="" method="post">
                                                            <input type="hidden" name="id" value="<?= $pu['id'] ?>">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Apa anda yakin ingin menyetujui preuse checklist <?= $pu['name'] ?> ?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" name="approved" class="btn btn-primary">Approved</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Modal -->


                                        </td>
                                    </tr>

                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>

    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->