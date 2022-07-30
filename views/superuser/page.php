<?php

$page = isset($_GET['p']) ? $_GET['p'] : "";

if ($page == 'formpesan') {
    include_once "formpesan.php";
} else if ($page == "") {
    include_once "main.php";
} else if ($page == 'form_preuse') {
    include_once "form_preuse.php";
} else if ($page == 'draft_preuse') {
    include_once "draft_preuse.php";
} else if ($page == 'preuse_detail') {
    include_once "preuse_detail.php";
} else if ($page == 'preuse_approval') {
    include_once "preuse_approval.php";
} else if ($page == 'preuse_verifikasi') {
    include_once "preuse_verifikasi.php";
} else if ($page == 'preuse_transaksi') {
    include_once "preuse_transaksi.php";
} else if ($page == 'equipment') {
    include_once "equipment.php";
} else if ($page == 'cetak_preuse') {
    include_once "cetak_preuse.php";
}
