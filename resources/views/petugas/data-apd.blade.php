<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>e-APD | Data APD</title>
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
	    	background-color: #000000;
	    	color: white;
	    	cursor: pointer;
	    	padding: 12px;
	    	border-radius: 20px;
		}
		#myBtn:hover {
			background-color: blue;
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
					<h3>Data APD</h3>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="/petugas/dashboard">Beranda</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Data APD</a></li>
					  </ol>
					</nav>
				</div>
				@foreach($data_apd_fire_helmet as $fire_helmet)
				    <div class="p-4 mb-5 text-dark rounded bg-white">
				    	<h3 class="border-bottom">{{$fire_helmet->jenis_apd}}</h3>
				        @if($fire_helmet->kondisi_id > 1 && $fire_helmet->kondisi_id < 100)
					        <div class="table-responsive">
							    <table class="table table-striped">
							        <tbody>
								        <tr>
								          	<th scope="row" class="text-start">Merk</th>
									        <td>{{$fire_helmet->merk}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Ukuran</th>
									        <td>{{$fire_helmet->ukuran}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Tahun</th>
									        <td>{{$fire_helmet->tahun}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Kondisi</th>
									        <td>{{$fire_helmet->nama_kondisi}} ({{$fire_helmet->keterangan_kondisi}})</td>
									    </tr>  
									    <tr>
									        <th scope="row" class="text-start">Status Verifikasi</th>
									        @if($fire_helmet->status_verifikasi == 1)
								            <td>Belum diverifikasi</td>
								            @elseif($fire_helmet->status_verifikasi == 2)
								            <td>Sudah diverifikasi</td>
								            @elseif($fire_helmet->status_verifikasi == 3)
								            <td>Verifikasi ditolak</td>
								            @endif
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Foto</th>
									        <td><img src="{{asset('img/data-lapor-apd/'.$fire_helmet->foto)}}" style="width: 150px;"></td>
									    </tr>
								    </tbody>
								</table>
								<a href="/petugas/dashboard/data-apd/{{$fire_helmet->id}}/edit" class="w-100 btn btn-success btn-lg">Edit</a>
							</div>
				        @elseif($fire_helmet->kondisi_id > 99)
					        <div class="table-responsive">
							    <table class="table table-striped">
							        <tbody>
									    <tr>
									        <th scope="row" class="text-start">Kondisi</th>
									        <td>{{$fire_helmet->nama_kondisi}}</td>
									    </tr>  
									    <tr>
									        <th scope="row" class="text-start">Status Verifikasi</th>
									        @if($fire_helmet->status_verifikasi == 1)
								            <td>Belum diverifikasi</td>
								            @elseif($fire_helmet->status_verifikasi == 2)
								            <td>Sudah diverifikasi</td>
								            @elseif($fire_helmet->status_verifikasi == 3)
								            <td>Verifikasi ditolak</td>
								            @endif
									    </tr>
								    </tbody>
								</table>
								<a href="/petugas/dashboard/data-apd/{{$fire_helmet->id}}/edit" class="w-100 btn btn-success btn-lg">Edit</a>
							</div>
				        @else
					    	<p class="my-3">Anda belum memasukkan data untuk jenis APD ini.</p>
				        @endif
				    </div>
			    @endforeach

			    @foreach($data_apd_rescue_helmet as $rescue_helmet)
				    <div class="p-4 mb-5 text-dark rounded bg-white">
				    	<h3 class="border-bottom">{{$rescue_helmet->jenis_apd}}</h3>
				        @if($rescue_helmet->kondisi_id > 1 && $rescue_helmet->kondisi_id < 100)
					        <div class="table-responsive">
							    <table class="table table-striped">
							        <tbody>
								        <tr>
								          	<th scope="row" class="text-start">Merk</th>
									        <td>{{$rescue_helmet->merk}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Ukuran</th>
									        <td>{{$rescue_helmet->ukuran}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Tahun</th>
									        <td>{{$rescue_helmet->tahun}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Kondisi</th>
									        <td>{{$rescue_helmet->nama_kondisi}} ({{$rescue_helmet->keterangan_kondisi}})</td>
									    </tr>  
									    <tr>
									        <th scope="row" class="text-start">Status Verifikasi</th>
									        @if($rescue_helmet->status_verifikasi == 1)
								            <td>Belum diverifikasi</td>
								            @elseif($rescue_helmet->status_verifikasi == 2)
								            <td>Sudah diverifikasi</td>
								            @elseif($rescue_helmet->status_verifikasi == 3)
								            <td>Verifikasi ditolak</td>
								            @endif
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Foto</th>
									        <td><img src="{{asset('img/data-lapor-apd/'.$rescue_helmet->foto)}}" style="width: 150px;"></td>
									    </tr>
								    </tbody>
								</table>
								<a href="/petugas/dashboard/data-apd/{{$rescue_helmet->id}}/edit" class="w-100 btn btn-success btn-lg">Edit</a>
							</div>
				        @elseif($rescue_helmet->kondisi_id > 99)
					        <div class="table-responsive">
							    <table class="table table-striped">
							        <tbody>
									    <tr>
									        <th scope="row" class="text-start">Kondisi</th>
									        <td>{{$rescue_helmet->nama_kondisi}}</td>
									    </tr>  
									    <tr>
									        <th scope="row" class="text-start">Status Verifikasi</th>
									        @if($rescue_helmet->status_verifikasi == 1)
								            <td>Belum diverifikasi</td>
								            @elseif($rescue_helmet->status_verifikasi == 2)
								            <td>Sudah diverifikasi</td>
								            @elseif($rescue_helmet->status_verifikasi == 3)
								            <td>Verifikasi ditolak</td>
								            @endif
									    </tr>
								    </tbody>
								</table>
								<a href="/petugas/dashboard/data-apd/{{$rescue_helmet->id}}/edit" class="w-100 btn btn-success btn-lg">Edit</a>
							</div>
				        @else
					    	<p class="my-3">Anda belum memasukkan data untuk jenis APD ini.</p>
				        @endif
				    </div>
			    @endforeach

			    @foreach($data_apd_goggles as $goggles)
				    <div class="p-4 mb-5 text-dark rounded bg-white">
				    	<h3 class="border-bottom">{{$goggles->jenis_apd}}</h3>
				        @if($goggles->kondisi_id > 1 && $goggles->kondisi_id < 100)
					        <div class="table-responsive">
							    <table class="table table-striped">
							        <tbody>
								        <tr>
								          	<th scope="row" class="text-start">Merk</th>
									        <td>{{$goggles->merk}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Ukuran</th>
									        <td>{{$goggles->ukuran}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Tahun</th>
									        <td>{{$goggles->tahun}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Kondisi</th>
									        <td>{{$goggles->nama_kondisi}} ({{$goggles->keterangan_kondisi}})</td>
									    </tr>  
									    <tr>
									        <th scope="row" class="text-start">Status Verifikasi</th>
									        @if($goggles->status_verifikasi == 1)
								            <td>Belum diverifikasi</td>
								            @elseif($goggles->status_verifikasi == 2)
								            <td>Sudah diverifikasi</td>
								            @elseif($goggles->status_verifikasi == 3)
								            <td>Verifikasi ditolak</td>
								            @endif
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Foto</th>
									        <td><img src="{{asset('img/data-lapor-apd/'.$goggles->foto)}}" style="width: 150px;"></td>
									    </tr>
								    </tbody>
								</table>
								<a href="#" class="w-100 btn btn-success btn-lg">Edit</a>
							</div>
				        @elseif($goggles->kondisi_id > 99)
					        <div class="table-responsive">
							    <table class="table table-striped">
							        <tbody>
									    <tr>
									        <th scope="row" class="text-start">Kondisi</th>
									        <td>{{$goggles->nama_kondisi}}</td>
									    </tr>  
									    <tr>
									        <th scope="row" class="text-start">Status Verifikasi</th>
									        @if($goggles->status_verifikasi == 1)
								            <td>Belum diverifikasi</td>
								            @elseif($goggles->status_verifikasi == 2)
								            <td>Sudah diverifikasi</td>
								            @elseif($goggles->status_verifikasi == 3)
								            <td>Verifikasi ditolak</td>
								            @endif
									    </tr>
								    </tbody>
								</table>
								<a href="#" class="w-100 btn btn-success btn-lg">Edit</a>
							</div>
				        @else
					    	<p class="my-3">Anda belum memasukkan data untuk jenis APD ini.</p>
				        @endif
				    </div>
			    @endforeach

			    @foreach($data_apd_balaclava as $balaclava)
				    <div class="p-4 mb-5 text-dark rounded bg-white">
				    	<h3 class="border-bottom">{{$balaclava->jenis_apd}}</h3>
				        @if($balaclava->kondisi_id > 1 && $balaclava->kondisi_id < 100)
					        <div class="table-responsive">
							    <table class="table table-striped">
							        <tbody>
								        <tr>
								          	<th scope="row" class="text-start">Merk</th>
									        <td>{{$balaclava->merk}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Ukuran</th>
									        <td>{{$balaclava->ukuran}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Tahun</th>
									        <td>{{$balaclava->tahun}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Kondisi</th>
									        <td>{{$balaclava->nama_kondisi}} ({{$balaclava->keterangan_kondisi}})</td>
									    </tr>  
									    <tr>
									        <th scope="row" class="text-start">Status Verifikasi</th>
									        @if($balaclava->status_verifikasi == 1)
								            <td>Belum diverifikasi</td>
								            @elseif($balaclava->status_verifikasi == 2)
								            <td>Sudah diverifikasi</td>
								            @elseif($balaclava->status_verifikasi == 3)
								            <td>Verifikasi ditolak</td>
								            @endif
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Foto</th>
									        <td><img src="{{asset('img/data-lapor-apd/'.$balaclava->foto)}}" style="width: 150px;"></td>
									    </tr>
								    </tbody>
								</table>
								<a href="/petugas/dashboard/data-apd/{{$balaclava->id}}/edit" class="w-100 btn btn-success btn-lg">Edit</a>
							</div>
				        @elseif($balaclava->kondisi_id > 99)
					        <div class="table-responsive">
							    <table class="table table-striped">
							        <tbody>
									    <tr>
									        <th scope="row" class="text-start">Kondisi</th>
									        <td>{{$balaclava->nama_kondisi}}</td>
									    </tr>  
									    <tr>
									        <th scope="row" class="text-start">Status Verifikasi</th>
									        @if($balaclava->status_verifikasi == 1)
								            <td>Belum diverifikasi</td>
								            @elseif($balaclava->status_verifikasi == 2)
								            <td>Sudah diverifikasi</td>
								            @elseif($balaclava->status_verifikasi == 3)
								            <td>Verifikasi ditolak</td>
								            @endif
									    </tr>
								    </tbody>
								</table>
								<a href="/petugas/dashboard/data-apd/{{$balaclava->id}}/edit" class="w-100 btn btn-success btn-lg">Edit</a>
							</div>
				        @else
					    	<p class="my-3">Anda belum memasukkan data untuk jenis APD ini.</p>
				        @endif
				    </div>
			    @endforeach

			    @foreach($data_apd_fire_jacket as $fire_jacket)
				    <div class="p-4 mb-5 text-dark rounded bg-white">
				    	<h3 class="border-bottom">{{$fire_jacket->jenis_apd}}</h3>
				        @if($fire_jacket->kondisi_id > 1 && $fire_jacket->kondisi_id < 100)
					        <div class="table-responsive">
							    <table class="table table-striped">
							        <tbody>
								        <tr>
								          	<th scope="row" class="text-start">Merk</th>
									        <td>{{$fire_jacket->merk}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Ukuran</th>
									        <td>{{$fire_jacket->ukuran}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Tahun</th>
									        <td>{{$fire_jacket->tahun}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Kondisi</th>
									        <td>{{$fire_jacket->nama_kondisi}} ({{$fire_jacket->keterangan_kondisi}})</td>
									    </tr>  
									    <tr>
									        <th scope="row" class="text-start">Status Verifikasi</th>
									        @if($fire_jacket->status_verifikasi == 1)
								            <td>Belum diverifikasi</td>
								            @elseif($fire_jacket->status_verifikasi == 2)
								            <td>Sudah diverifikasi</td>
								            @elseif($fire_jacket->status_verifikasi == 3)
								            <td>Verifikasi ditolak</td>
								            @endif
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Foto</th>
									        <td><img src="{{asset('img/data-lapor-apd/'.$fire_jacket->foto)}}" style="width: 150px;"></td>
									    </tr>
								    </tbody>
								</table>
								<a href="#" class="w-100 btn btn-success btn-lg">Edit</a>
							</div>
				        @elseif($fire_jacket->kondisi_id > 99)
					        <div class="table-responsive">
							    <table class="table table-striped">
							        <tbody>
									    <tr>
									        <th scope="row" class="text-start">Kondisi</th>
									        <td>{{$fire_jacket->nama_kondisi}}</td>
									    </tr>  
									    <tr>
									        <th scope="row" class="text-start">Status Verifikasi</th>
									        @if($fire_jacket->status_verifikasi == 1)
								            <td>Belum diverifikasi</td>
								            @elseif($fire_jacket->status_verifikasi == 2)
								            <td>Sudah diverifikasi</td>
								            @elseif($fire_jacket->status_verifikasi == 3)
								            <td>Verifikasi ditolak</td>
								            @endif
									    </tr>
								    </tbody>
								</table>
								<a href="#" class="w-100 btn btn-success btn-lg">Edit</a>
							</div>
				        @else
					    	<p class="my-3">Anda belum memasukkan data untuk jenis APD ini.</p>
				        @endif
				    </div>
			    @endforeach

			    @foreach($data_apd_jumpsuit as $jumpsuit)
				    <div class="p-4 mb-5 text-dark rounded bg-white">
				    	<h3 class="border-bottom">{{$jumpsuit->jenis_apd}}</h3>
				        @if($jumpsuit->kondisi_id > 1 && $jumpsuit->kondisi_id < 100)
					        <div class="table-responsive">
							    <table class="table table-striped">
							        <tbody>
								        <tr>
								          	<th scope="row" class="text-start">Merk</th>
									        <td>{{$jumpsuit->merk}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Ukuran</th>
									        <td>{{$jumpsuit->ukuran}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Tahun</th>
									        <td>{{$jumpsuit->tahun}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Kondisi</th>
									        <td>{{$jumpsuit->nama_kondisi}} ({{$jumpsuit->keterangan_kondisi}})</td>
									    </tr>  
									    <tr>
									        <th scope="row" class="text-start">Status Verifikasi</th>
									        @if($jumpsuit->status_verifikasi == 1)
								            <td>Belum diverifikasi</td>
								            @elseif($jumpsuit->status_verifikasi == 2)
								            <td>Sudah diverifikasi</td>
								            @elseif($jumpsuit->status_verifikasi == 3)
								            <td>Verifikasi ditolak</td>
								            @endif
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Foto</th>
									        <td><img src="{{asset('img/data-lapor-apd/'.$jumpsuit->foto)}}" style="width: 150px;"></td>
									    </tr>
								    </tbody>
								</table>
								<a href="#" class="w-100 btn btn-success btn-lg">Edit</a>
							</div>
				        @elseif($jumpsuit->kondisi_id > 99)
					        <div class="table-responsive">
							    <table class="table table-striped">
							        <tbody>
									    <tr>
									        <th scope="row" class="text-start">Kondisi</th>
									        <td>{{$jumpsuit->nama_kondisi}}</td>
									    </tr> 
									    <tr>
									        <th scope="row" class="text-start">Status Verifikasi</th>
									        @if($jumpsuit->status_verifikasi == 1)
								            <td>Belum diverifikasi</td>
								            @elseif($jumpsuit->status_verifikasi == 2)
								            <td>Sudah diverifikasi</td>
								            @elseif($jumpsuit->status_verifikasi == 3)
								            <td>Verifikasi ditolak</td>
								            @endif
									    </tr>
								    </tbody>
								</table>
								<a href="#" class="w-100 btn btn-success btn-lg">Edit</a>
							</div>
				        @else
					    	<p class="my-3">Anda belum memasukkan data untuk jenis APD ini.</p>
				        @endif
				    </div>
			    @endforeach

			    @foreach($data_apd_rescue_boot as $rescue_boot)
				    <div class="p-4 mb-5 text-dark rounded bg-white">
				    	<h3 class="border-bottom">{{$rescue_boot->jenis_apd}}</h3>
				        @if($rescue_boot->kondisi_id > 1 && $rescue_boot->kondisi_id < 100)
					        <div class="table-responsive">
							    <table class="table table-striped">
							        <tbody>
								        <tr>
								          	<th scope="row" class="text-start">Merk</th>
									        <td>{{$rescue_boot->merk}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Ukuran</th>
									        <td>{{$rescue_boot->ukuran}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Tahun</th>
									        <td>{{$rescue_boot->tahun}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Kondisi</th>
									        <td>{{$rescue_boot->nama_kondisi}} ({{$rescue_boot->keterangan_kondisi}})</td>
									    </tr>  
									    <tr>
									        <th scope="row" class="text-start">Status Verifikasi</th>
									        @if($rescue_boot->status_verifikasi == 1)
								            <td>Belum diverifikasi</td>
								            @elseif($rescue_boot->status_verifikasi == 2)
								            <td>Sudah diverifikasi</td>
								            @elseif($rescue_boot->status_verifikasi == 3)
								            <td>Verifikasi ditolak</td>
								            @endif
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Foto</th>
									        <td><img src="{{asset('img/data-lapor-apd/'.$rescue_boot->foto)}}" style="width: 150px;"></td>
									    </tr>
								    </tbody>
								</table>
								<a href="#" class="w-100 btn btn-success btn-lg">Edit</a>
							</div>
				        @elseif($rescue_boot->kondisi_id > 99)
					        <div class="table-responsive">
							    <table class="table table-striped">
							        <tbody>
									    <tr>
									        <th scope="row" class="text-start">Kondisi</th>
									        <td>{{$rescue_boot->nama_kondisi}}</td>
									    </tr> 
									    <tr>
									        <th scope="row" class="text-start">Status Verifikasi</th>
									        @if($rescue_boot->status_verifikasi == 1)
								            <td>Belum diverifikasi</td>
								            @elseif($rescue_boot->status_verifikasi == 2)
								            <td>Sudah diverifikasi</td>
								            @elseif($rescue_boot->status_verifikasi == 3)
								            <td>Verifikasi ditolak</td>
								            @endif
									    </tr>
								    </tbody>
								</table>
								<a href="#" class="w-100 btn btn-success btn-lg">Edit</a>
							</div>
				        @else
					    	<p class="my-3">Anda belum memasukkan data untuk jenis APD ini.</p>
				        @endif
				    </div>
			    @endforeach

			    @foreach($data_apd_fire_boot as $fire_boot)
				    <div class="p-4 mb-5 text-dark rounded bg-white">
				    	<h3 class="border-bottom">{{$fire_boot->jenis_apd}}</h3>
				        @if($fire_boot->kondisi_id > 1 && $fire_boot->kondisi_id < 100)
					        <div class="table-responsive">
							    <table class="table table-striped">
							        <tbody>
								        <tr>
								          	<th scope="row" class="text-start">Merk</th>
									        <td>{{$fire_boot->merk}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Ukuran</th>
									        <td>{{$fire_boot->ukuran}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Tahun</th>
									        <td>{{$fire_boot->tahun}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Kondisi</th>
									        <td>{{$fire_boot->nama_kondisi}} ({{$fire_boot->keterangan_kondisi}})</td>
									    </tr>  
									    <tr>
									        <th scope="row" class="text-start">Status Verifikasi</th>
									        @if($fire_boot->status_verifikasi == 1)
								            <td>Belum diverifikasi</td>
								            @elseif($fire_boot->status_verifikasi == 2)
								            <td>Sudah diverifikasi</td>
								            @elseif($fire_boot->status_verifikasi == 3)
								            <td>Verifikasi ditolak</td>
								            @endif
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Foto</th>
									        <td><img src="{{asset('img/data-lapor-apd/'.$fire_boot->foto)}}" style="width: 150px;"></td>
									    </tr>
								    </tbody>
								</table>
								<a href="#" class="w-100 btn btn-success btn-lg">Edit</a>
							</div>
				        @elseif($fire_boot->kondisi_id > 99)
					        <div class="table-responsive">
							    <table class="table table-striped">
							        <tbody>
									    <tr>
									        <th scope="row" class="text-start">Kondisi</th>
									        <td>{{$fire_boot->nama_kondisi}}</td>
									    </tr> 
									    <tr>
									        <th scope="row" class="text-start">Status Verifikasi</th>
									        @if($fire_boot->status_verifikasi == 1)
								            <td>Belum diverifikasi</td>
								            @elseif($fire_boot->status_verifikasi == 2)
								            <td>Sudah diverifikasi</td>
								            @elseif($fire_boot->status_verifikasi == 3)
								            <td>Verifikasi ditolak</td>
								            @endif
									    </tr>
								    </tbody>
								</table>
								<a href="#" class="w-100 btn btn-success btn-lg">Edit</a>
							</div>
				        @else
					    	<p class="my-3">Anda belum memasukkan data untuk jenis APD ini.</p>
				        @endif
				    </div>
			    @endforeach

			    @foreach($data_apd_fire_boot as $fire_gloves)
				    <div class="p-4 mb-5 text-dark rounded bg-white">
				    	<h3 class="border-bottom">{{$fire_gloves->jenis_apd}}</h3>
				        @if($fire_gloves->kondisi_id > 1 && $fire_gloves->kondisi_id < 100)
					        <div class="table-responsive">
							    <table class="table table-striped">
							        <tbody>
								        <tr>
								          	<th scope="row" class="text-start">Merk</th>
									        <td>{{$fire_gloves->merk}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Ukuran</th>
									        <td>{{$fire_gloves->ukuran}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Tahun</th>
									        <td>{{$fire_gloves->tahun}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Kondisi</th>
									        <td>{{$fire_gloves->nama_kondisi}} ({{$fire_gloves->keterangan_kondisi}})</td>
									    </tr>  
									    <tr>
									        <th scope="row" class="text-start">Status Verifikasi</th>
									        @if($fire_gloves->status_verifikasi == 1)
								            <td>Belum diverifikasi</td>
								            @elseif($fire_gloves->status_verifikasi == 2)
								            <td>Sudah diverifikasi</td>
								            @elseif($fire_gloves->status_verifikasi == 3)
								            <td>Verifikasi ditolak</td>
								            @endif
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Foto</th>
									        <td><img src="{{asset('img/data-lapor-apd/'.$fire_gloves->foto)}}" style="width: 150px;"></td>
									    </tr>
								    </tbody>
								</table>
								<a href="#" class="w-100 btn btn-success btn-lg">Edit</a>
							</div>
				        @elseif($fire_gloves->kondisi_id > 99)
					        <div class="table-responsive">
							    <table class="table table-striped">
							        <tbody>
									    <tr>
									        <th scope="row" class="text-start">Kondisi</th>
									        <td>{{$fire_gloves->nama_kondisi}}</td>
									    </tr> 
									    <tr>
									        <th scope="row" class="text-start">Status Verifikasi</th>
									        @if($fire_gloves->status_verifikasi == 1)
								            <td>Belum diverifikasi</td>
								            @elseif($fire_gloves->status_verifikasi == 2)
								            <td>Sudah diverifikasi</td>
								            @elseif($fire_gloves->status_verifikasi == 3)
								            <td>Verifikasi ditolak</td>
								            @endif
									    </tr>
								    </tbody>
								</table>
								<a href="#" class="w-100 btn btn-success btn-lg">Edit</a>
							</div>
				        @else
					    	<p class="my-3">Anda belum memasukkan data untuk jenis APD ini.</p>
				        @endif
				    </div>
			    @endforeach

			    @foreach($data_apd_rescue_gloves as $rescue_gloves)
				    <div class="p-4 mb-5 text-dark rounded bg-white">
				    	<h3 class="border-bottom">{{$rescue_gloves->jenis_apd}}</h3>
				        @if($rescue_gloves->kondisi_id > 1 && $rescue_gloves->kondisi_id < 100)
					        <div class="table-responsive">
							    <table class="table table-striped">
							        <tbody>
								        <tr>
								          	<th scope="row" class="text-start">Merk</th>
									        <td>{{$rescue_gloves->merk}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Ukuran</th>
									        <td>{{$rescue_gloves->ukuran}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Tahun</th>
									        <td>{{$rescue_gloves->tahun}}</td>
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Kondisi</th>
									        <td>{{$rescue_gloves->nama_kondisi}} ({{$rescue_gloves->keterangan_kondisi}})</td>
									    </tr>  
									    <tr>
									        <th scope="row" class="text-start">Status Verifikasi</th>
									        @if($rescue_gloves->status_verifikasi == 1)
								            <td>Belum diverifikasi</td>
								            @elseif($rescue_gloves->status_verifikasi == 2)
								            <td>Sudah diverifikasi</td>
								            @elseif($rescue_gloves->status_verifikasi == 3)
								            <td>Verifikasi ditolak</td>
								            @endif
									    </tr>
									    <tr>
									        <th scope="row" class="text-start">Foto</th>
									        <td><img src="{{asset('img/data-lapor-apd/'.$rescue_gloves->foto)}}" style="width: 150px;"></td>
									    </tr>
								    </tbody>
								</table>
								<a href="#" class="w-100 btn btn-success btn-lg">Edit</a>
							</div>
				        @elseif($rescue_gloves->kondisi_id > 99)
					        <div class="table-responsive">
							    <table class="table table-striped">
							        <tbody>
									    <tr>
									        <th scope="row" class="text-start">Kondisi</th>
									        <td>{{$rescue_gloves->nama_kondisi}}</td>
									    </tr> 
									    <tr>
									        <th scope="row" class="text-start">Status Verifikasi</th>
									        @if($rescue_gloves->status_verifikasi == 1)
								            <td>Belum diverifikasi</td>
								            @elseif($rescue_gloves->status_verifikasi == 2)
								            <td>Sudah diverifikasi</td>
								            @elseif($rescue_gloves->status_verifikasi == 3)
								            <td>Verifikasi ditolak</td>
								            @endif
									    </tr>
								    </tbody>
								</table>
								<a href="#" class="w-100 btn btn-success btn-lg">Edit</a>
							</div>
				        @else
					    	<p class="my-3">Anda belum memasukkan data untuk jenis APD ini.</p>
				        @endif
				    </div>
			    @endforeach
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script>
	//Back to top script
	var mybutton = document.getElementById("myBtn");
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
	    mybutton.style.display = "block";
	  } else {
	    mybutton.style.display = "none";
	  }
	}

	function topFunction() {
	  document.body.scrollTop = 0;
	  document.documentElement.scrollTop = 0;
	}
</script>
</html>