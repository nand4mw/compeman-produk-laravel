@extends('layouts.template')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="fs-18 mb-4">Tabel Konsumen</h4>
                        <a href="/konsumen/tambah" class="text-white btn btn-primary mb-4 ">Tambah Konsumen</a>
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
                                                <th scope="col" class="text-primary">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value
                                                            id="flexCheckDefault">
                                                        <label class="form-check-label ms-2"
                                                            for="flexCheckDefault">Name</label>
                                                    </div>
                                                </th>
                                                <th scope="col">Alamat Konsumen</th>
                                                <th scope="col">Nomer Telepon</th>
                                                <th scope="col">Status Pembelian</th>
                                                <th scope="col">Tanggal Pembelian</th>
                                                <th scope="col">Tanggal Pengirim</th>
                                                <th scope="col">Produk dibeli</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($konsumens as $item)
                                                <tr>
                                                    <td>
                                                        <span>{{ $loop->iteration }}</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 lh-1">
                                                                    <img src="assets/images/user-34.jpg"
                                                                        class="wh-44 rounded-circle" alt="user">
                                                                </div>
                                                                <div class="flex-grow-1 ms-10">
                                                                    <h4 class="fw-semibold fs-16 mb-0">
                                                                        {{ $item->nama_konsumen }}
                                                                    </h4>
                                                                    {{-- <span class="text-gray-light">@annenelson</span> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>{{ $item->alamat_konsumen }}</span>
                                                    </td>
                                                    <td>
                                                        <span>{{ $item->nomer_telepon }}</span>
                                                    </td>
                                                    <td>
                                                        @if ($item->status_pembelian == 'dikirim')
                                                            <button type="button"
                                                                class=" bg-success bg-opacity-10 text-success fs-13 fw-semibold py-1 px-2 rounded-1 border-0"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#modalkirim{{ $item->id_konsumen }}">
                                                                goods shipped
                                                            </button>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="modalkirim{{ $item->id_konsumen }}"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h1 class="modal-title fs-5"
                                                                                id="exampleModalLabel">Modal Kirim</h1>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Hello Modal Center {{ $item->id_konsumen }}
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-danger text-white"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <button type="button"
                                                                                class="btn btn-primary text-white">Gagalkan
                                                                                Pengeriman</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @elseif ($item->status_pembelian == 'belum_dikirim')
                                                            <button type="button"
                                                                class=" bg-danger bg-opacity-10 text-danger fs-13 fw-semibold py-1 px-2 rounded-1 border-0"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#modalBelumDikirim{{ $item->id_konsumen }}">
                                                                goods not shipped
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade"
                                                                id="modalBelumDikirim{{ $item->id_konsumen }}"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h1 class="modal-title fs-5"
                                                                                id="exampleModalLabel">Modal Belum Dikirim
                                                                            </h1>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Hello Modal Center {{ $item->id_konsumen }}

                                                                            <input type="text" name="status_pembelian"
                                                                                value="dikirim">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-danger text-white"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <a href="/konsumen/{{ $item->id_konsumen }}/apikey"
                                                                                class="btn btn-primary text-white">Kirim
                                                                                Pesanan
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <span>{{ $item->tanggal_pembelian }}</span>
                                                    </td>
                                                    <td>
                                                        <span>{{ $item->tanggal_pengirim }}</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            value="{{ $item->id_produk }}">{{ $item->nama_produk }}</span>
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
                                                                        <i data-feather="share-2"></i>
                                                                        Share
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:;">
                                                                        <i data-feather="link-2"></i>
                                                                        Get Sharable Link
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:;">
                                                                        <i data-feather="edit-3"></i>
                                                                        Rename
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:;">
                                                                        <i data-feather="download"></i>
                                                                        Download
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:;">
                                                                        <i data-feather="trash-2"></i>
                                                                        Remove
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
