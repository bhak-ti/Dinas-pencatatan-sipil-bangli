<?php
error_reporting(0); //abaikan error pada browser
//panggil file koneksi.php yang sudah anda buat
include "koneksi.php";
?>
<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>

       <title>Edit</title>
</head>
<body class="bg-light">
<h1 align="center"> Edit Data Penduduk</h1>
<?php
//ambil data berdasarkan parameter GET id
$id = $_GET['id'];
$b = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM kepadatan where kodedagri='$id'"));

//buat variabel dari setiap field name form produk
$kecamatan= mysqli_real_escape_string($conn, $_POST['kecamatan']);    //varibel field nama
$kodedagri= mysqli_real_escape_string($conn, $_POST['kodedagri']);    //varibel field stok
$jml= mysqli_real_escape_string($conn, $_POST['jml']);  //varibel field deskripsi


if(isset($_POST['simpan'])){
 if(empty($jml)){    //jika nama kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan Jumlah Penduduk</p>";
    }
    
    else{  //jika semua sudah terpenuhi maka update ke tb_produk

    $save=mysqli_query($conn, "UPDATE kepadatan set kecamatan='$kecamatan',kodedagri='$kodedagri',jml='$jml' where kodedagri='$kodedagri'");
    if($save){ //jika update berhasil maka muncul pesan dan menuju ke halaman produk
        echo "<script>alert('Data Produk Berhasil disimpan ke database');document.location='index.php'</script>";
    }else{  //jika update gagal maka muncul pesan
         echo "<script>alert('Proses simpan gagal, coba kembali');document.location='edit.php'</script>";
    }
}
}
?>
<form class="mt-5" action="" method="post" enctype="multipart/form-data">
    <table  border="0" cellpadding="10" cellspacing="10" width="800" align="center">
    <tbody>
    <tr><td colspan="3"><?php echo $error;?></td></tr>
    <tr>
        <td>Kecamatan</td>
        <td>:</td>
        <td><input class="form-control" type="text" name="kecamatan" placeholder="kecamatan" readonly size="50" maxlength="30" autocomplete="off" autofocus value="<?php echo $b['kecamatan'];?>"/>
        </td>
    </tr>
    <tr>
        <td>Kode Dagri</td>
        <td>:</td>
        <td><input class="form-control" type="text" name="kodedagri" placeholder="kodedagri" readonly size="50" maxlength="30" autocomplete="off" autofocus value="<?php echo $b['kodedagri'];?>"/>
        </td>
    </tr>
    <tr>
        <td>Jumlah Penduduk</td>
        <td>:</td>
        <td><input class="form-control" type="number" name="jml" placeholder="jml" autocomplete="off" autofocus value="<?php echo $b['jml'];?>"/>
        </td>
    </tr>
    
    <tr>
        <td colspan="3">
            <button class="btn btn-info btn-sm mt-5 "  type="submit" name="simpan" onclick="return confirm('Anda yakin ingin menyimpan data?')">Simpan</button>
           <a href="index.php" class="btn btn-danger btn-sm mt-5 ml-2">Kembali</a>
        </td>
    </tr>
    </tbody>

</table>
</form>

</body>
</html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>