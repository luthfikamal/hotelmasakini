<?php
    session_start();
	require_once "fungsi/koneksi.php";
    if(isset($_SESSION['user'])) {
        echo "<script>window.location.replace('user/')</script>";
    }
    else {
        unset($_SESSION['user']);
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan Kamar Pada Hotel Uno Kendari</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/image.css">
  <link rel="stylesheet" type="text/css" href="cekin.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script type="text/javascript" src="lib/sweet.js"></script>
	<style type="text/css">
  
		
		
	</style>
</head>
<body>

	<!-- <nav>
		<ul>
			
			<li><a href="index">Beranda</a></li>
			<li><a href="kamar">Kamar</a></li>
			<li><a href="fasilitas">Fasilitas</a></li>
			<li><a href="daftar">Daftar</a></li>
			<li><a href="login">Login</a></li>
			
		</ul>
	</nav> -->
	

<nav class="navbar navbar-expand-lg bg-light navbar-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="index">Beranda</a>

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
      </ul>

      <!-- Icons -->
      <ul class="navbar-nav d-flex flex-row me-1">
        <li class="nav-item me-3 me-lg-0">
        <a class="nav-link" aria-current="page" href="kamar">kamar</a>
        </li>
        <li class="nav-item me-3 me-lg-0">
        <a class="nav-link" href="fasilitas">fasilitas</a>
        </li>
        <li class="nav-item me-3 me-lg-0">
        <a class="nav-link" href="daftar">daftar</a>
        </li>
        <li class="nav-item me-3 me-lg-0">
        <a class="nav-link" href="login">login</a>
        </li>
      </ul>
    </div>
  </div>
  <!-- Container wrapper -->
</nav>

	<div class="uatama">
		<center>
		

			