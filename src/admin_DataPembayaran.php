<?php
    require 'connection.php';
    session_start();
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="output.css" rel="stylesheet">
</head>
<body class="bg-[#DFEBFB] h-screen flex ">
<header class="bg-[#5651AB] w-[344px] rounded-r-3xl flex flex-col justify-between items-start ">
      <nav class="">
          <ul class="text-[#A4B3C7] text-2xl">
                <li class="m-10 mt-16 flex gap-3 active:text-white hover:text-white  items-center">
                    <svg class=" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="m21.743 12.331l-9-10c-.379-.422-1.107-.422-1.486 0l-9 10a.998.998 0 0 0-.17 1.076c.16.361.518.593.913.593h2v7a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-4h4v4a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-7h2a.998.998 0 0 0 .743-1.669"/></svg>
                    <a class="active:text-white" href="admin_home.php">Beranda</a>
                </li>
                <li class="m-10 flex gap-3 active:text-white text-white  items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256"><path fill="currentColor" d="M216 32v160a8 8 0 0 1-8 8H72a16 16 0 0 0-16 16h136a8 8 0 0 1 0 16H48a8 8 0 0 1-8-8V56a32 32 0 0 1 32-32h136a8 8 0 0 1 8 8"/></svg>
                    <a href="admin_dataSiswa.php">Data Siswa</a>
                </li>
            </ul>
        </nav>
        <div class="text-[#A4B3C7] hover:text-white text-2xl m-10 flex gap-3 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h7v2H5v14h7v2zm11-4l-1.375-1.45l2.55-2.55H9v-2h8.175l-2.55-2.55L16 7l5 5z"/></svg>
            <a href="<?php $_SERVER['PHP_SELF']; ?>">Keluar</a>
        </div>
    </header>
    <main class="p-16 w-[841px]">
        <h1 class="mb-4 text-5xl font-bold text-[#150D5C]">Laporan Pembelajaran Siswa</h1>
        <a href="admin_formTambahPembayaran.php" class="font-semibold p-2 bg-green-500 text-white rounded-lg" >Tambah Data</a>
        <!-- DATA PEMBAYARAN -->
        <div class="justify-start items-center bg-white p-8 gap-10 w-[872px] mt-8 rounded-3xl">
            <h1 class="text-3xl font-semibold mb-4">Status Pembayaran</h1>
            <div class="bg-[#DBFFEF] p-4 rounded-3xl mb-4">
                <span class="text-xl font-semibold">September</span>
                <p class="text-[#5E5E5E]">Telah Lunas Pada 5 Maret 2023</p>
            </div>
            <div class="bg-[#DBFFEF] p-4 rounded-3xl mb-4">
                <span class="text-xl font-semibold">Oktober</span>
                <p class="text-[#5E5E5E]">Telah Lunas Pada 5 Maret 2023</p>
            </div>
            <div class="bg-[#DBFFEF] p-4 rounded-3xl mb-4">
                <span class="text-xl font-semibold">Novermber</span>
                <p class="text-[#5E5E5E]">Telah Lunas Pada 5 Maret 2023</p>
            </div>
            <div class="bg-[#FFEAF1] p-4 rounded-3xl">
                <span class="text-xl font-semibold">Desember</span>
                <p class="text-[#5E5E5E]">Telah Lunas Pada 5 Maret 2023</p>
            </div>
        </div>
        <!-- Data Pembayaran end -->
    </main>
</body>
</html>