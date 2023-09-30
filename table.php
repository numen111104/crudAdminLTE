<section class="content">
    <div class="container-fluid">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Data Inventori</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Barang</th>
                            <th>Kode Barang</th>
                            <th>Harga</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("koneksi.php");
                        //query untuk menampilkan data dari tabel barang
                        $query = mysqli_query($koneksi, "SELECT * FROM barang order by id desc");
                        if (mysqli_num_rows($query) == 0) {
                            echo '<tr><td colspan="5">Tidak ada data.</td></tr>';
                        } else {
                            $no = 1;
                            while ($data = mysqli_fetch_assoc($query)) {
                                echo '
                                     <tr>
                                        <td>' . $no . '</td>
                                        <td>' . $data['nama_barang'] . '</td>
                                        <td>' . $data['kode_barang'] . '</td>
                                        <td>' . $data['harga'] . '</td>
                                        <td>' . $data['stok'] . '</td>
                                        
                                    </tr>';
                                $no++;
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>