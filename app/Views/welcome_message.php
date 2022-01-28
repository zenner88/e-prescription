<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>E-Prescription</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/1586700859950.jfif"/>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- end bootstrap -->
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

	<!-- Nav tabs -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Messages</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">..asd.</div>
  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">...ss</div>
  <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">..ddddd.</div>
  <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">...11111</div>
</div>


		<div class="p-3 border bg-light">
		<form class="row g-3">
			<div class="col-md-12 mt-3">
				<label for="inputEmail4" class="form-label">Obat</label>
				<select class="form-select form-control" id="specificSizeSelect">
				<option selected>Choose...</option>
				<option value="1">One</option>
				<option value="2">Two</option>
				<option value="3">Three</option>
				</select>
			</div>
			<div class="col-md-12 mt-3">
				<label for="inputEmail4" class="form-label">Signa</label>
				<select class="form-select form-control" id="specificSizeSelect">
				<option selected>Choose...</option>
				<option value="1">One</option>
				<option value="2">Two</option>
				<option value="3">Three</option>
				</select>
			</div>
			<div class="col-md-12 mt-3">
				<label for="inputEmail4" class="form-label">Qty</label>
				<input type="number" class="form-control" id="inputEmail3">
			</div>
		</form>
		</div>

		<div class="p-3 border bg-light">
		<form class="row g-3">
			<div class="col-md-12 mt-3">
				<label for="inputEmail4" class="form-label">Nama Racikan</label>
				<input type="text" class="form-control" id="inputEmail3">
			</div>
			<div class="col-md-12 mt-3">
				<label for="inputEmail4" class="form-label">Obat</label>
				<select class="form-select form-control" id="specificSizeSelect">
				<option selected>Choose...</option>
				<option value="1">One</option>
				<option value="2">Two</option>
				<option value="3">Three</option>
				</select>
			</div>+Tambah
			<div class="col-md-12 mt-3">
				<label for="inputEmail4" class="form-label">Signa</label>
				<select class="form-select form-control" id="specificSizeSelect">
				<option selected>Choose...</option>
				<option value="1">One</option>
				<option value="2">Two</option>
				<option value="3">Three</option>
				</select>
			</div>
			<div class="col-md-12 mt-3">
				<label for="inputEmail4" class="form-label">Qty</label>
				<input type="number" class="form-control" id="inputEmail3">
			</div>
		</form>
		</div>
	</div>
	<div class="col-md-7 col-sm-12 mt-3">
		<div class="p-3 border bg-light">
		<table class="table table-striped">
			<thead>
				<tr>
				<th scope="col">#</th>
				<th scope="col">First</th>
				<th scope="col">Last</th>
				<th scope="col">Handle</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<th scope="row">1</th>
				<td>Mark</td>
				<td>Otto</td>
				<td>@mdo</td>
				</tr>
				<tr>
				<th scope="row">2</th>
				<td>Jacob</td>
				<td>Thornton</td>
				<td>@fat</td>
				</tr>
				<tr>
				<th scope="row">3</th>
				<td colspan="2">Larry the Bird</td>
				<td>@twitter</td>
				</tr>
			</tbody>
		</table>
		</div>
	</div>
	</div>
</div>

<script>
var triggerTabList = [].slice.call(document.querySelectorAll('#myTab button'))
triggerTabList.forEach(function (triggerEl) {
  var tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', function (event) {
    event.preventDefault()
    tabTrigger.show()
  })
})
</script>
</body>
</html>
