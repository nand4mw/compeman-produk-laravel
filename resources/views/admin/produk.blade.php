@extends('layouts.template')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between">

                        <h4 class="fs-18 mb-4">Tabel Produk</h4>

                        <button class="text-white btn btn-primary mb-4 " data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Tambah Produk</button>

                        <div class="offcanvas offcanvas-end bg-white" data-bs-scroll="true" data-bs-backdrop="true"
                            tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel"
                            style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                            <div class="offcanvas-header bg-body-bg py-3 px-4 mb-4">
                                <h5 class="offcanvas-title fs-18" id="offcanvasScrollingLabel">Tambah Produk</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>

                            <form class="row g-3 needs-validation m-2" method="POST" enctype="multipart/form-data"
                                action="/produk">
                                @csrf
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label label">Nama Produk</label>
                                    <div class="position-relative">
                                        <input type="text" name="nama_produk" class="form-control h-58 ps-5"
                                            id="validationCustom01" placeholder="Nama Produk" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <i class="ri-user-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                            style="top: 13px !important;"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label label">Harga Produk</label>
                                    <div class="position-relative">
                                        <input type="text" name="harga_produk" class="form-control h-58 ps-5"
                                            id="validationCustom02" placeholder="Harga Produk" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <i class="ri-user-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                            style="top: 13px !important;"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label label">Jumlah Produk
                                    </label>
                                    <div class="position-relative">
                                        <input type="number" name="jumlah_produk" class="form-control h-58 ps-5"
                                            placeholder="Jumlah Produk" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <i class="ri-mail-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20"
                                            style="top: 13px !important;"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label">Gambar Produk</label>
                                        <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                                            <div class="product-upload">
                                                <label for="file-upload" class="file-upload mb-0">
                                                    <span
                                                        class="d-inline-block wh-110 bg-body-bg rounded-10 position-relative ">
                                                        <i class="ri-camera-line wh-38 bg-gray-div7 d-inline-block text-gray-light rounded-circle position-absolute bottom-0 end-0"
                                                            style="right: -10px !important; bottom: -10px !important;"></i>
                                                    </span>
                                                </label>
                                                <input name="gambar_produk" id="file-upload" type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary fw-semibold text-white py-2 px-3"
                                        type="submit">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="preview-tab-pane" role="tabpanel"
                            aria-labelledby="preview-tab" tabindex="0">
                            <div class="default-table-area members-list">
                                <div class="table-responsive">
                                    <table class="table align-middle" id="myTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Produk</th>
                                                <th scope="col">Harga Produk</th>
                                                <th scope="col">Banyak Produk</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($results as $item)
                                                <tr>
                                                    <td>
                                                        <span>
                                                            {{ $loop->iteration }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 lh-1">
                                                                    <img src="{{ asset('gambar-produk') }}/{{ $item->gambar_produk }}"
                                                                        class="wh-67 " alt="user">
                                                                </div>
                                                                <div class="flex-grow-1 ms-10">
                                                                    <h4 class="fw-semibold fs-16 mb-0">
                                                                        {{ $item->nama_produk }}</h4>
                                                                    <span class="text-gray-light">
                                                                        Copeman</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class=" bg-success bg-opacity-10 text-success fs-13 fw-semibold py-1 px-2 rounded-1">Rp.
                                                            {{ $item->harga_produk }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>{{ $item->jumlah_produk }}</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown action-opt">
                                                            <button class="btn bg p-0" type="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i data-feather="more-horizontal"></i>
                                                            </button>
                                                            <ul
                                                                class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:;">
                                                                        <i data-feather="link-2"></i>
                                                                        Detail
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:;">
                                                                        <i data-feather="edit-3"></i>
                                                                        Edit
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:;">
                                                                        <i data-feather="download"></i>
                                                                        Hapus
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="code-tab-pane" role="tabpanel" aria-labelledby="code-tab"
                            tabindex="0">
                            <button class="btn btn-outline-primary bg-white btn-sm copy-btn position-absolute top-0 end-0"
                                data-clipboard-target="#basicAlertsCode">
                                Copy
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
