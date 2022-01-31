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
            <a class="nav-link" aria-current="page">Prescription</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!-- end navbar  -->
<!-- tabs  -->
<div class="container mt-3"> 
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
<li class="nav-item">
	<a class="nav-link active" id="pills-non-tab" data-toggle="pill" href="#non-racikan" role="tab">Non-Racikan</a>
</li>
<li class="nav-item">
	<a class="nav-link" id="pills-racikan-tab" data-toggle="pill" href="#racikan" role="tab" >Racikan</a>
</li>
</ul>
</div>
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade show active" id="non-racikan" role="tabpanel" aria-labelledby="pills-non-tab">
	<!-- Non Racikan  -->
	<div class="container px-4 mt-3">
	<div class="row gx-5">
	<div class="col-md-8 col-sm-12 mt-3">
		<div class="p-3 card border-left-success bg-light">
		<form class="row g-3 nonRacikan">
			<div class="col-md-12 mt-3">
				<div class="row">
				<div class="col-2">
					<label for="inputEmail4" class="form-label">Obat</label>
				</div>
				<div class="col-8" id="tempatObat">
					
				</div>
				<div class="col-2 text-right">
					<button type="button btn-success" id="btn-obatnon" class="btn btn-success" data-toggle="modal" data-target="#modalObat">
					Pilih
					</button>
				</div>
				</div>
			</div>
			<div class="col-md-12 mt-3">
			</div>
			<div class="col-md-12 mt-3">
				<div class="row">
				<div class="col-2">
					<label for="inputEmail4" class="form-label">Signa</label>
				</div>
				<div class="col-8" id="tempatSigna">
					
				</div>
				<div class="col-2 text-right">
				<button type="button btn-success" id="btn-signanon" class="btn btn-success" data-toggle="modal" data-target="#modalSigna">
				Pilih
				</button>
				</div>
				</div>
			</div>
			<div class="col-md-12 mt-3">
			<div class="row">
				<div class="col-2">
					<label for="inputEmail4" class="form-label">Qty</label>
				</div>
				<div class="col-10">
					<input type="number" id="qtyNon" class="form-control" style="width: 100px">
				</div>
				</div>
				
			</div>
			<div class="col-md-12 mt-3">
				<div class="row">
				<div class="col-12 text-right">
					<a class="btn btn-primary" id="simpanNon" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
						Simpan
					</a>
				</div>
				</div>
			</div>
		</form>
		</div>
	</div>
	<div class="col-md-4 col-sm-12 mt-3">
		<!-- KOSONG		 -->
	</div>
	</div>
</div>
<!-- Modal Obat -->
<div class="modal fade" id="modalObat" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pilih Obat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <table class="table table-bordered table-strip table-hover" id="tableObat" width="100%" cellspacing="0">
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
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<!-- end modal obat  -->

<!-- Modal Signa -->
<div class="modal fade" id="modalSigna" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pilih Signa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="table-responsive">
        <table class="table table-bordered table-strip table-hover" id="tableSigna" width="100%" cellspacing="0">
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
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<!-- end modal Signa  -->
	<!-- end non racikan  -->
</div>



<div class="tab-pane fade" id="racikan" role="tabpanel" aria-labelledby="pills-racikan-tab">
	<!-- Racikan  -->
	<div class="container px-4 mt-3">
	<div class="row gx-5">
	<div class="col-md-6 col-sm-12 mt-3">
		<div class="p-3 card border-left-danger bg-light">
		<form class="row g-3 racikan">
			<div class="col-md-12 mt-3">
				<label for="inputEmail4" class="form-label">Nama Racikan</label>
				<input type="text" class="form-control" id="inputRacik">
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
							<th scope="col">Nama Obat</th>
							<th scope="col">Stok</th>
							<th scope="col">Qty</th>
							<th scope="col" hidden>#</th>
							<th scope="col" hidden>#</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>								

					</tbody>
				</table>
				<div id="log_keyup"></div>
				</div>
			</div>
			<div class="col-md-12 mt-3">
				<div class="row" id="rowSigna">
				<div class="col-5">
					<label for="inputEmail4" class="form-label" id="label-signa">Signa</label>
				</div>
				<div class="col-7 text-right">
					<a class="btn btn-success btn-signa" data-toggle="collapse" href="#tampilSigna" role="button" aria-expanded="false" aria-controls="collapseExample">
						Pilih
					</a>
				</div>
				</div>
				<div id="kumpulSigna" class="mt-2"></div>

			</div>
			<!-- <div class="col-md-12 mt-3">
				<label for="inputEmail4" class="form-label">Qty</label>
				<input type="number" class="form-control" id="inputEmail3">
			</div> -->
			<div class="col-md-12 mt-3">
				<div class="row">
				<div class="col-12 text-right">
					<a class="btn btn-primary" id="simpan" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
						Simpan
					</a>
				</div>
				</div>
			</div>
		</form>
		</div>
	</div>
	<div class="col-md-6 col-sm-12 mt-3">
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
	<!-- end racikan  -->
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
	
	// RACIKAN hide table kanan
	$('.btn-signa').on('click', function (data) {
		$('.tpl-obat').removeClass('show');    
	});
	$('.btn-obat').on('click', function (data) {
		$('.tpl-signa').removeClass('show');    
	});


	// RACIKAN Get data Obat dari table 
	var table = $('#dataTable').DataTable();
	var no1=1;
	var no2=1;
	var no3=1;
	var no4=1;
	var zz = "#qtyObat" + no1++;

	$('#dataTable tbody').on( 'click', 'tr', function () {
		var obat = table.row(this).data() ;	
		var idMirror = "mirror" + no2++;
		var idQty = "qtyBaru" + no4++;
		var idQtyObat = "qtyObat" + no3++;
		$('#kumpulObat').append(`<tr> <td>`+obat[3]+`</td><td id="`+idQty+`">`+obat[4]+`</td><td><input type="number" style="width: 70px"  id="`+idQtyObat+`"></td><td id="`+idMirror+`" hidden><td id="`+obat[0]+`" hidden></td><td><button type="button" class="btn bg-transparent"  id="clearObat"><i class="fa fa-times"></i></button></td></tr>`);
		$('.tpl-obat').removeClass('show'); 

	// RACIKAN mirror 
	$('#kumpulObat').on('keyup', 'input', function () {
	var getQty = obat[4];
	var qtyAwal = getQty;
	var idMirrors = "#" + idMirror;
	var idQtys = "#" + idQty;
	var idQtyObats = "#" + idQtyObat;
	var coins = $(idQtyObats).val();

	$(idMirrors).text(coins);
	var qtyBaru = qtyAwal - coins;
	if (qtyBaru < 0){
		alert("Stock tidak mencukupi!")
		$(idQtyObats).val("");
		$(idQtys).text(qtyAwal);
	}else{
		$(idQtys).text(qtyBaru);
	}

	});
	} );	
	// RACIKAN Hapus Obat 
	$("#kumpulObat").on("click", "#clearObat", function() {
   		$(this).closest("tr").remove();
	});
	// RACIKAN Get data Signa dari table 
	var table2 = $('#dataTable2').DataTable();
	var no=1;
	$('#dataTable2 tbody').on( 'click', 'tr', function () {
		var signa = table2.row(this).data() ;	
		$('#kumpulSigna').append('<div id="inputSignas"><div class="input-group"><input type="text" id="valueSigna" class="form-control" value="'+signa[1]+'" disabled> <button type="button" class="btn bg-transparent" style="margin-left: -40px; z-index: 100;" id="clearSigna"><i class="fa fa-times"></i></button></div></div>');
		$('.tpl-signa').removeClass('show'); 
		// Disable pilih 
		var valsig = $('#valueSigna').val();
		if (valsig != null){
			$('.btn-signa').addClass('disabled');
		}
		$('#clearSigna').on('click', function(){
			// $('#inputSignas').empty();
			$(this).parent().remove();
			$('.btn-signa').removeClass('disabled');
		})		
	} );

	// NON-RACIKAN Get data Obat 
	var table3 = $('#tableObat').DataTable();
	$('#tableObat tbody').on( 'click', 'tr', function () {
		var obatNon = table3.row(this).data() ;	
		$('#tempatObat').append('<div id="obats"><div class="input-group"><input type="text" id="idvalObat" class="form-control" value="'+obatNon[1]+'" hidden><input type="text" id="valObat" class="form-control" value="'+obatNon[3]+'" disabled> <button type="button" class="btn bg-transparent" style="margin-left: -40px; z-index: 100;" id="hapusObat"><i class="fa fa-times"></i></button></div></div>');
		$('#modalObat').modal('hide'); 

		$('#hapusObat').on('click', function(){
			$(this).parent().remove();
			$('.btn-obatnon').removeClass('disabled');
		})		
	} );

	// NON-RACIKAN Get data signa 
	var table4 = $('#tableSigna').DataTable();
	$('#tableSigna tbody').on( 'click', 'tr', function () {
		var signaNon = table4.row(this).data() ;
		console.log(signaNon);	
		$('#tempatSigna').append('<div id=""><div class="input-group"><input type="text" id="idvalSigna" class="form-control" value="'+signaNon[0]+'" hidden><input type="text" id="valSigna" class="form-control" value="'+signaNon[1]+'" disabled> <button type="button" class="btn bg-transparent" style="margin-left: -40px; z-index: 100;" id="hapusSigna"><i class="fa fa-times"></i></button></div></div>');
		$('#modalSigna').modal('hide'); 

		$('#hapusSigna').on('click', function(){
			$(this).parent().remove();
			$('.btn-signanon').removeClass('disabled');
		})		
	} );

	// NON-RACIKAN Fungsi Simpan 
	$('#simpanNon').on('click', function(){
	if ($('#valObat').val() == null){
		$('#btn-obatnon').addClass("bg-danger");
		$('#btn-obatnon').on('click', function(){
			$('#btn-obatnon').removeClass("bg-danger");
		})
	}else if($('#valSigna').val() == null){
		$('#btn-signanon').addClass("bg-danger");
		$('#btn-signanon').on('click', function(){
			$('#btn-signanon').removeClass("bg-danger");
		})
	}else if($('#qtyNon').val() == null){
		$('#qtyNon').addClass("bg-danger");
		$('#qtyNon').on('keyup', function(){
			$('#qtyNon').removeClass("bg-danger");

		})
	}else{
		alert ("SIMPAN");
		var obatNama = $('#valObat').val();
		var idobatNama = $('#idvalObat').val();
		var obatSigna = $('#valSigna').val();
		var idobatSigna = $('#idvalSigna').val();
		var qtyNon = $('#qtyNon').val();

		
		var gabungNon = [
			{
				'obatNama' : obatNama,
				'idobatNama' : idobatNama,
				'obatSigna' : obatSigna,
				'idobatSigna' : idobatSigna,
				'qtyNon' : qtyNon,

			}
		];
		$( '.nonRacikan' ).each(function(){
			this.reset();
		});
		$('#valObat').parent().remove();
		$('#valSigna').parent().remove();

		console.log(JSON.stringify(gabungNon));

	}

	});	

	// RACIKAN Fungsi Simpan 
	$('#simpan').on('click', function(){

		if ($('#inputRacik').val() == ""){
			$('#inputRacik').addClass("bg-danger");
			$('#inputRacik').on('keyup', function(){
				$('#inputRacik').removeClass("bg-danger");	
			})
		}else if($('#qtyBaru1').val() == null){
			$('#kumpulObat').addClass("bg-danger");
			$('.btn-obat').on('click', function(){
				$('#kumpulObat').removeClass("bg-danger");

			})
		}else if($(zz).val() == ""){
			console.log(zz);
			$(zz).addClass("bg-danger");
			$(zz).on('keyup', function(){
				$(zz).removeClass("bg-danger");

			})
		}else if($('#valueSigna').val() == null){
			$('#label-signa').addClass("text-danger");
			$('.btn-signa').addClass("bg-danger");

			$('.btn-signa').on('click', function(){
				$('.btn-signa').removeClass("bg-danger");	
				$('#label-signa').removeClass("text-danger");

			})
		}else{
			alert ("SIMPAN");
			var namaracik = $('#inputRacik').val();
			var namasigna = $('#valueSigna').val();
			var isiobat = [];
			var headers = [];
			var gabung = [];

			$('#kumpulObat th').each(function(index, item) {
				headers[index] = $(item).html();
			});
			$('#kumpulObat tr').has('td').each(function() {
				var arrayItem = {};
				$('td', $(this)).each(function(index, item) {
					arrayItem[headers[index]] = $(item).html();
				});
				isiobat.push(arrayItem);
			});
			gabung.push({
				'namaRacik' : namaracik,
				'signa' : namasigna,
				'daftarObat': isiobat,
			}
			);
			$( '.racikan' ).each(function(){
				this.reset();
			});
			$('#valueSigna').parent().remove();
			$('.btn-signa').removeClass('disabled');
			// $('#kumpulObat tr:last').remove()
			
			console.log(JSON.stringify(gabung));

		}

	});	
</script>
</body>
</html>
