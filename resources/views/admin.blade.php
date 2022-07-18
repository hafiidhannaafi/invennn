@extends('layouts.master')
@section('content')
    <main id="main" class="main">

        <!-- Default Card -->
        <div class="card">
            <div class="card-body"><br>
                <center> <img src="admin/logo-lptp.png" class="card-img-bottom" style="width: 90px;" alt="...">
                    <center>
                        <h5 class="card-title text-center pb-0 fs-4">Selamat Datang {{ auth()->user()->name }}
                        </h5>
                        <h5 class="card-title">Sistem Informasi Inventaris Barang Lembaga Pengembangan Pedesaan
                            (LPTP) Surakarta</h5>
                        {{-- <h5 class="card-title"> Lembaga Pengembangan Pedesaan (LPTP) Surakarta</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
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
                                    <h5 class="card-title">Total Jumlah Barang<span> </span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6> @php
                                                $varjumlah = 0;
                                                foreach ($inputbarang as $ib) {
                                                    $varjumlah += $ib->jumlah;
                                                }
                                                echo $varjumlah;
                                            @endphp </h6>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Total Jumlah jenis Barang<span></span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>

                                                <?php
                                                
                                                $inputbarangs->count();
                                                ?></h6>

                                            <span class="text-success small pt-1 fw-bold">



                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->



                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">



                                <div class="card-body">
                                    <h5 class="card-title">Grafik Peminjaman <span> </span></h5>

                                    <!-- Bar Chart -->
                                    <canvas id="barChart" style="max-height: 400px;"></canvas>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new Chart(document.querySelector('#barChart'), {
                                                type: 'bar',
                                                data: {
                                                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                                    datasets: [{
                                                        label: 'Bar Chart',
                                                        data: [65, 59, 80, 81, 56, 55, 40],
                                                        backgroundColor: [
                                                            'rgba(255, 99, 132, 0.2)',
                                                            'rgba(255, 159, 64, 0.2)',
                                                            'rgba(255, 205, 86, 0.2)',
                                                            'rgba(75, 192, 192, 0.2)',
                                                            'rgba(54, 162, 235, 0.2)',
                                                            'rgba(153, 102, 255, 0.2)',
                                                            'rgba(201, 203, 207, 0.2)'
                                                        ],
                                                        borderColor: [
                                                            'rgb(255, 99, 132)',
                                                            'rgb(255, 159, 64)',
                                                            'rgb(255, 205, 86)',
                                                            'rgb(75, 192, 192)',
                                                            'rgb(54, 162, 235)',
                                                            'rgb(153, 102, 255)',
                                                            'rgb(201, 203, 207)'
                                                        ],
                                                        borderWidth: 1
                                                    }]
                                                },
                                                options: {
                                                    scales: {
                                                        y: {
                                                            beginAtZero: true
                                                        }
                                                    }
                                                }
                                            });
                                        });
                                    </script>
                                    <!-- End Bar CHart -->

                                </div>

                            </div>
                        </div><!-- End Reports -->


                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Recent Activity -->
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title"> Peraturan Admin<span></span></h5>

                            <div class="activity">

                                <div class="activity-item d-flex">
                                    <div class="activite-label">1. </div>

                                    <div class="activity-content">
                                        Admin dapat menambahkan akun admin baru dan kepala unit
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2. </div>

                                    <div class="activity-content">
                                        Menginput barang sesuai jenis aset barang tersebut
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">3. </div>

                                    <div class="activity-content">
                                        Menginput pencatatan barang keluar karena hilang atau rusak setelah ada pelaporan
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">4. </div>

                                    <div class="activity-content">
                                        Menverifikasi status apabila peminjam telah datang untuk
                                        pengambilan
                                        barang serta pengembalikan barang
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">5. </div>

                                    <div class="activity-content">
                                        Melakukan cetak laporan sesuai tanggal yang diinput
                                    </div>
                                </div><!-- End activity item-->



                            </div>

                        </div>
                    </div><!-- End Recent Activity -->





                </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->
@endsection
