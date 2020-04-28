<?php

session_start();
include('partials/head.php');


if (isset($_POST['simpan'])){
$con = mysqli_connect("localhost","root","","ppdb");

		$name = $_FILES['foto']['name'];
        $file = $_FILES['foto']['tmp_name'];
        $daftar = $_POST['no_daftar'];
        $tes = $_POST['no_tes'];
        move_uploaded_file($file,'img/'.$name);

            $sql = mysqli_query($con,"INSERT INTO tb_daftar (no_daftar,no_tes,nama_lengkap,nama_panggilan,jk,ttl,agama,cita_cita,hoby,anak,kandung,tiri,angkat,bb,tb,gd,alamat,kelurahan,kecamatan,kota,prov,telp,email,tinggal_dengan,penyakit,foto,nama_ayah,ttl_ayah,pekerjaan_ayah,pendidikan_ayah,kewarganegaraan_ayah,agama_ayah,hp_ayah,nama_ibu,ttl_ibu,pekerjaan_ibu,pendidikan_ibu,kewarganegaraan_ibu,agama_ibu,hp_ibu,nama_wali,ttl_wali,pekerjaan_wali,pendidikan_wali,hubungan,kewarganegaraan_wali,agama_wali,hp_wali,email_wali,pai_a,pai_b,pai_c,pai_d,pai_e,indo_a,indo_b,indo_c,indo_d,indo_e,ing_a,ing_b,ing_c,ing_d,ing_e,mtk_a,mtk_b,mtk_c,mtk_d,mtk_e,ipa_a,ipa_b,ipa_c,ipa_d,ipa_e,ips_a,ips_b,ips_c,ips_d,ips_e,prestasi) values ('$_POST[no_daftar]','$_POST[no_tes]','$_POST[nama]','$_POST[nama_panggilan]','$_POST[kelamin]','$_POST[ttl]','$_POST[agama]','$_POST[cita]','$_POST[hobi]','$_POST[anak]','$_POST[kandung]','$_POST[tiri]','$_POST[angkat]','$_POST[beratb]','$_POST[tinggib]','$_POST[goldar]','$_POST[alamat]','$_POST[kel]','$_POST[kec]','$_POST[kab]','$_POST[prop]','$_POST[telponr]','$_POST[email]','$_POST[tinggal]','$_POST[penyakit]','$name','$_POST[namaAyah]','$_POST[ttlAyah]','$_POST[pekerjaanAyah]','$_POST[sekolahAyah]','$_POST[kewarAyah]','$_POST[agamaAyah]','$_POST[hpAyah]','$_POST[namaIbu]','$_POST[ttlIbu]','$_POST[pekerjaanIbu]','$_POST[sekolahIbu]','$_POST[kewarIbu]','$_POST[agamaIbu]','$_POST[hpIbu]','$_POST[namaWali]','$_POST[ttlWali]','$_POST[pekerjaanWali]','$_POST[sekolahWali]','$_POST[hubungan]','$_POST[kewarWali]','$_POST[agamaWali]','$_POST[hpWali]','$_POST[emailWali]','$_POST[paia]','$_POST[paib]','$_POST[paic]','$_POST[paid]','$_POST[paie]','$_POST[indoa]','$_POST[indob]','$_POST[indoc]','$_POST[indod]','$_POST[indoe]','$_POST[ingga]','$_POST[inggb]','$_POST[inggc]','$_POST[inggd]','$_POST[ingge]','$_POST[mtka]','$_POST[mtkb]','$_POST[mtkc]','$_POST[mtkd]','$_POST[mtke]','$_POST[ipaa]','$_POST[ipab]','$_POST[ipac]','$_POST[ipad]','$_POST[ipae]','$_POST[ipsa]','$_POST[ipsb]','$_POST[ipsc]','$_POST[ipsd]','$_POST[ipse]','$_POST[pres]')");
            if($sql){
                echo "<script>alert('Anda Berhasil Daftar')</script>";
            }
            else{
                echo "<script>alert('Anda Gagal Daftar');</script>;";
            }
}
?>

<div class="container-fluid" id="box" style="padding: 6%;">
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 sub">Formulir Penerimaan Peserta Didik Baru Tahun 2020 <br></h1>
      </div>
      <div class="row">
      	<span class="border" style="width: 90%;margin-left: 5%;padding: 1%;">
      	<form method="post" action="" enctype="multipart/form-data">
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
      				<strong>no pendaftaran</strong>
			      	<input type="text" class="form-control" name="no_daftar" style="background: white;" required="" value="<?php echo($urut); ?>" readonly>
      			</div>
      			<div class="form-group" style="padding: 1%;width: 45%">
      				<strong>no test</strong>
					<input type="text" class="form-control" style="background: white;" name="no_tes" required="" value="<?php echo($urut); ?>" readonly>
      			</div>
      		</div>
      		<h1 class="h3 mb-0 text-gray-800 sub">Data Calon Murid</h1> <br>
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" class="form-control" required placeholder="Nama">
                </div>
                <div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Nama Panggilan:</strong>
                    <input type="text" name="nama_panggilan" class="form-control" required placeholder="Nama Panggilan">
                </div>
      		</div>
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong >Jenis Kelamin:</strong>
                    <select required name="kelamin" class="form-control">
                    	<option value="" disabled="disabled" selected="selected">pilih...</option>
                    	<option value="Laki-laki" required>Laki-laki</option>
                    	<option value="Perempuan" required>Perempuan</option>
                    </select>
                </div>
                <div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Agama:</strong>
                    <input type="text" name="agama" class="form-control" required placeholder="Agama">
                </div>
      		</div>
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Tempat, Tanggal Lahir:</strong>
                    <input type="text" name="ttl" class="form-control" required placeholder="Tempat, Tanggal Lahir">
                </div>
                <div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Cita-cita:</strong>
                    <input type="text" name="cita" class="form-control" required placeholder="Cita-cita">
                </div>
      		</div>
      		<div class="row" style="margin-left: 2%">
                <div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Anaka Ke:</strong>
                    <input type="text" name="anak" class="form-control" required placeholder="Anaka Ke">
                </div>
      			<div class="form-group" style="padding: 1%;">
                    <strong>Jumlah Saudara:</strong>
                    <div class="row">
                    <input type="text" name="kandung" class="form-control" required placeholder="Kandung" style="width: 25%;margin-left: 2%;">
                    <input type="text" name="tiri" class="form-control" required placeholder="Tiri" style="width: 25%;margin-left: 1%;">
                    <input type="text" name="angkat" class="form-control" required placeholder="Angkat" style="width: 25%;margin-left: 1%;">
                    </div>
                </div>
      		</div>
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Hobi:</strong>
                    <input type="text" name="hobi" class="form-control" required placeholder="Hobi">
                </div>
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Berat Badan:</strong>
                    <input type="text" name="beratb" class="form-control" required placeholder="Berat Badan">
                </div>
      		</div>
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Tinggi Badan:</strong>
                    <input type="text" name="tinggib" class="form-control" required placeholder="Tinggi Badan">
                </div>
                <div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Golongan Darah:</strong>
                    <input type="text" name="goldar" class="form-control" required placeholder="Golongan Darah">
                </div>
      		</div>
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Penyakit Yang Pernah Diderita:</strong>
                    <textarea name="penyakit" class="form-control" cols="50%" rows="10" maxlength="5%" required></textarea>
                </div>
                <div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Foto (3 x 4):</strong>
                    <img id="imagePreview2" src="#" class="rounded"style="display: none; object-fit: cover;width: 100%; max-height: 190px">
                    <input type="file" name="foto" id="foto" class="form-control" style="border: none;" required>
                </div>
      		</div>
      		<h1 class="h3 mb-0 text-gray-800 sub">Keterangan Tempat Tinggal</h1> <br>
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Alamat Rumah:</strong>
                    <input type="text" name="alamat" class="form-control" required placeholder="jl.contoh rt1 rw1">
                </div>
                <div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Kelurahan:</strong>
                    <input type="text" name="kel" class="form-control" required placeholder="Kelurahan">
                </div>
      		</div>
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Kecamatan:</strong>
                    <input type="text" name="kec" class="form-control" required placeholder="Kecamatan">
                </div>
                <div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Kota/Kabupaten:</strong>
                    <input type="text" name="kab" class="form-control" required placeholder="Kota/Kabupaten">
                </div>
      		</div>
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Propinsi:</strong>
                    <input type="text" name="prop" class="form-control" required placeholder="Propinsi">
                </div>
                <div class="form-group" style="padding: 1%;width: 45%">
                    <strong>No. Telpon Rumah:</strong>
                    <input type="text" name="telponr" class="form-control" required placeholder="No. Telpon Rumah">
                </div>
      		</div>
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Email:</strong>
                    <input type="email" name="email" class="form-control" required placeholder="Email">
                </div>
                <div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Tinggal Dengan:</strong>
                    <select name="tinggal" class="form-control" required>
                    	<option value="" disabled="disabled" selected="selected">pilih...</option>
                    	<option value="Orang Tua" required>Orang Tua</option>
                    	<option value="Asrama" required>Asrama</option>
                    	<option value="Saudara" required>Saudara</option>
                    </select>
                </div>
      		</div>
      		<h1 class="h3 mb-0 text-gray-800 sub">Data Orang Tua/Wali</h1> <br>
      		<h4>AYAH</h4>
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Nama Ayah:</strong>
                    <input type="text" name="namaAyah" class="form-control" required placeholder="Nama Ayah">
                </div>
                <div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Tempat,Tanggal Lahir:</strong>
                    <input type="text" name="ttlAyah" class="form-control" required placeholder="Tempat,Tanggal Lahir">
                </div>
      		</div>
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Pekerjaan:</strong>
                    <input type="text" name="pekerjaanAyah" class="form-control" required placeholder="Pekerjaan">
                </div>
                <div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Pendidikan Terakhir:</strong>
                    <input type="text" name="sekolahAyah" class="form-control" required placeholder="Pendidikan Terakhir">
                </div>
      		</div>
      		<div class="row" style="margin-left: 2%">
                <div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Kewarga Negaraan:</strong>
                    <input type="text" name="kewarAyah" class="form-control" required placeholder="Kewarga Negaraan">
                </div>
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Agama:</strong>
                    <input type="text" name="agamaAyah" class="form-control" required placeholder="Agama">
                </div>
      		</div>
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>No. Hp:</strong>
                    <input type="text" name="hpAyah" class="form-control" required placeholder="No. Hp">
                </div>
      		</div>
      		<h4>IBU</h4>
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Nama Ibu:</strong>
                    <input type="text" name="namaIbu" class="form-control" required placeholder="Nama Ibu">
                </div>
                <div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Tempat,Tanggal Lahir:</strong>
                    <input type="text" name="ttlIbu" class="form-control" required placeholder="Tempat,Tanggal Lahir">
                </div>
      		</div>
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Pekerjaan:</strong>
                    <input type="text" name="pekerjaanIbu" class="form-control" required placeholder="Pekerjaan">
                </div>
                <div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Pendidikan Terakhir:</strong>
                    <input type="text" name="sekolahIbu" class="form-control" required placeholder="Pendidikan Terakhir">
                </div>
      		</div>
      		<div class="row" style="margin-left: 2%">
                <div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Kewarga Negaraan:</strong>
                    <input type="text" name="kewarIbu" class="form-control" required placeholder="Kewarga Negaraan">
                </div>
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Agama:</strong>
                    <input type="text" name="agamaIbu" class="form-control" required placeholder="Agama">
                </div>
      		</div>
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>No. Hp:</strong>
                    <input type="text" name="hpIbu" class="form-control" required placeholder="No. Hp">
                </div>
      		</div>
      		<h4>WALI</h4>
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Nama Wali:</strong>
                    <input type="text" name="namaWali" class="form-control" required placeholder="Nama Wali">
                </div>
                <div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Tempat,Tanggal Lahir:</strong>
                    <input type="text" name="ttlWali" class="form-control" required placeholder="Tempat,Tanggal Lahir">
                </div>
      		</div>
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Pekerjaan:</strong>
                    <input type="text" name="pekerjaanWali" class="form-control" required placeholder="Pekerjaan">
                </div>
                <div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Pendidikan Terakhir:</strong>
                    <input type="text" name="sekolahWali" class="form-control" required placeholder="Pendidikan Terakhir">
                </div>
      		</div>
      		<div class="row" style="margin-left: 2%">
                <div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Kewarga Negaraan:</strong>
                    <input type="text" name="kewarWali" class="form-control" required placeholder="Kewarga Negaraan">
                </div>
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Agama:</strong>
                    <input type="text" name="agamaWali" class="form-control" required placeholder="Agama">
                </div>
      		</div>
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>No. Hp:</strong>
                    <input type="text" name="hpWali" class="form-control" required placeholder="No. Hp">
                </div>
                <div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Email:</strong>
                    <input type="email" name="emailWali" class="form-control" required placeholder="email">
                </div>
      		</div>
      		<div class="row" style="margin-left: 2%">
      			<div class="form-group" style="padding: 1%;width: 45%">
                    <strong>Hubungan:</strong>
                    <input type="text" name="hubungan" class="form-control" required placeholder="Hubungan">
                </div>
      		</div>
      		<h1 class="h3 mb-0 text-gray-800 sub">Nilai Rapor</h1> <br>
      		<div class="row">
      		<div class="form-group" style="padding: 1%;width: 100%">
                <table border="1px" width="90%;" style="margin-left: 5%; font-size: 20px;">
                	<thead>
                		<tr align="center">
                			<th rowspan ="2">Mata Pelajaran</th>
                			<th colspan ="2">Kelas7</th>
                			<th colspan ="2">Kelas8</th>
                			<th>Kelas9</th>
                		</tr>
                		<tr align="center">
                			<th style="width: 15%;">smt-1</th>
                			<th style="width: 15%;">smt-2</th>
                			<th style="width: 15%;">smt-1</th>
                			<th style="width: 15%;">smt-2</th>
                			<th style="width: 15%;">smt-1</th>
                		</tr>
                	</thead>
                	<tbody>
                		<tr>
                			<td>PAI</td>
                			<td><input type="text" name="paia" class="form-control"></td>
                			<td><input type="text" name="paib" class="form-control"></td>
                			<td><input type="text" name="paic" class="form-control"></td>
                			<td><input type="text" name="paid" class="form-control"></td>
                			<td><input type="text" name="paie" class="form-control"></td>
                		</tr>
                		<tr>
                			<td>BAHASA INDONESIA</td>
                			<td><input type="text" name="indoa" class="form-control"></td>
                			<td><input type="text" name="indob" class="form-control"></td>
                			<td><input type="text" name="indoc" class="form-control"></td>
                			<td><input type="text" name="indod" class="form-control"></td>
                			<td><input type="text" name="indoe" class="form-control"></td>
                		</tr>
                		<tr>
                			<td>BAHASA INGGRIS</td>
                			<td><input type="text" name="ingga" class="form-control"></td>
                			<td><input type="text" name="inggb" class="form-control"></td>
                			<td><input type="text" name="inggc" class="form-control"></td>
                			<td><input type="text" name="inggd" class="form-control"></td>
                			<td><input type="text" name="ingge" class="form-control"></td>
                		</tr>
                		<tr>
                			<td>MATEMATIKA</td>
                			<td><input type="text" name="mtka" class="form-control"></td>
                			<td><input type="text" name="mtkb" class="form-control"></td>
                			<td><input type="text" name="mtkc" class="form-control"></td>
                			<td><input type="text" name="mtkd" class="form-control"></td>
                			<td><input type="text" name="mtke" class="form-control"></td>
                		</tr>
                		<tr>
                			<td>IPA</td>
                			<td><input type="text" name="ipaa" class="form-control"></td>
                			<td><input type="text" name="ipab" class="form-control"></td>
                			<td><input type="text" name="ipac" class="form-control"></td>
                			<td><input type="text" name="ipad" class="form-control"></td>
                			<td><input type="text" name="ipae" class="form-control"></td>
                		</tr>
                		<tr>
                			<td>IPS</td>
                			<td><input type="text" name="ipsa" class="form-control"></td>
                			<td><input type="text" name="ipsb" class="form-control"></td>
                			<td><input type="text" name="ipsc" class="form-control"></td>
                			<td><input type="text" name="ipsd" class="form-control"></td>
                			<td><input type="text" name="ipse" class="form-control"></td>
                		</tr>
                		<tr>
                			<td>PRESTASI YANG PERNAH DIRAIH</td>
                			<td colspan="5">
                				<textarea name="pres" class="form-control" cols="50%" rows="10" maxlength="5%"></textarea>
                			</td>
                		</tr>
                		
                	</tbody>
                </table>
            </div>
        	</div>
            <div class="card-footer"><button type="submit" name="simpan" value="simpan" class="btn btn-secondary" style="margin-left: 50%;">SELESAI</button></div>

         </form>
      	</span>
      </div>
    </div>
  </div>
</div>

<?php
include('partials/foot.php'); 
?>

