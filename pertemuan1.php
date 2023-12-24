<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 1</title>
    <link rel="icon" href="assets/img/icon.ico" type="image/x-icon" />
</head>

<script src="assets/js/plugin/webfont/webfont.min.js"></script>
<script>

    $("#pt1").addClass("active");
    WebFont.load({
        google: {"families":["Lato:300,400,700,900"]},
        custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/atlantis.min.css">

<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/js/atlantis.min.js"></script>
<script src="assets/js/setting-demo2.js"></script>
<body>
    <p style="width: 100%; text-align:center; margin-top:50px;">
        <button type="button" class="btn btn-secondary btn-lg">
            Tombol Percobaan
        </button>
    </p>

    <div class="col-md-6 ml-auto mr-auto">
        <di class="card">
            <div class="card-header">
                <h4 class="card-title">Percobaan Panel</h4>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills nav-default nav-pills-no-bd" role="tablist">
                    <li class="nav-item">
                        <a href="#tab1" data-toggle="pill" class="nav-link active" role="tab">Tomorrow War</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tab2" data-toggle="pill" class="nav-link" role="tab">Death Note</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tab3" data-toggle="pill" class="nav-link" role="tab">ai no idenshi</a>
                    </li>
                    <div class="tab-content mt-2 mb-3">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                            <p style="color: red">sekelompok penjelajah waktu yang datang dari tahun 2051 untuk menyampaikan pesan penting. Mereka berpesan bahwa 30 tahun di masa depan umat manusia kalah dalam perang global melawan spesies asing yang
                            mematikan.</p>
                        </div>
                        <div class="tab-pane fade show" id="tab2" role="tabpanel">
                            <p style="color: green">Death Note memiliki kekuatan yang mutlak, di mana siapa saja bisa mati jika namanya ditulis dalam buku ini. buku milik Shinigami (Dewa Kematian), yang memiliki kekuatan supranatural di mana buku tersebut dapat membunuh siapa saja dengan menuliskan nama korbannya.</p>
                        </div>
                        <div class="tab-pane fade show" id="tab3" role="tabpanel">
                            <p style="color: purple">seorang dokter yang menangani masalah manusia dan humanoid(robot). dalam waktu dekat populasi manusia dan humanoid akan setara hingga mencapai 10% dari populasi. secara prosedur mencadangkan ingatan secara mandiri adalah ilegal. dengan mengatur ulang sangat beresiko.</p>
                        </div>
                    </div>
                </ul>
            </div>
        </di>
    </div>
</body>


</html>