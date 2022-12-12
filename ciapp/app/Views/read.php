<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <?php foreach ($stnk as $k) : ?>
            <?php
            if ($k['jumlah'] == 0) {
                echo '  <div class="alert alert-danger alert-dismissible fade show mt-3 text-center text-uppercase col" role="alert">
                    <strong>Silahkan melakukan Pembayaran !!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            } else {
                echo '  <div class="alert alert-success alert-dismissible fade show mt-3 text-center text-uppercase col" role="alert">
                    <strong>Pembayaran Berhasil !!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            }
            ?>
            <div class="col-12 border mt-3 bg rounded">
                <div class="text-center text-uppercase font-weight-bolder mt-3">surat ketetapan kewajiban pembayaran pkb</div>
                <div class="d-flex flex-row col-6">
                    <table class="table table-sm border col-12 mt-3">
                        <tbody>
                            <tr>
                                <td class="bg-dark text-light col-4 text-temp">Nomor registrasi</td>
                                <td class=" text-uppercase"><?= $k['no_reg']; ?></td>
                            </tr>
                            <tr>
                                <td class="bg-dark text-light col-4 text-temp">nama pemilik</td>
                                <td class=" text-uppercase"><?= $k['pemilik']; ?></td>
                            </tr>
                            <tr>
                                <td class="bg-dark text-light col-4 text-temp">alamat</td>
                                <td class=" text-uppercase"><?= $k['alamat_pemilik']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-felx flex-row col-6 float-right mtop">
                    <form action="<?php echo '/pages/update/', $k['id'];
                                    ?>" method="post">
                        <table class="table table-sm border text-center col-12">
                            <thead>
                                <tr>
                                    <th scope="col" class="border text-uppercase">pokok</th>
                                    <th scope="col" class="border text-uppercase">sanksi adm</th>
                                    <th scope="col" class="border text-uppercase">jumlah</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-right border">0</td>
                                    <td class="text-right border">0</td>
                                    <td class="text-right border">0</td>
                                    <td class=" border text-left text-uppercase  font-weight-bolder">bbn-kb</td>
                                </tr>
                                <tr>
                                    <td class="text-right">
                                        <?php
                                        $varTahun = $k['th_pembuatan'];
                                        for ($i = 2010; $i <= $varTahun; $i++) {
                                            if ($varTahun == $i) {
                                                if ($k['jenis'] == 'sepeda motor') {
                                                    $pokok = 100000 + (($i - 2010) * 10000);
                                                    echo $pokok;
                                                } elseif ($k['jenis'] == 'mobil') {
                                                    $pokok = 1000000 + (($i - 2010) * 50000);
                                                    echo $pokok;
                                                }
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td class="text-right border">
                                        <?php
                                        echo $sanksipokok = 0;
                                        ?>
                                    </td>
                                    <td class="text-right border">
                                        <input class="pay" type="text" name="pokok" value="<?php echo $totalpokok = $pokok + $sanksipokok; ?>" readonly>

                                    </td>
                                    <td class=" border text-left text-uppercase  font-weight-bolder">pkb</td>
                                </tr>
                                <tr>
                                    <td class="text-right border">
                                        <?php
                                        if ($k['jenis'] == 'sepeda motor') {
                                            echo $swdkllj = 35000;
                                        } elseif ($k['jenis'] == 'mobil') {
                                            echo $swdkllj = 100000;
                                        }
                                        ?>
                                    </td>
                                    <td class="text-right border">
                                        <?php
                                        echo $sanksiswdkllj = 0;
                                        ?>
                                    </td>
                                    <td class="text-right border">
                                        <input class="pay" type="text" name="swdkllj" value="<?php echo $totalswdkllj = $swdkllj + $sanksiswdkllj; ?>">
                                    </td>
                                    <td class=" border text-left text-uppercase  font-weight-bolder">swdkllj</td>
                                </tr>
                                <tr>
                                    <td class="text-right border">0</td>
                                    <td class="text-right border">0</td>
                                    <td class="text-right border">0</td>
                                    <td class=" border text-left text-uppercase  font-weight-bolder">biaya adm.stnk</td>
                                </tr>
                                <tr>
                                    <td class="text-right border">0</td>
                                    <td class="text-right border">0</td>
                                    <td class="text-right border">0</td>
                                    <td class=" border text-left text-uppercase  font-weight-bolder">biaya adm.tnkb</td>
                                </tr>
                                <tr>
                                    <td class="text-right border">
                                        <?= $pokok + $swdkllj; ?>
                                    </td>
                                    <td class="text-right border">0</td>
                                    <td class="text-right border">
                                        <input class="pay" type="text" name="jumlah" value="<?= $totalswdkllj + $totalpokok; ?>">
                                    </td>
                                    <td class=" border text-left text-uppercase  font-weight-bolder">jumlah</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-sm border mt-3">
                            <tbody>
                                <tr>
                                    <td class="bg-dark text-light col-4 text-temp">Status Pembayaran</td>
                                    <td class=" text-uppercase">
                                        <?php
                                        if ($k['jumlah'] == 0) {
                                            echo 'belum lunas';
                                        } else {
                                            echo 'Lunas';
                                        }
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <?php
                        if ($k['jumlah'] == 0) {
                            echo '<button type="submit" class="btn btn-primary float-right">Bayar</button>';
                        }
                        ?>
                    </form>
                </div>

                <div class="d-felx flex-row col-6">
                    <table class="table-sm col-6">
                        <tbody>
                            <tr>
                                <td class="text-temp">merek</td>
                                <td>:</td>
                                <td class="text-uppercase"><?= $k['merek']; ?></td>
                            </tr>
                            <tr>
                                <td class="text-temp">type</td>
                                <td>:</td>
                                <td class="text-uppercase"><?= $k['type']; ?></td>
                            </tr>
                            <tr>
                                <td class="text-temp">jenis</td>
                                <td>:</td>
                                <td class="text-uppercase"><?= $k['jenis']; ?></td>
                            </tr>
                            <tr>
                                <td class="text-temp">model</td>
                                <td></td>
                                <td class="text-uppercase"></td>
                            </tr>
                            <tr>
                                <td class="text-temp">Th.pembuatan</td>
                                <td>:</td>
                                <td class="text-uppercase"><?= $k['th_pembuatan']; ?></td>
                            </tr>
                            <tr>
                                <td class="text-temp">isi silinder</td>
                                <td>:</td>
                                <td class="text-uppercase"><?= $k['isi_silinder']; ?> CC</td>
                            </tr>
                            <tr>
                                <td class="text-temp">no.rangka</td>
                                <td>:</td>
                                <td class="text-uppercase"><?= $k['no_rangka']; ?></td>
                            </tr>
                            <tr>
                                <td class="text-temp">no.mesin</td>
                                <td>:</td>
                                <td class="text-uppercase"><?= $k['no_mesin']; ?></td>
                            </tr>
                            <tr>
                                <td class="text-temp">th.perakitan</td>
                                <td>:</td>
                                <td class="text-uppercase"><?= $k['th_perakitan']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table-sm float-right col-6 mtop-">
                        <tbody>
                            <tr>
                                <td class="text-temp">warna</td>
                                <td>:</td>
                                <td class="text-uppercase"><?= $k['warna']; ?></td>
                            </tr>
                            <tr>
                                <td class="text-temp">bahan bakar</td>
                                <td>:</td>
                                <td class="text-uppercase"><?= $k['bahan_bakar']; ?></td>
                            </tr>
                            <tr>
                                <td class="text-temp">warna tnkb</td>
                                <td>:</td>
                                <td class="text-uppercase"><?= $k['warna_tnkb']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <table class="table table-sm border col-6 mt-3">
                    <tbody>
                        <tr>
                            <td class="bg-dark text-light col-4 text-temp">Berlaku Sampai</td>
                            <td class=" text-uppercase"><?php $berlaku = $k['berlaku_sampai'];
                                                        echo date('Y-m-d', strtotime('+1 year', strtotime($berlaku)));
                                                        ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php endforeach; ?>
    </div>
</div>




<?= $this->endSection(); ?>