<?php include "header.php"; ?>
    <?php
    if(isset ($_POST['add'])){
        $nik            = $_POST ['nik'];
        $nama           = $_POST ['nama'];
        $tempat_lahir   = $_POST ['tempat_lahir'];
        $tanggal_lahir  = $_POST ['tanggal_lahir'];
        $alamat         = $_POST ['alamat'];
        $no_telepon     = $_POST ['no_telepon'];
        $jabatan        = $_POST ['jabatan'];
        $status         = $_POST ['status'];


            $cek = mysqli_query($koneksi, "SELECT * FROM tkaryawan
            WHERE nik='$nik'");
            if (mysqli_num_rows($cek)){
    ?>
            <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert"
            aria-hidden="true">&times;</button>NIK sudah ada..!</div>
        <?php
            } else {
            $insert = mysqli_query($koneksi, "INSERT INTO tkaryawan (nik,
            nama, tempat_lahir, tanggal_lahir, alamat, no_telepon, jabatan, status)
            VALUES ('$nik', '$nama', '$tempat_lahir', '$tanggal_lahir', '$alamat', 
            '$no_telepon','$jabatan', '$status')") or die (mysqli_error($koneksi));
                if($insert){
        ?>
            <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            DATA KARYAWAN BERHASIL DISIMPAN !</div>
        <?php
            } else {
        ?>
            <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            UPS!!! DATA KARYAWAN GAGAL DISIMPAN, SILAHKAN COBA LAGI!</div>
        <?php
            }
        }
    }
        ?>
    <h2>Data Karyawan &raquo; Tambah Data </h2>
    <hr/>
    <form class="form-horizontal" action="" method="post">
        <div class="form-group">
            <label class="col-sm-3 control-label">NIK</label>
            <div class="col-sm-2">
                <input type="text" name="nik" class="form-control"
                maxlength="10" placeholder="NIK" required>
        </div>
        </div>
        <div class="form-group">
                <label class="col-sm-3 control-label">Nama</label>
                <div class="col-sm-4">
                    <input type="text" name="nama" class="form-control"
                    placeholder="Nama" required>
                </div>
        </div>
        <div class="form-group">
                <label class="col-sm-3 control-label">Tempat Lahir</label>
                <div class="col-sm-4">
                    <input type="text" name="tempat_lahir" class="form-control"
                    placeholder="Tempat Lahir" required>
                </div>
        </div>
        <div class="form-group">
                <label class="col-sm-3 control-label">Tanggal Lahir</label>
                <div class="col-sm-4">
                    <input type="text" name="tanggal_lahir" class="input-group form-control"
                     required>
                </div>
            </div>
        <div class="form-group">
                <label class="col-sm-3 control-label">Alamt</label>
                <div class="col-sm-4">
                    <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
                </div>
        </div>
        <div class="form-group">
                <label class="col-sm-3 control-label">No Telepon</label>
                <div class="col-sm-4">
                    <input type="text" name="no_telepon" maxlength="12" 
                    class="form-control" placeholder="No Telepon" required>
        </div>
            </div>
        <div class="form-group">
                <label class="col-sm-3 control-label">Jabatan</label>
                <div class="col-sm-2">
                    <select name="jabatan" class="form-control" required>
                        <option value=""> ---- </option>
                        <option value="Operator">Operator</option>
                        <option value="Leader">Leader</option>
                        <option value="Supervisor">Supervisor</option>
                        <option value="Manager">Manager</option>
                    </select>
                </div>
        </div>
        <div class="form-group">
                <label class="col-sm-3 control-label">Status</label>
                <div class="col-sm-2">
                    <select name="status" class="form-control">
                        <option value=""> ---- </option>
                        <option value="Outsourcing">Outsourcing</option>
                        <option value="Kontrak">Kontrak</option>
                        <option value="Tetap">Tetap</option>
                    </select>
                </div>
        </div>
        <div class="form-group">
                <label class="col-sm-3 control-label">Status</label>
                <div class="col-sm-6">
                        <button type="submit" name="add" class="btn btn-sm btn-primary" 
                        value="Simpan">SImpan</button>
                        <button type="reset" class="btn btn-sm btn-warning"
                        value="Reset">Reset</button>
                        <button class="btn btn0sm btn danger" onclick="history.back()">
                        Kembali</button>
                </div>
        </div>
    </form>
<?php include "footer.php"; ?>