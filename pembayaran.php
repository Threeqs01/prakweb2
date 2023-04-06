<?php
$models = new Pelanggan();
$data_pelanggan = $models->tampilPelanggan();
?>
<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nokuitansi</th>
                            <th>Tanggal</th>
                            <th>Jumlah</th>
                            <th>Ke</th>
                            <th>Pesanan ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_pelanggan as $row){
                        ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row ['nokuitansi']?></td>
                            <td><?= $row ['tanggal']?></td>
                            <td><?= $row ['jumlah']?></td>
                            <td><?= $row ['ke']?></td>
                            <td><?= $row ['pesanan_id']?></td>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>