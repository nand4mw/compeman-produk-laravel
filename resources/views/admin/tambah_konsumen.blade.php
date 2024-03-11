@extends('layouts.template')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <form action="/konsumen/tambah" method="post" novalidate>
                        @csrf
                        <div class="d-flex align-items-center justify-content-between">

                            <h4 class="fs-18 mb-4">Tambah Konsumen</h4>
                            <div class="">
                                <button class="btn btn-primary text-white"> Simpan</button>
                                <a href="/konsumen" class="btn btn-success text-white"> Kembali</a>
                            </div>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="preview-tab-pane" role="tabpanel"
                                aria-labelledby="preview-tab" tabindex="0">
                                <div class="row g-3 needs-validation" novalidate>
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label label">Nama Konsumen</label>
                                        <div class="position-relative">
                                            <input type="text" name="nama_konsumen" class="form-control h-58 ps-5"
                                                id="validationCustom01" placeholder="Nama Konsumen" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <i class="ri-user-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                                style="top: 13px !important;"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom02" class="form-label label">Alamat Konsumen</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control h-58 ps-5" id="validationCustom02"
                                                placeholder="Alamat Konsumen" name="alamat_konsumen" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <i class="ri-user-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                                style="top: 13px !important;"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom06" class="form-label label">Nama Produk</label>
                                        <div class="position-relative">
                                            <select name="id_produk" class="form-select form-control h-58 ps-5"
                                                id="validationCustom06" required>
                                                <option selected disabled value>Pilih Nama Produk</option>
                                                @foreach ($produkAll as $item)
                                                    <option value="{{ $item->id_produk }}">{{ $item->nama_produk }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a valid Town/City.
                                            </div>
                                            <i class="ri-building-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                                style="top: 13px !important;"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom06" class="form-label label">Status Pembelian</label>
                                        <div class="position-relative">
                                            <select name="status_pembelian" class="form-select form-control h-58 ps-5"
                                                id="validationCustom06" required>
                                                <option selected disabled value>Pilih Status Pembayaran</option>
                                                <option value="belum_dikirim">Belum Dikirim</option>
                                                <option value="dikirim">Dikirim</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a valid Town/City.
                                            </div>
                                            <i class="ri-building-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                                style="top: 13px !important;"></i>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <label for="validationCustom04" class="form-label label">Nomer Telepon</label>
                                        <div class="position-relative">
                                            <input type="number" name="nomer_telepon"
                                                class="form-control h-58 ps-5 text-dark" id="validationCustom04"
                                                placeholder="+62 *** *** ***" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <i class="ri-phone-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                                style="top: 13px !important;"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom06" class="form-label label">Tanggal Pembelian</label>
                                        <div class="position-relative">
                                            <input type="date" name="tanggal_pembelian" class="form-control h-58 ps-5">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <i class="ri-user-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                                style="top: 13px !important;"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom07" class="form-label label">Tanggal Pengiriman</label>
                                        <div class="position-relative">
                                            <input type="date" name="tanggal_pengirim" class="form-control h-58 ps-5">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <i class="ri-user-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                                style="top: 13px !important;"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationCustom09" class="form-label label">Deskripsi
                                            :</label>
                                        <div class="position-relative">
                                            <textarea name="deskripsi" cols="30" rows="5" class="form-control ps-5 py-3" id="validationCustom09"
                                                placeholder="Deskripsi ..." required></textarea>
                                            <div class="invalid-feedback">
                                                Please provide a valid Notes.
                                            </div>
                                            <i class="ri-sticky-note-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                                style="top: 13px !important;"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
