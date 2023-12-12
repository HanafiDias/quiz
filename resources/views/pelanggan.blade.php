<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @include('master')
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('javacript.js') }}">
</head>

<body>
    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        @include('sidebar')
        <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="#">
                    <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="25"
                        alt="" loading="lazy" />
                </a>


                <!-- Right links -->
                <ul class="navbar-nav ms-auto d-flex flex-row">

                    <!-- Avatar -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                            id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle"
                                height="22" alt="" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">My profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <!-- Section: Main chart -->
            <section class="mb-4">
                <div class="card">

                    <div class="card-header py-3">
                        <h5 class="mb-0 text-center"><strong>PELANGGAN</strong></h5>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Tambah</button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pelanggan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="/gol/post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="inputAddress2">Nama</label>
                                                <input type="text" class="form-control" id="inputAddress2"
                                                    placeholder="Nama" name="pel_nama">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress2">Alamat</label>
                                                <input type="text" class="form-control" id="inputAddress2"
                                                    placeholder="Alamat" name="pel_alamat">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress2">Nomor HP</label>
                                                <input type="text" class="form-control" id="inputAddress2"
                                                    placeholder="Nomor HP" name="pel_hp">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress2">Nomor KTP</label>
                                                <input type="text" class="form-control" id="inputAddress2"
                                                    placeholder="Nomor KTP" name="pel_ktp">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress2">Nomor Seri</label>
                                                <input type="text" class="form-control" id="inputAddress2"
                                                    placeholder="Nomor Seri" name="pel_seri">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress2">Nomor Meteran</label>
                                                <input type="text" class="form-control" id="inputAddress2"
                                                    placeholder="Nomoer Meteran" name="pel_meteran">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress2">Status</label>
                                                <input type="text" class="form-control" id="inputAddress2"
                                                    placeholder="Status" name="pel_aktif">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress2">ID user</label>
                                                <input type="text" class="form-control" id="inputAddress2"
                                                    placeholder="ID User" name="pel_id_user">
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3">Add Pelanggan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table align-middle mb-0 bg-white">
                            <thead class="bg-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No. HP</th>
                                    <th>No. KTP</th>
                                    <th>No. Seri</th>
                                    <th>No. Meteran</th>
                                    <th>Status</th>
                                    <th>ID User</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <p class="fw-normal mb-1">{{ $item->pel_no }}</p>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">{{ $item->pel_nama }}</p>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">{{ $item->pel_alamat }}</p>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">{{ $item->pel_hp }}</p>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">{{ $item->pel_ktp }}</p>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">{{ $item->pel_seri }}</p>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">{{ $item->pel_meteran }}</p>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">{{ $item->pel_aktif }}</p>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">{{ $item->pel_id_user }}</p>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary">Edit</a>
                                            <form action="" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <!-- Baris lainnya -->
                                    <!-- Isi dengan data yang sesuai dari database -->
                            </tbody>
                        </table>


                        <div class="card-body">
                            <canvas class="my-4 w-100" id="myChart" height="380"></canvas>

                        </div>

                    </div>
            </section>

        </div>
    </main>
    <!--Main layout-->

</body>

</html>
