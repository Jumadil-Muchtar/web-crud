<?php
//koneksi database
$server = "localhost";
$user = "root";
$pass = "";
$database = "dbpertemuan12";

$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));

//aktifkan tombol simpan
if (isset($_POST['bsimpan'])) {
    if ($_GET['hal'] == "edit") {


        $gambar = upload();
        if (!$gambar) {
            header('location: index.php');
            return false;
        }
        $edit = mysqli_query($koneksi, "UPDATE tmhs set 
        gambar = '$gambar',
        nim='$_POST[tnim]',
        nama='$_POST[tnama]',
        alamat='$_POST[talamat]',
        prodi='$_POST[tprodi]'
        WHERE id_mhs = '$_GET[id]'
        ");
        if ($edit) {
            echo "<script>
            alert('Edit data sukses!');
            document.location='index.php';
            </script>";
        } else {
            echo "<script>
            alert('Edit data gagal!');
            document.location='index.php';
            </script>";
        }
    } else {

        $gambar = upload();
        if (!$gambar) {
            header('location: index.php');
            return false;
        }
        $simpan = mysqli_query($koneksi, "INSERT INTO tmhs (nim, nama, alamat, prodi, gambar)
        VALUES('$_POST[tnim]','$_POST[tnama]','$_POST[talamat]','$_POST[tprodi]', '$gambar')");
        if ($simpan) {
            echo "<script>
            alert('Simpan data sukses');
            document.location='index.php';
            </script>";
        } else {
            echo "<script>
            alert('Simpan data gagal');
            document.location='index.php';
            </script>";
        }
    }
}

if (isset($_GET['hal'])) {
    if ($_GET['hal'] == "edit") {
        $tampil = mysqli_query($koneksi, "SELECT * FROM tmhs WHERE id_mhs = '$_GET[id]'");
        $data = mysqli_fetch_array($tampil);
        if ($data) {
            $vnim = $data['nim'];
            $vnama = $data['nama'];
            $valamat = $data['alamat'];
            $vprodi = $data['prodi'];
        }
    } else if ($_GET['hal'] == "hapus") {
        $hapus = mysqli_query($koneksi, "DELETE FROM tmhs WHERE id_mhs='$_GET[id]'");
    }
}

    function upload(){
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        if($error === 4){
            echo "<script>
                            alert('Pilih gambar terlebih dahulu');
                  </script>";
            return false;
        }

        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

            if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
                echo "<script>
                            alert('Yang Anda upload bukan gambar');
                      </script>";

                return false;
            }
            

            move_uploaded_file($tmpName, 'img/'. $namaFile);

            return $namaFile;

    }

?>

<!DOCTYPE html>
<html>

<head>
    <title>PERTEMUAN 12</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style type="text/css">
    .ForMargin div, .ForMargin button{
        margin : 10px 5px 10px 10px;
     }
     .ForMargin button.breset{
        margin-left : 5px;
     }
     .ForMargin div label{
        margin-bottom: 10px;
     }

    </style>
    <script defer type="text/javascript" src="js/myJS.js"></script>
    
</head>

<body>
       
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
      <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
    </svg></a>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kemahasiswaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sarana & Prasarana</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link ">Buku Tamu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ">Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#menu">Pendaftaran Siswa Baru</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
        <section  style="background-color: #666;">
            <?php if(isset($_GET['status'])): ?>
                <p style="color: white; font-size: 40px;" class="text-center" >
                    <?php
                        if($_GET['status'] == 'sukses'){
                            echo "Pendaftaran siswa baru berhasil!";
                        } else {
                            echo "Pendaftaran gagal!";
                        }
                    ?>
                </p>
            <?php endif; ?>
            <img src="img/unhas.jpeg" width="100%">
        </section>

    
    <section id="menu" style="background-color: #666;">
        <br><br>
        <h1 class="text-center">Menu</h1>
        <br><br>
        <nav>
            <ul type="none">
                <div class="row">
                    <div class="col-sm-4 offset-sm-2 text-center " >
                        <li><a href="#mendaftar"><img height="200px" src="img/registered.png" class="rounded mx-auto d-block"></a></li>
                        <br>
                        <li><a href="#mendaftar" class="link-warning text-decoration-none" > Daftar Baru</a></li>
                
                        
                    </div>
                    <div class="col-sm-4 text-center ">
                        <li><a href="#listMHS"><img height="200px" src="img/people.png" class="rounded mx-auto d-block"></a></li>
                        <br>
                        <li><a href="#listMHS"  class="link-warning text-decoration-none">Pendaftar</a></li>
                    </div>
                </div> <br><br>
            
                
            </ul>
        </nav>
        
    </section>
    <section id="mendaftar">
    <div class="container">
        <br>
        <h2 class="text-center">PENDAFTARAN SISWA BARU</h2>
       

        <!--Awal card Form-->
        <div class="card border-info mt-3">
            <div class="card-header">Form Input Siswa</div>
            <div class="card-body ForMargin">
                <form method="POST" action="" enctype="multipart/form-data">
                    <div id="input-item">
                        <label>NIM</label>
                        <input type="text" name="tnim" value="<?= @$vnim ?>" class="form-control" placeholder="Input NIM Anda" required>
                    </div>

                    <div>
                        <label>Nama</label>
                        <input type="text" name="tnama" value="<?= @$vnama ?>" class="form-control" placeholder="Input Nama Anda" required>
                    </div>

                    <div>
                        <label>Alamat</label>
                        <textarea name="talamat" class="form-control" placeholder="Input Alamat Anda" required><?= @$valamat ?></textarea>
                    </div>

                    <div class="form-group">
                        <label>Program Studi</label>
                        <select class="form-control" name="tprodi">
                            <option value=""><?= @$vprodi ?></option>
                            <option value="S1-MT">S1-MT</option>
                            <option value="S1-SI">S1-SI</option>
                            <option value="S1-AK">S1-AK</option>
                        </select>

                    </div>
                    <div>
                        <label>Foto</label>
                        <input type="file" name="gambar" value="<?= @$vfoto ?>" class="form-control" >
                    </div>
                    <button type="submit" class="btn btn-success bsimpan" name="bsimpan">Simpan</button>
                    <button type="reset" class="btn btn-danger breset" name="breset">Reset</button>
                </form>
            </div>
        </div>
        <!--Akhir Card Form-->
    </div>
    </section >
    <br><br>
    <section  id="listMHS" >
        <div class="container">

        <!--Awal card Form-->
        <div class="card border-info mt-3">
            <div class="card-header text-center"><h2>Daftar Mahasiswa Baru</h2></div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr class="text-center">
                        <th>No.</th>
                        <th>Foto</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Program Studi</th>
                        <th>Aksi</th>
                    </tr>

                    <?php
                    $no = 1;
                    $tampil = mysqli_query($koneksi, "SELECT * from tmhs order by id_mhs desc");
                    while ($data = mysqli_fetch_array($tampil)) :
                    ?>
                        <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td width="100px"><img width="100px" src="dbimg/<?= $data['gambar']; ?>" ></td>
                            <td class="text-center"><?= $data['nim']; ?></td>
                            <td><?= $data['nama']; ?></td>
                            <td><?= $data['alamat']; ?></td>
                            <td class="text-center"><?= $data['prodi']; ?></td>
                            <td class="text-center">
                                <a href="index.php?hal=edit&id=<?= $data['id_mhs'] ?>" class="btn btn-warning" id="edit-button">Edit</a>
                                <a href="index.php?hal=hapus&id=<?= $data['id_mhs'] ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
        <!--Akhir Card Form-->
        </div>
    </section>


    </div>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>