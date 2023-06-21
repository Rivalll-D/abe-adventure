<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Kamera</h1>
        </div>
    </section>

    <?php foreach ($detail as $dt) : ?>
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-5">
                        <img src="<?php echo base_url() . 'assets/upload/' . $dt->gambar ?>">
                    </div>
                    <div class="col-md-7">
                        <table class="table">
                            <tr>
                                <td>Type Kamera</td>
                                <td>
                                    <?php
                                    if ($dt->kode_type == "CNN") {
                                        echo "Sony";
                                    } elseif ($dt->kode_type == "CAN") {
                                        echo "Canon";
                                    } elseif ($dt->kode_type == "FJF") {
                                        echo "Fuji Film";
                                    } else {
                                        echo "<span class='text-danger'>Type Kamera Tidak Terdaftar</span>";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Merk</td>
                                <td><?php echo $dt->merk ?></td>
                            </tr>
                            <tr>
                                <td>Warna</td>
                                <td><?php echo $dt->warna ?></td>
                            </tr>
                            <tr>
                                <td>Input</td>
                                <td><?php echo $dt->input ?></td>
                            </tr>
                            <tr>
                                <td>Output</td>
                                <td><?php echo $dt->output ?></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>Rp. <?php echo number_format($dt->harga, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <td>Denda</td>
                                <td>Rp. <?php echo number_format($dt->denda, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    <?php
                                    if ($dt->status == "0") {
                                        echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                    } else {
                                        echo "<span class='badge badge-primary'>Tersedia</span>";
                                    }
                                    ?>
                                </td>
                            </tr>
                        </table>
                        <a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('admin/data_kamera') ?>">Kembali</a>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_kamera/update_kamera/' . $dt->id_kamera) ?>">Update</a>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>