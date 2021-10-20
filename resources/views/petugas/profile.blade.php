<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>e-APD | {{auth()->user()->nama_lengkap}}</title>
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
	<header class="p-3 mb-3 sticky-top bg-dark" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.2);">
	    <div class="container">
	      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
	        <a class="navbar-brand mb-0 h1" href="/petugas/dashboard">
	        	<h2 class="text-light me-3"><img src="https://i.ibb.co/rpZyCm3/logo.png" alt="mdo" width="32" height="32"> e-APD</h2>
				  </a>

	        <div class="dropdown text-end col-12 col-lg me-lg mb-2 mb-md-0">
	          <a href="#" class="link-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
	            <span class="text-light">{{auth()->user()->nama_lengkap}} <img src="{{auth()->user()->getFotoProfile()}}" alt="mdo" width="32" height="32" class="rounded-circle"></span>
	          </a>
	          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
	            <li><a class="dropdown-item" href="/petugas/profile">Profil</a></li>
	            <li><hr class="dropdown-divider"></li>
	            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal">Keluar</a></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	</header>

	<div class="container">
		<div class="row">
			<main class="ms-sm-auto">
				<div class="pt-3 pb-2">
					<h3>Profil {{{auth()->user()->nama_lengkap}}}</h3>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="/petugas/dashboard">Beranda</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Profil</a></li>
					  </ol>
					</nav>
				</div>
				<div class="p-4 mb-4 text-dark rounded bg-white">
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
</script>
</html>