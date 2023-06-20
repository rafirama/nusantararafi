<?php
include 'oop.php';
$jumlah = new jumlah();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"/>
<title>Portofolio Web | Rafi</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<!-- CSS -->
<link rel="stylesheet" href="style.css">
<body>
<!-- Navbar -->
<div class="p-0 m-0 border-0 bd-example m-0 border-0">
	<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #1F3629;">
	<div class="container">
		<h2>NUSANTARA COFFE</h2>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#profile">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="https://rafinusantara.000webhostapp.com/login.php">login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#menu">Menu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#harga">Harga</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#beli">Beli</a>
				</li>
			</ul>
		</div>
		</nav>
		<!-- Akhir Navbar -->
		<!-- Story -->
		<section class="profile" id="profile">
		<img src="img/ppfix.png">
		<div>
			<br>
			<h2>NUSANTARA COFFE</h2>
		</div>
		<br>
		<p style="font-family: Georgia, serif;" class="fs-6">
			 NUSANTARA COFFE adalah usaha rumah tangga (home-industry) yang menjual kopi biji dan bubuk dalam jumlah terbatas. NUSANTARA COFFE didirikan oleh FULAN pada tahun 1930. Fulan merintis NUSANTARA COFFE dimulai dengan melayani kebutuhan kopi pelanggan di Kota Bogor termasuk orang Belanda dan Jepang yang waktu itu tinggal di Bandung.
		</p>
		<p style="font-family: Georgia, serif;" class="fs-6">
			 Kopi mentah dipilih langsung dari kebun kopi Indonesia mulai dari Sumatera, Jawa, Sulawesi dan Nusa Tenggara. Kopi mentah terlebih dahulu dijemur di bawah sinar matahari. Selanjutnya, kopi mentah Arabika mengalami proses penuaan selama 8 tahun sehingga rasa asamnya berkurang (tidak lagi kecut), kafeinnya berkurang serta kopi menjadi lebih harum. Sementara kopi mentah Robusta dituakan selama 5 tahun sehingga kafeinnya berkurang dan kopi juga menjadi lebih harum. Setelah proses penuaan di gudang, kopi disangrai (roasting) menggunakan mesin roasting berbahan bakar kayu karet. Mesin yang digunakan masih mesin buatan Jerman yang sama sejak tahun 1930. Kopi matang segera dijual di Toko Kopi Aroma agar pelanggan dapat menikmati kopi terbaru dari sangraian.
		</p>
	</p>
	</section>
	<!-- Akhir Story -->
	<!-- Project -->
	<section class="menu" id="menu">
	<div class="menu">
		<div class="row text-center">
			<div class="col">
				<br>
				<br>
				<h2>MENU</h2>
				<br></div>
			<div class="row">
				<div class="col-md-4 mb-3">
					<div class="card">
						<img src="img/menu/kopi.aceh.png" class="card-img-top">
						<div class="card-body">
							<h3 class="card-text">Arabica Aceh</h3>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<div class="card">
						<img src="img/menu/kopi.balikintamani.png" class="card-img-top" alt="">
						<div class="card-body">
							<h3 class="card-text">Arabica Bali Kintamani</h3>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<div class="card">
						<img src="img/menu/kopi.bengkulu.png" class="card-img-top" alt="">
						<div class="card-body">
							<h3 class="card-text">Arabica Bangkulu</h3>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<div class="card">
						<img src="img/menu/kopi.papuawamena.png" class="card-img-top" alt="">
						<div class="card-body">
							<h3 class="card-text">Arabica Papua Wamena</h3>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<div class="card">
						<img src="img/menu/kopi.mandheling.png" class="card-img-top" alt="">
						<div class="card-body">
							<h3 class="card-text">Arabica Mandheling</h3>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<div class="card">
						<img src="img/menu/kopi.toraja.png" class="card-img-top" alt="">
						<div class="card-body">
							<h3 class="card-text">Arabica Toraja</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
		<!-- Akhri Project -->
		<!-- Harga -->
		<section class="harga" id="harga">
		<div class="harga">
			<div class="row text-center">
				<div class="col">
					<br>
					<h2>DAFTAR HARGA</h2>
					<div>
						<div>
							<table class="table table-striped text-center">
							<thead>
							<tr>
								<th scope="col">no</th>
								<th scope="col">Kopi</th>
								<th scope="col">Netto</th>
								<th scope="col">Harga</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Arabica Aceh</td>
								<td>250 gram</td>
								<td>Rp 55.000</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Arabica Bali Kintamani</td>
								<td>250 gram</td>
								<td>Rp 55.000</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Arabica Bengkulu</td>
								<td>250 gram</td>
								<td>Rp 55.000</td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>Arabica Papua Wamena</td>
								<td>250 gram</td>
								<td>Rp 55.000</td>
							</tr>
							<tr>
								<th scope="row">5</th>
								<td>Arabica Mandheling</td>
								<td>250 gram</td>
								<td>Rp 55.000</td>
							</tr>
							<tr>
								<th scope="row">6</th>
								<td>Arabica Toraja</td>
								<td>250 gram</td>
								<td>Rp 55.000</td>
							</tr>
							</tbody>
							</table>
						</div>
						<section class="beli" id="beli">
						<div class="">
							<br>
							<br>
							<h2 style="text-align : center">SILAHKAN BELI PRODUK KAMI</h2>
							<div>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
								<i class="fa fa-shopping-cart"></i> Beli </button>
								<br>
								<br></section>
								<?php
if (isset($_POST['check'])) {
    $jmlSatu = $_POST['satu'];
    $jmlDua = $_POST['dua'];
    $jmlTiga = $_POST['tiga'];
    $jmlEmpat = $_POST['empat'];
    $jmlLima = $_POST['lima'];
    $jmlEnam = $_POST['enam'];
    $jumlah = new jumlah();
    if ($jmlSatu == null) {
        $jumlah->
								 getJumlah(0, $jmlSatu, $jmlTiga, $jmlEmpat, $jmlLima, $jmlEnam); } elseif ($jmlDua == null) { $jumlah->getJumlah($jmlSatu, 0, $jmlTiga, $jmlEmpat, $jmlLima, $jmlEnam); } elseif ($jmlTiga == null) { $jumlah->getJumlah($jmlSatu, $jmlDua, 0, $jmlEmpat, $jmlLima, $jmlEnam); } elseif ($jmlEmpat == null) { $jumlah->getJumlah($jmlSatu, $jmlDua, $jmlTiga, 0, $jmlLima, $jmlEnam); } elseif ($jmlLima == null) { $jumlah->getJumlah($jmlSatu, $jmlDua, $jmlTiga, $jmlEmpat,0, $jmlEnam); } elseif ($jmlEnam == null) { $jumlah->getJumlah($jmlSatu, $jmlDua, $jmlTiga, $jmlEmpat, $jmlLima, 0); } else { $jumlah->getJumlah($jmlSatu, $jmlDua, $jmlTiga, $jmlEmpat, $jmlLima, $jmlEnam); } $jumlah->setHarga(); $jumlah->cetakStruk(); } ?>
							</div>
						</div>
					</div>
					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div>
									<h1 class="modal-title fs-5" id="exampleModalLabel">Form Pembelian</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<form action="" method="post" id="form">
										<div class="mb-3">
											<label for="exampleInputEmail1" class="form-label">Masukkan Jumlah Arabica Aceh yang ingin Dibeli</label>
											<input type="number" class="form-control" name="satu" id="satu" value="0"></div>
										<div class="mb-3">
											<label for="exampleInputEmail1" class="form-label">Masukkan Jumlah Arabica Bali Kintamani yang ingin Dibeli</label>
											<input type="number" class="form-control" name="dua" id="dua" value="0"></div>
										<div class="mb-3">
											<label for="exampleInputEmail1" class="form-label">Masukkan Jumlah Arabica Bengkulu yang ingin Dibeli</label>
											<input type="number" class="form-control" name="tiga" id="tiga" value="0"></div>
										<div class="mb-3">
											<label for="exampleInputEmail1" class="form-label">Masukkan Jumlah Arabica Papua Wamena yang ingin Dibeli</label>
											<input type="number" class="form-control" name="empat" id="empat" value="0"></div>
										<div class="mb-3">
											<label for="exampleInputEmail1" class="form-label">Masukkan Jumlah Arabica Mandheling yang ingin Dibeli</label>
											<input type="number" class="form-control" name="lima" id="lima" value="0"></div>
										<div class="mb-3">
											<label for="exampleInputEmail1" class="form-label">Masukkan Jumlah Arabica Toraja yang ingin Dibeli</label>
											<input type="number" class="form-control" name="enam" id="enam" value="0"></div>
										<div class="modal-footer">
											<div class="">
												<button type="submit" onclick="exit()" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
												<button type="submit" class="btn btn-primary" name="check"><i class="fa fa-check"></i>
												Cek Total</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
		</script>
					</body>
					</html>
					<script type="text/javascript">
function Onlysatu() {
document.getElementById("satu").readOnly = false;
document.getElementById("dua").readOnly = true;
document.getElementById("tiga").readOnly = true;
document.getElementById("empat").readOnly = true;
document.getElementById("lima").readOnly = true;
document.getElementById("enam").readOnly = true;
document.getElementById("btnsatu").disabled = true;
document.getElementById("btndua").disabled = false;
document.getElementById("btntiga").disabled = false;
document.getElementById("btnempat").disabled = false;
document.getElementById("btnlima").disabled = false;
document.getElementById("btnemam").disabled = false;
}
function Onlydua() {
document.getElementById("satu").readOnly = true;
document.getElementById("dua").readOnly = false;
document.getElementById("tiga").readOnly = true;
document.getElementById("empat").readOnly = true;
document.getElementById("lima").readOnly = true;
document.getElementById("enam").readOnly = true;
document.getElementById("btnsatu").disabled = false;
document.getElementById("btndua").disabled = true;
document.getElementById("btntiga").disabled = false;
document.getElementById("btnempat").disabled = false;
document.getElementById("btnlima").disabled = false;
document.getElementById("btnemam").disabled = false;
}
function Onlytiga() {
document.getElementById("satu").readOnly = true;
document.getElementById("dua").readOnly = true;
document.getElementById("tiga").readOnly = false;
document.getElementById("empat").readOnly = true;
document.getElementById("lima").readOnly = true;
document.getElementById("enam").readOnly = true;
document.getElementById("btnsatu").disabled = false;
document.getElementById("btndua").disabled = false;
document.getElementById("btntiga").disabled = true;
document.getElementById("btnempat").disabled = false;
document.getElementById("btnlima").disabled = false;
document.getElementById("btnemam").disabled = false;
}
function Onlyempat() {
document.getElementById("satu").readOnly = true;
document.getElementById("dua").readOnly = true;
document.getElementById("tiga").readOnly = true;
document.getElementById("empat").readOnly = false;
document.getElementById("lima").readOnly = true;
document.getElementById("enam").readOnly = true;
document.getElementById("btnsatu").disabled = false;
document.getElementById("btndua").disabled = false;
document.getElementById("btntiga").disabled = false;
document.getElementById("btnempat").disabled = true;
document.getElementById("btnlima").disabled = false;
document.getElementById("btnemam").disabled = false;
}
function Onlylima() {
document.getElementById("satu").readOnly = true;
document.getElementById("dua").readOnly = true;
document.getElementById("tiga").readOnly = true;
document.getElementById("empat").readOnly = true;
document.getElementById("lima").readOnly = false;
document.getElementById("enam").readOnly = true;
document.getElementById("btnsatu").disabled = false;
document.getElementById("btndua").disabled = false;
document.getElementById("btntiga").disabled = false;
document.getElementById("btnempat").disabled = false;
document.getElementById("btnlima").disabled = true;
document.getElementById("btnemam").disabled = false;
}
function Onlyenam() {
document.getElementById("satu").readOnly = true;
document.getElementById("dua").readOnly = true;
document.getElementById("tiga").readOnly = true;
document.getElementById("empat").readOnly = true;
document.getElementById("lima").readOnly = true;
document.getElementById("enam").readOnly = false;
document.getElementById("btnsatu").disabled = false;
document.getElementById("btndua").disabled = false;
document.getElementById("btntiga").disabled = false;
document.getElementById("btnempat").disabled = false;
document.getElementById("btnlima").disabled = false;
document.getElementById("btnemam").disabled = true;
}
function Semua() {
document.getElementById("dua").readOnly = false;
document.getElementById("satu").readOnly = false;
document.getElementById("btnsatu").disabled = false;
document.getElementById("btndua").disabled = false;
document.getElementById("tiga").readOnly = false;
document.getElementById("empat").readOnly = false;
document.getElementById("btntiga").disabled = false;
document.getElementById("btnempat").disabled = false;
document.getElementById("btnlima").disabled = false;
document.getElementById("btnemam").disabled = false;
}
function exit() {
document.getElementById("dua").readOnly = true;
document.getElementById("satu").readOnly = true;
document.getElementById("tiga").readOnly = true;
document.getElementById("empat").readOnly = true;
document.getElementById("lima").readOnly = true;
document.getElementById("enam").readOnly = true;
}
		</script>
					</body>
					</html>