<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mb-5">
    <h1 class="text-center mt-3">PEMBAYARAN PAJAK KENDARAAN</h1>
    <div class="row">
        <div class="col mt-3">
            <form method="POST" action="pages/save">
                <div class="row">
                    <div class="col-4">
                        <label for="exampleFormControlSelect1">Merek</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="merek">
                            <option value="">Choose...</option>
                            <option value="honda">Honda</option>
                            <option value="yamaha">Yamaha</option>
                            <option value="honda">Suzuki</option>
                            <option value="kawasaki">Kawasaki</option>
                            <option value="bmw">BMW</option>
                            <option value="ducati">Ducati</option>
                        </select>
                    </div>

                    <div class="col-4">
                        <label for="no_reg">Plat Nomor</label>
                        <input type="text" class="form-control" id="no_reg" name="no_reg">
                    </div>
                    <div class="col-4">
                        <label for="type">type</label>
                        <input type="text" class="form-control" id="type" name="type">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="exampleFormControlSelect2">Jenis</label>
                        <select class="form-control" id="exampleFormControlSelect2" name="jenis">
                            <option value="">Choose...</option>
                            <option value="sepeda motor">Sepeda Motor</option>
                            <option value="mobil">Mobil</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="exampleFormControlSelect3">Warna</label>
                        <select class="form-control" id="exampleFormControlSelect3" name="warna">
                            <option value="">Choose...</option>
                            <option value="hitam">Hitam</option>
                            <option value="merah">Merah</option>
                            <option value="putih">Putih</option>
                            <option value="silver">Silver</option>
                            <option value="kuning">Kuning</option>
                            <option value="biru">Biru</option>
                            <option value="hijau">Hijau</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="exampleFormControlSelect4">Bahan Bakar</label>
                        <select class="form-control" id="exampleFormControlSelect4" name="bahan_bakar">
                            <option value="">Choose...</option>
                            <option value="bensin">Bensin</option>
                            <option value="batry">Batry</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="exampleFormControlSelect5">Warna TNKB</label>
                        <select class="form-control" id="exampleFormControlSelect5" name="warna_tnkb">
                            <option value="">Choose...</option>
                            <option value="hitam">Hitam</option>
                            <option value="putih">Putih</option>
                            <option value="merah">Merah</option>
                            <option value="kuning">Kuning</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="exampleFormControlSelect6">Tahun Pembuatan</label>
                        <select class="form-control" id="exampleFormControlSelect6" name="th_pembuatan">
                            <option value="">Choose...</option>
                            <?php for ($i = 2010; $i <= 2022; $i++) { ?>
                                <option value="<?= $i; ?>"><?= $i; ?></option>
                            <?php }; ?>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="exampleFormControlSelect7">Isi Silinder</label>
                        <select class="form-control" id="exampleFormControlSelect7" name="isi_silinder">
                            <option value="">Choose...</option>
                            <option value="110">110 cc</option>
                            <option value="125">125 cc</option>
                            <option value="150">150 cc</option>
                            <option value="250">250 cc</option>
                            <option value="500">500 cc</option>
                            <option value="1000">1000 cc</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="no_rangka">No Rangka</label>
                    <input type="text" class="form-control" id="no_rangka" name="no_rangka">
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="no_mesin">NO Mesin</label>
                        <input type="text" class="form-control" id="no_mesin" name="no_mesin">
                    </div>
                    <div class="col-6">
                        <label for="exampleFormControlSelect9">Tahun Perakitan</label>
                        <select class="form-control" id="exampleFormControlSelect9" name="th_perakitan">
                            <option value="">Choose...</option>
                            <?php for ($i = 2010; $i <= 2022; $i++) { ?>
                                <option value="<?= $i; ?>"><?= $i; ?></option>
                            <?php }; ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="pemilik">Nama Pemilik</label>
                        <input type="text" class="form-control" id="pemilik" name="pemilik">
                    </div>
                    <div class="col-6">
                        <label for="alamat_pemilik">Alamat Pemilik</label>
                        <input type="text" class="form-control" id="alamat_pemilik" name="alamat_pemilik">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Check</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>