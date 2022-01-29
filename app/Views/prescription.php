<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>E-Prescription</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/1586700859950.jfif"/>
	
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
  <nav class="navbar navbar-expand navbar-light bg-light">
    <div class="container-fluid">
      <img src="/Logo_D'health.webp" width="100px" class="">
      <div class="collapse navbar-collapse px-2" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page">Prescription</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!-- end navbar  -->

<div class="container px-4">
	<div class="row gx-5">
	<div class="col-md-5 col-sm-12 mt-3">
		<div class="p-3 card border-left-danger bg-light">
		<form class="row g-3">
			<div class="col-md-12 mt-3">
				<label for="inputEmail4" class="form-label">Nama Racikan</label>
				<input type="text" class="form-control" id="inputEmail3">
			</div>
			<div class="col-md-12 mt-3">
				<div class="row">
				<div class="col-5">
					<label for="inputEmail4" class="form-label">Obat</label>
				</div>
				<div class="col-7 text-right">
					<a class="btn btn-success btn-obat" data-toggle="collapse" href="#tampilObat" role="button" aria-expanded="false" aria-controls="collapseExample">
						Pilih
					</a>
				</div>
				</div>
			</div>
			<div class="col-md-12 mt-3">
				<div class="table-responsive">
				<table class="table table-bordered table-strip" width="100%" cellspacing="0" id="kumpulObat">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Nama Obat</th>
							<th scope="col">Stok</th>
							<th scope="col">Qty</th>
						</tr>
					</thead>
					<tbody>								

					</tbody>
				</table>
				</div>
			</div>
			<div class="col-md-12 mt-3">
				<div class="row">
				<div class="col-5">
					<label for="inputEmail4" class="form-label">Signa</label>
				</div>
				<div class="col-7 text-right">
					<a class="btn btn-success btn-signa" data-toggle="collapse" href="#tampilSigna" role="button" aria-expanded="false" aria-controls="collapseExample">
						Pilih
					</a>
				</div>
				</div>
			</div>
			<div class="col-md-12 mt-3">
				<label for="inputEmail4" class="form-label">Qty</label>
				<input type="number" class="form-control" id="inputEmail3">
			</div>
			<div class="col-md-12 mt-3">
				<div class="row">
				<div class="col-12 text-right">
					<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
						Simpan
					</a>
				</div>
				</div>
			</div>
		</form>
		</div>
	</div>
	<div class="col-md-7 col-sm-12 mt-3">
		<!-- OBAT -->
		<div class="p-3 card border-left-primary mb-3 tpl-obat collapse" id="tampilObat">
		<div class="table-responsive">
        <table class="table table-bordered table-strip table-hover" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
				<th scope="col">No</th>
				<th scope="col" hidden>#</th>
				<th scope="col" hidden>#</th>
				<th scope="col">Nama Obat</th>
				<th scope="col">Stok</th>
				</tr>
			</thead>
			<tbody>			
				<?php $no=1; foreach ($dataObat as $row): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td hidden><?= $row->obatalkes_id; ?></td>
                        <td hidden><?= $row->obatalkes_kode; ?></td>
                        <td><?= $row->obatalkes_nama; ?></td>
                        <td><?= floor($row->stok); ?></td>
                    
                    </tr>
                <?php endforeach ?>
			</tbody>
		</table>
		</div>
		</div>
		<!-- SIGNA -->
		<div class="p-3 card border-left-success collapse tpl-signa" id="tampilSigna">
		<div class="table-responsive">
        <table class="table table-bordered table-strip table-hover	" id="dataTable2" width="100%" cellspacing="0">
			<thead>
				<tr>
				<th scope="col">No</th>
				<th scope="col">Nama Signa</th>
				</tr>
			</thead>
			<tbody>			
				<?php $no=1; foreach ($dataSigna as $row): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->signa_nama; ?></td>
                    </tr>
                <?php endforeach ?>
			</tbody>
		</table>
		</div>
		</div>
	</div>
	</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

<script>
	// hide table kanan
	$('.btn-signa').on('click', function (data) {
		$('.tpl-obat').removeClass('show');    
	});
	$('.btn-obat').on('click', function (data) {
		$('.tpl-signa').removeClass('show');    
	});

	// Get data Obat dari table 
	var table = $('#dataTable').DataTable();
 
	$('#dataTable tbody').on( 'click', 'tr', function () {
		var obat = table.row(this).data() ;
		console.log(obat[2]);
		$('#kumpulObat > tbody:last-child').append('<tr>...</tr><tr>...</tr><tr>...</tr><tr>...</tr>');
	} );

	// Get data Signa dari table 
	var table2 = $('#dataTable2').DataTable();
 
	$('#dataTable2 tbody').on( 'click', 'tr', function () {
		console.log( table2.row(this).data() );
	} );


</script>
</body>
</html>
