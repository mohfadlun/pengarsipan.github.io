<?php

      @$halaman = $_GET['halaman'];
         if ($halaman =="departemen") 
               // code...Tampilkan halaman departemen
         
          {
            //echo "tampilkan halaman modul departemen";
             //echo "tampil halaman modul departemen";
            include "modul/departemen/departemen.php";
          }

      elseif ($halaman == "pengirim_surat") {
            // code... tampilan halaman surat keluar
            include "modul/pengirim_surat/pengirim_surat.php";
      }
      elseif ($halaman == "arsip_surat") 
      {
            //tampilkan halaman surat masuk 
           if(@$_GET['hal'] == "tambahdata" || @$_GET['hal'] == "edit" || @$_GET['hal'] == "hapus"){
            include "modul/arsip/form.php";
           }else{
            include "modul/arsip/data.php";
           }
      }
      else
      {
            //echo "tampil halaman home";//
            include "modul/home.php";
      }
?>     
