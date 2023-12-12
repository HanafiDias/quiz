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
                        <button type="button" class="btn btn-primary" data-mdb-ripple-init>Tambah</button>
                    </div>
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                            <tr>
                                <th>No</th>
                                <th>User Email</th>
                                <th>User Nama</th>
                                <th>Alamat</th>
                                <th>HP</th>
                                <th>Pos</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Contoh data -->
                            <tr>
                                <td>1</td>
                                <td>john@example.com</td>
                                <td>John Doe</td>
                                <td>Jalan Contoh No. 123</td>
                                <td>081234567890</td>
                                <td>ABC123</td>
                                <td>Role Name</td>
                                <td>Active</td>
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
