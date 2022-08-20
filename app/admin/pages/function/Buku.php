<?php
session_start();
include "../../../../config/koneksi.php";

if ($_GET['act'] == "tambah") {
    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $isbn = $_POST['isbn'];
    $penerbit = $_POST['penerbit'];
    $deskripsi = $_POST['deskripsi'];

    // PROCESS INSERT DATA TO DATABASE
    $sql = "INSERT INTO buku(judul_buku,isbn,penerbit,deskripsi)
        VALUES('" . $judul_buku . "','" . $isbn . "','" . $penerbit . "','" . $deskripsi .  "')";
    $sql .= mysqli_query($koneksi, $sql);

    if ($sql) {
        $_SESSION['berhasil'] = "Data buku berhasil ditambahkan !";
        header("location: " . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['gagal'] = "Data buku gagal ditambahkan !";
        header("location: " . $_SERVER['HTTP_REFERER']);
    }
} elseif ($_GET['act'] == "edit") {
    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $isbn = $_POST['isbn'];
    $penerbit = $_POST['penerbit'];
    $deskripsi = $_POST['deskripsi'];

    // PROCESS EDIT DATA
    $query = "UPDATE buku SET judul_buku = '$judul_buku', isbn = '$isbn', 
                penerbit = '$penerbit', deskripsi = '$deskripsi' ";

    $query .= "WHERE id_buku = $id_buku";

    $sql = mysqli_query($koneksi, $query);
    if ($sql) {
        $_SESSION['berhasil'] = "Data buku berhasil diedit !";
        header("location: " . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['gagal'] = "Data buku gagal diedit !";
        header("location: " . $_SERVER['HTTP_REFERER']);
    }
} elseif ($_GET['act'] == "hapus") {
    $id_buku = $_GET['id'];

    $sql = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku = '$id_buku'");

    if ($sql) {
        $_SESSION['berhasil'] = "Data buku berhasil di hapus !";
        header("location: " . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['gagal'] = "Data buku gagal di hapus !";
        header("location: " . $_SERVER['HTTP_REFERER']);
    }
}
