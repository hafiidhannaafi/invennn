@extends('layouts.master')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        console.log('sdhjfdskfsdfjsdjfksd');
        $("#tgl_pinjam").change(function() {
            console.log('sdfkjndipjgodkgdfgjdfgsdhjfdskfsdfjsdjfksd');
        });
    </script>

    <script>
        $(function() {
            $(document).on('click', '.btn-add', function(e) {
                e.preventDefault();
                var controlForm = $(this).closest('.fvrduplicate'),
                    currentEntry = $(this).parents('.entry:first'),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);


                newEntry.find('input').val('');

                controlForm.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<i class="fa fa-minus" aria-hidden="true">-</i>');

            }).on('click', '.btn-remove', function(e) {
                $(this).closest('.entry').remove();
                return false;
            });

            $('#tgl_pinjam').on('input', function() {
                $('#tgl_kembali').attr('min', this.value);
            });
            $('#tgl_kembali').on('input', function() {
                $('#tgl_pinjam').attr('max', this.value);
            });
        });
    </script>


    <script>
        $(function() {
            $('.selectpicker').selectpicker();
        });
    </script>



    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="select_jenisbarang"]').on('change', function() {
                var jenisbarangID = $(this).val();
                const PeminjamanForm = $('select[name="barangs_id[]"]');

                PeminjamanForm.val(null);
                $('select[name="barangs_id[]"]').html('<option value="">semua barang</option>');
                if (jenisbarangID) {
                    $.ajax({
                        url: '/barang/select/' + jenisbarangID,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {

                            $.each(data, function(key, value) {
                                PeminjamanForm.append('<option value="' + value.id +
                                    '">' +
                                    value.nama_barang + '</option>');
                            });


                        }
                    });
                }
            });
        });
    </script> --}}





    <style>
        input[type="date"] {
            position: relative;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: auto;
            height: auto;
            color: transparent;
            background: transparent;
        }
    </style>

    <main id="main" class="main">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center pb-0 fs-5">Formulir Peminjaman Barang</h5></br>

                <!-- validation Form Elements -->

                <form name="PeminjamanForm" action="{{ route('inputpeminjaman') }}" method="POST"
                    enctype="multipart/form-data" class=" needs-validation" novalidate>
                    @csrf

                    <div class="row mb-3">
                        {{-- <label for="validationCustom01" class="col-sm-2 col-form-label">Nama login</label> --}}
                        <div class="col-sm-10">


                            <input type="hidden" id="validationCustom01" name="users_id"
                                value=" {{ auth()->user()->id }}" class="form-control" required readonly>


                            <div class="invalid-feedback">
                                Harus di isi
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="validationCustom01" class="col-sm-2 col-form-label">Nama Peminjam</label>
                        <div class="col-sm-10">
                            <input type="text" id="validationCustom01" name="nama_peminjam"
                                value=" {{ auth()->user()->name }}" readonly class="form-control" required
                                placeholder=" nama peminjam">
                            <div class="invalid-feedback">
                                Harus di isi
                            </div>
                        </div>
                    </div>




                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Jenis Peminjaman</legend>
                        <div class="col-sm-10">

                            <input class="form-check-input" type="radio" name="jenis_peminjaman" name="gridRadios"
                                id="gridRadios1" value="Pribadi" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Pribadi
                            </label>
                            <input class="form-check-input" type="radio" name="jenis_peminjaman" name="gridRadios"
                                id="gridRadios2" value="Keperluan Projek">
                            <label class="form-check-label" for="gridRadios2">
                                Keperluan Projek
                            </label>
                        </div>
                    </fieldset>

                    {{-- <select class="selectpicker" data-live-search="true">
                        <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                        <option data-tokens="mustard">Burger, Shake and a Smile</option>
                        <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                    </select> --}}


                    <div class="row mb-3">
                        <label for="validationTooltip02" class="col-sm-2 col-form-label"> Tujuan Pinjam </label>
                        <div class="col-sm-10">
                            <input type="text" id="validationTooltip02" name="tujuan" class="form-control" required
                                placeholder=" ex. untuk keperluan proyek A, untuk mengantar keluarga">
                            <div class="invalid-feedback">
                                Harus di isi
                            </div>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="validationTooltip05" class="col-sm-2 col-form-label">Tgl Pengajuan</label>
                        <div class="col-sm-10">
                            <input type="date" id="tgl_pengajuan" name="tgl_pengajuan" value="<?php echo date('Y-m-d'); ?>"
                                readonly class="form-control" required>
                            <div class="invalid-feedback">
                                Harus di isi
                            </div>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="validationTooltip05" class="col-sm-2 col-form-label">Tgl Peminjaman</label>
                        <div class="col-sm-10">
                            <input type="date" id="tgl_pinjam" name="tgl_pinjam" class="form-control" required>
                            <div class="invalid-feedback">
                                Harus di isi
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="validationTooltip05" class="col-sm-2 col-form-label">Tgl Pengembalian</label>
                        <div class="col-sm-10">
                            <input type="date" id="tgl_kembali" name="tgl_kembali" class="form-control" required>
                            <div class="invalid-feedback">
                                Harus di isi
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="validationTooltip03" class="col-sm-2 col-form-label">Surat Pengantar</label>
                        <div class="col-sm-10">
                            <input type="file" id="validationTooltip03" name="surat_pinjam" class="form-control"required>
                            <div class="invalid-feedback">
                                Harus di isi
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="validationTooltip04" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" id="validationTooltip04" name="ket" class="form-control"required
                                placeholder=" isi jika diperlukan">
                            <div class="invalid-feedback">
                                Harus di isi
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        {{-- <label for="validationTooltip04" class="col-sm-2 col-form-label">Status Konfirmasi</label> --}}
                        <div class="col-sm-10">
                            <input type="hidden" id="validationTooltip04" value="4" name="status_konfirmasis_id"
                                class="form-control"required>
                            <div class="invalid-feedback">
                                Harus di isi
                            </div>
                        </div>
                    </div>


                    <div class="row mb-3">
                        {{-- <label for="validationTooltip04" class="col-sm-2 col-form-label">Status Peminjaman</label> --}}
                        <div class="col-sm-10">
                            <input type="hidden" id="validationTooltip04" value="1" name="status_peminjamans_id"
                                class="form-control"required>
                            <div class="invalid-feedback">
                                Harus di isi
                            </div>
                        </div>
                    </div>

                    <div class="row g-3 mt-3 border-top pt-2">
                        <div class="row targetDiv" id="div0">
                            <div id="group1" class="fvrduplicate">
                                <label for="validationTooltip06" style="float: center; " col-sm-6
                                    col-form-label>Peminjaman
                                    Barang</label>


                                <p class="small fst-italic">note : <br>- tekan tombol + jika
                                    barang yang dipinjam lebih dari 1. <br>
                                    - khusus kendaraan, mesin, dan elektronik max
                                    pinjam 1 item
                                    per barang </p>



                                <div class="row entry my-2">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            {{-- <select class="form-control selectpicker" id="select-country lstFruits" multiple="multiple" data-live-search="true" name="barangs_id" id="validationTooltip06" aria-label="Default select example"> --}}
                                            <select class="form-control selectpicker" data-live-search="true"
                                                name="barangs_id[]" id="barangs_id[]"
                                                aria-label="Default select example">

                                                {{-- <select class="form-select" name="barangs_id" id="validationTooltip06" aria-label="Default select example"> --}}
                                                <option selected>Pilih Nama Barang</option>

                                                @foreach ($inputbarang as $data)
                                                    @if (($data->jenis_asets_id == 1 || $data->jenis_asets_id == 3 || $data->jenis_asets_id == 4) &&
                                                        $data->jumlah > 0)
                                                        <option value="{{ $data->id }}"> {{ $data->kode }} -
                                                            {{ $data->jenis_barangs->jenis_barang }}
                                                            {{ $data->spesifikasi }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <input class="form-control form-control" value=" "
                                            id="jumlah_pinjam[] "name="jumlah_pinjam[]" type="number"
                                            placeholder=" jumlah item ">
                                    </div>



                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-success btn-sm btn-add">
                                            <i class="fa fa-plus" aria-hidden="true">+</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- <div class="row g-3 mt-3 border-top pt-2">
                        <div class="row targetDiv" id="div0">
                            <div id="group1" class="fvrduplicate">
                                <label for="validationTooltip06" class="col-sm-6 col-form-label">Barang Pinjam 2</label>
                                <h6 for="validationTooltip06" class="col-sm-6 col-form-label">( tekan tombol + jika
                                    barang yang dipinjam lebih dari 1)</h6>


                                <div class="form-group form-floating-label">
                                    <label>Jenis Barang</label>
                                    <select name="select_jenisbarang" class="form-control input-lg dynamic"
                                        id="select_jenisbarang">
                                        <option value=""></option>
                                        @foreach ($jenisbarang as $data)
                                            <option value="{{ $data->id }}">{{ $data->jenis_barang }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row entry my-2">
                                    <div class="col-md-5">
                                        <div class="form-group">

                                            <select class="form-control selectpicker" data-live-search="true"
                                                name="barangs_id[]" id="barangs_id[]"
                                                aria-label="Default select example">

                                                <option selected>Pilih Nama Barang</option>

                                                @foreach ($inputbarang as $data)
                                                    @if (($data->jenis_asets_id == 1 || $data->jenis_asets_id == 3 || $data->jenis_asets_id == 4) && $data->jumlah > 0)
                                                        <option value="{{ $data->id }}"> {{ $data->kode }} -
                                                            {{ $data->jenis_barangs->jenis_barang }}
                                                            {{ $data->spesifikasi }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <input class="form-control form-control" name="jumlah_pinjam[]" type="number"
                                            placeholder=" jumlah item">
                                    </div>

                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-success btn-sm btn-add">
                                            <i class="fa fa-plus" aria-hidden="true">+</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}







                    <div class="card-footer">
                        <button style=" float :right; background-color:   #012970; color:#FFFFFF" type="submit"
                            class="btn btn btn-sm">Submit</button>
                    </div>
                </form><!-- End General Form Elements -->
            </div>


        </div>
    @endsection
