<?php include "header.php"; ?>
        <h2> Data Karyawan</h2>
        <hr />
            <div class="form-group">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            <a href="karyawan_add.php">Tambah Data</a>
            </div>
        <br />
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>NO Telepon</th>
                    <th>Jabatan</th>
                    <th>Status</th>
                    <th>Tools</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>18631042</td>
                    <td>Mas'Adi</td>
                    <td>Martapura</td>
                    <td>13 Juli 2019</td>
                    <td>089696558495</td>
                    <td>Ampun Perusahaan</td>
                    <td>Pemilik</td>
                    <td>
                        <a href="karyawan_edit.php" title="Edit Data" class="btn btn-primary btm-sm">
                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                        </a>
                        <a href="karyawan_hapus.php" title="Hapus Data" class="btn btn-danger btn-sm">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
<?php include "footer.php"; ?>