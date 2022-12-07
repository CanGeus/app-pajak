<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col mt-5">
            <form method="POST" action="/pages/save">
                <div class="row">
                    <div class="col-6">
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
                    <div class="col-6">
                        <label for="type">type</label>
                        <input type="text" class="form-control" id="type" name="type">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="exampleFormControlSelect2">Jenis</label>
                        <select class="form-control" id="exampleFormControlSelect2" name="jenis">
                            <option value="">Choose...</option>
                            <option value="sepeda_motor">Sepeda Motor</option>
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
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
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
                <div class="row mb-4">
                    <div class="col-6">
                        <label for="no_mesin">NO Mesin</label>
                        <input type="text" class="form-control" id="no_mesin" name="no_mesin">
                    </div>
                    <div class="col-6">
                        <label for="exampleFormControlSelect9">Tahun Perakitan</label>
                        <select class="form-control" id="exampleFormControlSelect9" name="th_perakitan">
                            <option value="">Choose...</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>