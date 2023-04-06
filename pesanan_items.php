<?php
$models = new Pesanan_items();
$data_pesanan_items = $models->tampilPesanan_items();
?>
<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Produk ID</th>
                            <th>Pesanan ID</th>
                            <th>QTY</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_pesanan_items as $row){
                        ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row ['produk_id']?></td>
                            <td><?= $row ['pesanan_id']?></td>
                            <td><?= $row ['qty']?></td>
                            <td><?= $row ['harga']?></td>
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