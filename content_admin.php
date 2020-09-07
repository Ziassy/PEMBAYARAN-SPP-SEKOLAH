<?php
include "koneksi.php";
$modul = $_GET['module'];
if ($modul == 'home') {

    include "home.php";
} else if ($modul == 'menu') {
    include "modul_admin/menu/menu.php";
} else if ($modul == 'register_menu') {
    include "modul_admin/menu/register_menu.php";
} else if ($modul == 'update_menu') {
    include "modul_admin/menu/update_menu.php";
} else if ($modul == 'update_proses_menu') {
    include "modul_admin/menu/update_proses_menu.php";
} else if ($modul == 'delete_menu') {
    include "modul_admin/menu/delete_menu.php";
} else if ($modul == 'laporan_menu') {
    include "modul_admin/menu/laporan_menu.php";
} else if ($modul == 'pembayaran') {
    include "modul_admin/pembayaran/pembayaran.php";
} else if ($modul == 'register_pembayaran') {
    include "modul_admin/pembayaran/register_pembayaran.php";
} else if ($modul == 'update_pembayaran') {
    include "modul_admin/pembayaran/update_pembayaran.php";
} else if ($modul == 'update_proses_pembayaran') {
    include "modul_admin/pembayaran/update_proses_pembayaran.php";
} else if ($modul == 'delete_pembayaran') {
    include "modul_admin/pembayaran/delete_pembayaran.php";
} else if ($modul == 'laporan_pembayaran') {
    include "modul_admin/pembayaran/laporan_pembayaran.php";
} else if ($modul == 'siswa') {
    include "modul_admin/siswa/siswa.php";
} else if ($modul == 'register_siswa') {
    include "modul_admin/siswa/register_siswa.php";
} else if ($modul == 'update_siswa') {
    include "modul_admin/siswa/update_siswa.php";
} else if ($modul == 'update_proses_siswa') {
    include "modul_admin/siswa/update_proses_siswa.php";
} else if ($modul == 'delete_siswa') {
    include "modul_admin/siswa/delete_siswa.php";
} else if ($modul == 'laporan_siswa') {
    include "modul_admin/siswa/laporan_siswa.php";
} else if ($modul == 'kelas') {
    include "modul_admin/kelas/kelas.php";
} else if ($modul == 'register_kelas') {
    include "modul_admin/kelas/register_kelas.php";
} else if ($modul == 'update_kelas') {
    include "modul_admin/kelas/update_kelas.php";
} else if ($modul == 'update_proses_kelas') {
    include "modul_admin/kelas/update_proses_kelas.php";
} else if ($modul == 'delete_kelas') {
    include "modul_admin/kelas/delete_kelas.php";
} else if ($modul == 'laporan_kelas') {
    include "modul_admin/kelas/laporan_kelas.php";
} else if ($modul == 'spp') {
    include "modul_admin/spp/spp.php";
} else if ($modul == 'register_spp') {
    include "modul_admin/spp/register_spp.php";
} else if ($modul == 'update_spp') {
    include "modul_admin/spp/update_spp.php";
} else if ($modul == 'update_proses_spp') {
    include "modul_admin/spp/update_proses_spp.php";
} else if ($modul == 'delete_spp') {
    include "modul_admin/spp/delete_spp.php";
} else if ($modul == 'laporan_spp') {
    include "modul_admin/spp/laporan_spp.php";
} else if ($modul == 'petugas') {
    include "modul_admin/petugas/petugas.php";
} else if ($modul == 'register_petugas') {
    include "modul_admin/petugas/register_petugas.php";
} else if ($modul == 'update_petugas') {
    include "modul_admin/petugas/update_petugas.php";
} else if ($modul == 'update_proses_petugas') {
    include "modul_admin/petugas/update_proses_petugas.php";
} else if ($modul == 'delete_petugas') {
    include "modul_admin/petugas/delete_petugas.php";
} else if ($modul == 'laporan_petugas') {
    include "modul_admin/petugas/laporan_petugas.php";
} 

else {
    echo "<b>MODUL BELUM ADA ATAU BELUM LENGKAP SILAHKAN BUAT SENDIRI</b>";
}
