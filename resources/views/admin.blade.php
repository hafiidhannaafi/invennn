@extends('layouts.master')
@section('content')
    {{-- @section('title', 'pengajuan')
@section('pengajuan', 'active')
@section('iconss-nav', 'show') --}}

    <main id="main" class="main">

        <div class="pagetitle">

        </div><!-- End Page Title -->

        <section class="section">
            <div class="row align-items-top">
                <div class="col-lg-14">

                    <!-- Default Card -->
                    <div class="card">
                        <div class="card-body"><br>
                            <center> <img src="admin/logo-lptp.png" class="card-img-bottom" style="width: 90px;"
                                    alt="...">
                                <center>
                                    <h5 class="card-title text-center pb-0 fs-4">Selamat Datang {{ auth()->user()->name }}
                                    </h5>
                                    <h5 class="card-title">Sistem Informasi Inventaris Barang Lembaga Pengembangan Pedesaan
                                        (LPTP) Surakarta</h5>

                        </div>

                    </div><!-- End Card with an image on bottom -->


                    <section class="section dashboard">
                        <div class="row">

                            <!-- Left side columns -->
                            <div class="col-lg-8">
                                <div class="row">

                                    <!-- Sales Card -->
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="card info-card sales-card">



                                            <div class="card-body">
                                                <h5 class="card-title">Total<span>| Data Barang</span></h5>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="bi bi-file-earmark-check"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6><?php
                                                        $varjumlah = 0;
                                                        foreach ($inputbarang as $ib) {
                                                            $varjumlah += $ib->jumlah;
                                                        }
                                                        echo $varjumlah;
                                                        ?></h6>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- End Sales Card -->

                                    <!-- Revenue Card -->
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="card info-card revenue-card">



                                            <div class="card-body">
                                                <h5 class="card-title">Jumlah <span>| Aset bergerak</span></h5>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="bi bi-bicycle"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6><?php $varjumlah = 0;
                                                        foreach ($inputbarang as $ib) {
                                                            if ($ib->jenis_asets_id == 1) {
                                                                $varjumlah += $ib->jumlah;
                                                            }
                                                        }
                                                        echo $varjumlah; ?></h6>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- End Revenue Card -->

                                    <!-- Customers Card -->
                                    <div class="col-xxl-4 col-xl-12">

                                        <div class="card info-card customers-card">



                                            <div class="card-body">
                                                <h5 class="card-title">Jumlah <span>| Tidak Bergerak</span></h5>
                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="bi bi-house"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6><?php $varjumlah = 0;
                                                        foreach ($inputbarang as $ib) {
                                                            if ($ib->jenis_asets_id == 2) {
                                                                $varjumlah += $ib->jumlah;
                                                            }
                                                        }
                                                        echo $varjumlah; ?></h6>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div><!-- End Customers Card -->

                                    <!-- Sales Card -->
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="card info-card sales-card">



                                            <div class="card-body">
                                                <h5 class="card-title">Jumlah <span>| Aset Peralatan </span></h5>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="bi bi-camera"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6><?php $varjumlah = 0;
                                                        foreach ($inputbarang as $ib) {
                                                            if ($ib->jenis_asets_id == 3) {
                                                                $varjumlah += $ib->jumlah;
                                                            }
                                                        }
                                                        echo $varjumlah; ?></h6>



                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- End Sales Card -->

                                    <!-- Revenue Card -->
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="card info-card revenue-card">



                                            <div class="card-body">
                                                <h5 class="card-title">Jumlah <span>| Perlengkapan </span></h5>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="bi bi-pen"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6><?php $varjumlah = 0;
                                                        foreach ($inputbarang as $ib) {
                                                            if ($ib->jenis_asets_id == 4) {
                                                                $varjumlah += $ib->jumlah;
                                                            }
                                                        }
                                                        echo $varjumlah; ?></h6>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- End Revenue Card -->

                                    <!-- Customers Card -->
                                    <div class="col-xxl-4 col-xl-12">

                                        <div class="card info-card customers-card">



                                            <div class="card-body">
                                                <h5 class="card-title">Jumlah <span>| Dipinjam </span></h5>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="bi bi-cart"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6><?php $varjumlah = 0;
                                                        foreach ($peminjaman as $ib) {
                                                            if ($ib->status_peminjamans_id == 2) {
                                                                $varjumlah += $ib->jumlah_pinjam;
                                                            }
                                                        }
                                                        echo $varjumlah; ?></h6>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div><!-- End Customers Card -->

                                    <!-- Sales Card -->
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="card info-card sales-card">



                                            <div class="card-body">
                                                <h5 class="card-title">Jumlah <span>| Dikembalian</span></h5>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="bi bi-camera"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6><?php $varjumlah = 0;
                                                        foreach ($peminjaman as $ib) {
                                                            if ($ib->status_peminjamans_id == 3) {
                                                                $varjumlah += $ib->jumlah_pinjam;
                                                            }
                                                        }
                                                        echo $varjumlah; ?></h6>




                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- End Sales Card -->

                                    <!-- Revenue Card -->
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="card info-card revenue-card">



                                            <div class="card-body">
                                                <h5 class="card-title">Jumlah <span>| Perlengkapan </span></h5>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="bi bi-pen"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6><?php $varjumlah = 0;
                                                        foreach ($inputbarang as $ib) {
                                                            if ($ib->jenis_asets_id == 4) {
                                                                $varjumlah += $ib->jumlah;
                                                            }
                                                        }
                                                        echo $varjumlah; ?></h6>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- End Revenue Card -->

                                    <!-- Customers Card -->
                                    <div class="col-xxl-4 col-xl-12">

                                        <div class="card info-card customers-card">



                                            <div class="card-body">
                                                <h5 class="card-title">Jumlah <span>| Dipinjam </span></h5>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="bi bi-cart"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6><?php $varjumlah = 0;
                                                        foreach ($peminjaman as $ib) {
                                                            if ($ib->status_peminjamans_id == 2) {
                                                                $varjumlah += $ib->jumlah_pinjam;
                                                            }
                                                        }
                                                        echo $varjumlah; ?></h6>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div><!-- End Customers Card -->







                                </div>
                            </div><!-- End Left side columns -->

                            <!-- Right side columns -->
                            <div class="col-lg-4">

                                <!-- Recent Activity -->
                                <div class="card">
                                    <div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>

                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                                        <div class="activity">

                                            <div class="activity-item d-flex">
                                                <div class="activite-label">32 min</div>
                                                <i
                                                    class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                                <div class="activity-content">
                                                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo
                                                        officiis</a> beatae
                                                </div>
                                            </div><!-- End activity item-->

                                            <div class="activity-item d-flex">
                                                <div class="activite-label">56 min</div>
                                                <i
                                                    class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                                <div class="activity-content">
                                                    Voluptatem blanditiis blanditiis eveniet
                                                </div>
                                            </div><!-- End activity item-->

                                            <div class="activity-item d-flex">
                                                <div class="activite-label">2 hrs</div>
                                                <i
                                                    class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                                <div class="activity-content">
                                                    Voluptates corrupti molestias voluptatem
                                                </div>
                                            </div><!-- End activity item-->

                                            <div class="activity-item d-flex">
                                                <div class="activite-label">1 day</div>
                                                <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                                <div class="activity-content">
                                                    Tempore autem saepe <a href="#"
                                                        class="fw-bold text-dark">occaecati voluptatem</a> tempore
                                                </div>
                                            </div><!-- End activity item-->

                                            <div class="activity-item d-flex">
                                                <div class="activite-label">2 days</div>
                                                <i
                                                    class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                                <div class="activity-content">
                                                    Est sit eum reiciendis exercitationem
                                                </div>
                                            </div><!-- End activity item-->

                                            <div class="activity-item d-flex">
                                                <div class="activite-label">4 weeks</div>
                                                <i
                                                    class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                                <div class="activity-content">
                                                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                                </div>
                                            </div><!-- End activity item-->

                                        </div>

                                    </div>
                                </div><!-- End Recent Activity -->







                            </div><!-- End Right side columns -->

                        </div>
                    </section>

    </main><!-- End #main -->



    </div>
    </div>

    </div>
    </div>
    </section>
@endsection
