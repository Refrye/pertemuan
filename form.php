<div class="row mt-5">
    <div class="col-md-6 ml-auto mr-auto">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <p>pertemuan 3</p>
                    Form hari kelahiran & pasaran
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Isi tanggal lahir</label>
                            <input type="date" class="form-control" id="txtgllhr" style="font-size: 20px;">
                            <small class="form-text text-muted">isi sesuai format yang muncul</small>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary" onclick="tampil()">tampil</button>
                            <button type="button" class="btn btn-danger" onclick="kosong()">reset</button>
                        </div>
                        <div class="form-group">
                            <p id="hasil" style="font-size: 20px">hari kelahiran: ??</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#mnform").addClass("active");

    function HitungHari() {
        let terjemahHari = ['minggu','senin','selasa','rabu','kamis','jumat','sabtu'];
        let x = $("#txtgllhr").val();
        let tgllahir = new Date(x);
        return terjemahHari[tgllahir.getDay()];
    }

    function HitungPasaran() {
        let terjemahPasar = ['kliwon', 'legi', 'pahing', 'pon', 'wage'];
        let x = $("#txtgllhr").val();
        let tgllahir = new Date(x);
        let y = "1999-01-01";
        let tglawal = new Date(y);
        let selisih = (Date.parse(tgllahir.toGMTString())-Date.parse(tglawal.toGMTString())) / (1000 * 60 * 60 * 24);
        let hasil = Math.floor(selisih + 2) % 5;
        return terjemahPasar[hasil];
    }

    function tampil() {
        let hari = HitungHari();
        let pasaran = HitungPasaran();
        let hasil = "Hari Kelahiran: " + hari + " " + pasaran;
        $('#hasil').html(hasil);
    }

    function kosong() {
        $("#txtgllhr").val("");
        $("#hasil").html("Hari kelahiran: ??");
    }
</script>