<!DOCTYPE html>
<html>
<head>
		<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>e-APD | Lapor APD | Goggles</title>
    <link rel="icon" href="https://i.ibb.co/rpZyCm3/logo.png" sizes="32x32" type="image/png">

    <style>
	    #myBtn {
		  display: none;
		  position: fixed;
		  bottom: 20px;
		  right: 30px;
		  z-index: 99;
		  border: none;
		  outline: none;
		  background-color: #555;
		  color: white;
		  cursor: pointer;
		  padding: 12px;
		  border-radius: 20px;
		}
		#myBtn:hover {
		  background-color: indianred;
		}
    	.card-title:hover {
  			text-decoration: underline;
		}
    </style>
</head>
<body class="bg-light text-dark">
	<button onclick="topFunction()" id="myBtn" title="Go to top">
		<i class="bi bi-arrow-up-circle-fill"></i>
	</button>
	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.2);">
	  <div class="container-fluid">
	    <a class="navbar-brand mb-0 h1" href="/dashboard">
	    	<img src="{{ asset('img/e-apd-logo-white.png') }}" alt="" height="30">
	    </a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link" aria-current="page" href="/petugas/dashboard">Beranda</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="/petugas/profile">Profil</a>
	        </li>
	      </ul>
	      <a class="btn btn-danger my-2 my-sm-0" role="button" data-bs-toggle="modal" data-bs-target="#logoutModal">Keluar</a>
		  </div>
	    </div>
	  </div>
	</nav>
	<div class="container">
		<div class="row">
			<main class="ms-sm-auto">
				<div class="pt-3 pb-2">
					<h3>Lapor APD</h3>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="/petugas/dashboard">Beranda</a></li>
					    <li class="breadcrumb-item"><a href="/petugas/dashboard/lapor-apd">Lapor APD</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Goggles</a></li>
					  </ol>
					</nav>
				</div>
				<div class="p-4 mb-4 text-dark rounded bg-white">
				    <h3 class="mb-3 border-bottom">Goggles</h3>
				    <form class="needs-validation" action="/petugas/dashboard/lapor-apd/{{$data_apd->id}}/submitted" method="POST" enctype="multipart/form-data" novalidate>
				    	{{csrf_field()}}
				    	<div class="row g-3">
					    	<div>
							  	<div>
							  	<label for="kepemilikan" class="form-label">Kepemilikan</label>
							    <select class="form-select" id="kepemilikan" required>
							      <option selected value="1">Punya</option>
							      <option value="0">Tidak punya</option>
							    </select>
							    <div class="invalid-feedback">
							      Wajib memilih salah satu dari opsi yang diberikan.
							    </div>
							  </div>
							  <div>
							  	<label for="alasan" class="form-label">Kenapa tidak punya?</label>
							    <select class="form-select" id="alasan" name="kondisi_id" required>
							    	<option selected disabled value="">Pilih</option>
							      @foreach ($data_kondisi_gg_x as $datakondisi_x)
							          <option value="{{ $datakondisi_x->mk_id }}">{{$datakondisi_x->nama_kondisi}}</option>
							       @endforeach
							    </select>
							    <div class="invalid-feedback">
							      Wajib memilih salah satu dari opsi yang diberikan.
							    </div>
							  </div>
							  <div>
							  	<label for="merk" class="form-label">Merk</label>
							    <select class="form-select" id="merk" name="merk" required>
							    	<option selected disabled value="">Pilih</option>
							       @foreach ($apd_goggles as $apd)
							          <option value="{{ $apd->merk }}">{{ $apd->merk}}</option>
							       @endforeach
							    </select>
							    <div class="invalid-feedback">
							      Wajib memilih salah satu dari opsi yang diberikan.
							    </div>
							  </div>
							  <div>
							  	<label for="ukuran" class="form-label">Ukuran</label>
							    <select class="form-select" id="ukuran" name="ukuran" required>
							      <option selected disabled value="">Pilih</option>
							      @foreach ($data_ukuran_gg as $dataukuran)
							          <option value="{{ $dataukuran->daftar_ukuran }}">{{ $dataukuran->daftar_ukuran}}</option>
							       @endforeach
							    </select>
							    <div class="invalid-feedback">
							      Wajib memilih salah satu dari opsi yang diberikan.
							    </div>
							  </div>
							  <div>
							  	<label for="tahun" class="form-label">Tahun didapat</label>
							    <select class="form-select" id="tahun" name="tahun" required>
							      <option selected disabled value="">Pilih</option>
							      @foreach ($apd_goggles as $apd)
							          <option value="{{ $apd->daftar_tahun }}">{{ $apd->daftar_tahun}}</option>
							       @endforeach
							    </select>
							    <div class="invalid-feedback">
							      Wajib memilih salah satu dari opsi yang diberikan.
							    </div>
							  </div>
							  <div>
							  	<label for="kondisi" class="form-label">Kondisi</label>
							    <select class="form-select" id="kondisi" name="kondisi_id" required>
							      <option selected disabled value="">Pilih</option>
							      @foreach ($data_kondisi_gg as $datakondisi)
							          <option value="{{ $datakondisi->mk_id }}">{{$datakondisi->nama_kondisi}} ({{$datakondisi->keterangan}})</option>
							       @endforeach
							    </select>
							    <div class="invalid-feedback">
							      Wajib memilih salah satu dari opsi yang diberikan.
							    </div>
							  </div>
							  <div>
						    	<label for="foto" class="form-label">Foto</label>
		              <div class="mb-3">
								    <input id="foto" type="file" class="form-control" aria-label="file example" name="foto" required>
								    <div class="invalid-feedback">Wajib memasukkan foto</div>
								  </div>
		            </div>
							</div>
              <hr class="my-4">
              <button class="w-100 btn btn-primary btn-lg" type="submit">Kirim</button>
				    </form>
			   </div>
			</main>
		</div>
	</div>
	<!-- Modal Logout-->
	<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Keluar</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        <p>Apakah Anda yakin ingin keluar?</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
	        <a class="btn btn-danger" role="button" href="/logout">Keluar</a>
	      </div>
	    </div>
	  </div>
	</div>
</body>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  -->
<script>

	//Get the button
	var mybutton = document.getElementById("myBtn");

	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
	    mybutton.style.display = "block";
	  } else {
	    mybutton.style.display = "none";
	  }
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	  document.body.scrollTop = 0;
	  document.documentElement.scrollTop = 0;
	}

	document.getElementById('alasan').disabled = true;
	document.getElementById('kepemilikan').addEventListener('change', function () {
    if (this.value == 0){
    	document.getElementById("alasan").disabled=false;
    	document.getElementById('merk').disabled = true;
    	document.getElementById('ukuran').disabled = true;
    	document.getElementById('tahun').disabled = true;
    	document.getElementById('kondisi').disabled = true;
    	document.getElementById('foto').disabled = true;
    }
    else {
    	document.getElementById('alasan').disabled = true;
    	document.getElementById('merk').disabled = false;
    	document.getElementById('ukuran').disabled = true;
    	document.getElementById('tahun').disabled = false;
    	document.getElementById('kondisi').disabled = false;
    	document.getElementById('foto').disabled = false;
    }
	});

	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function () {
	  'use strict'

	  // Fetch all the forms we want to apply custom Bootstrap validation styles to
	  var forms = document.querySelectorAll('.needs-validation')

	  // Loop over them and prevent submission
	  Array.prototype.slice.call(forms)
	    .forEach(function (form) {
	      form.addEventListener('submit', function (event) {
	        if (!form.checkValidity()) {
	          event.preventDefault()
	          event.stopPropagation()
	        }

	        form.classList.add('was-validated')
	      }, false)
	    })
	})()
</script>
</html>