@extends('layouts.dashboard.app')
@section('content')
    <div class="row">
        <div class="position-relative mb-3 col-3">
            <input type="text" class="form-control search-chat py-2 ps-5" id="search-name" placeholder="Search">
            <i class="ti ti-search position-absolute top-50 translate-middle-y fs-6 text-dark ms-3"></i>
        </div>
        <div class="d-flex justify-content-end col-9">
            <button type="button" class="btn btn-info btn-rounded m-t-10 mb-3" data-bs-toggle="modal"
                data-bs-target="#modal-create">
                Tambah Product
            </button>
        </div>
    </div>
    <div class="table-responsive rounded-2 mb-4">
        <table class="table border text-nowrap customize-table mb-0 align-middle" id="table">
            <thead class="text-dark fs-4">
                <tr>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">No</h6>
                    </th>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Nama</h6>
                    </th>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Foto</h6>
                    </th>
                    <th>
                        <h6 class="fs-4 fw-semibold mb-0">Aksi</h6>
                    </th>
                </tr>
            </thead>
            <tbody id="data">
                @foreach ($products as $index => $product)
                    <tr>
                        <td>
                            <p class="fs-4 fw-semibold fs-2">{{ $index + 1 }}</p>
                        </td>
                        <td>
                            <p class="fs-4 fw-semibold fs-2">{{ $product->name }}</p>
                        </td>
                        <td>
                            <img src="{{ asset('storage/' . $product->photo) }}" style="width: 100px; border-radius: 5%" />
                        </td>
                        <td>
                            <div class="d-flex">
                                <a class="btn text-primary btn-sm btn-edit" data-bs-toggle="modal"
                                    data-bs-target="#modal-update" data-product-id="{{ $product->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="32"
                                        viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2">
                                            <path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1" />
                                            <path
                                                d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3l8.385-8.415zM16 5l3 3" />
                                        </g>
                                    </svg>
                                </a>
                                <form onsubmit="return confirm('Yakin Ingin Menghapus Data Ini?')" class="mt-1"
                                    method="POST" action="{{ route('dashboard-products.destroy', $product) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn-delete"
                                        style="background: transparent;border:transparent">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="32"
                                            viewBox="0 0 24 24">
                                            <path fill="#AA4A44"
                                                d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4z" />
                                        </svg>
                                    </button>
                                </form>
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div id="modal-create" class="modal fade" tabindex="-1" aria-labelledby="bs-example-modal-md" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="myModalLabel">
                        Tambah Product
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('dashboard-products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name">Nama Product</label>
                            <input type="text" name="name" class="form-control mt-2" id="create-task"
                                placeholder="Tambahkan Product" />
                            <ul class="error-text"></ul>
                        </div>
                        <div class="mb-3">
                            <label for="name">Foto Product</label>
                            <input type="file" name="photo" class="form-control mt-2" id="create-poin"
                                placeholder="Tambahkan Poin Untuk Tugas Ini" />
                            <ul class="error-text"></ul>
                        </div>
                        <div class="mb-3">
                            <label>Deskripsi</label>
                            <textarea class="form-control mt-2" rows="5" name="description"></textarea>
                            <ul class="error-text"></ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-danger text-danger font-medium" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-success">
                            Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div id="modal-update" class="modal fade" tabindex="-1" aria-labelledby="bs-example-modal-md" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="myModalLabel">
                        Update Product
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('dashboard-products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name">Nama Product</label>
                            <input type="text" name="name" class="form-control mt-2" id="create-task"
                                placeholder="Tambahkan Product" />
                            <ul class="error-text"></ul>
                        </div>
                        <div class="mb-3">
                            <label for="name">Foto Product</label>
                            <input type="file" name="photo" class="form-control mt-2" id="create-poin"
                                placeholder="Tambahkan Poin Untuk Tugas Ini" />
                            <ul class="error-text"></ul>
                        </div>
                        <div class="mb-3">
                            <label>Deskripsi</label>
                            <textarea class="form-control mt-2" rows="5" name="description"></textarea>
                            <ul class="error-text"></ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-danger text-danger font-medium"
                            data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-success">
                            Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#search-name").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#data tr").filter(function() {
                    var productName = $(this).find("td:nth-child(2)").text()
                        .toLowerCase()
                    $(this).toggle(productName.indexOf(value) > -1);
                });
            });
        });
    </script>
@endsection
