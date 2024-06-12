@extends('home')
@section('container')
    <div class="container" style="margin-top: 15vh">
        <div class="card" style="box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.333);">
            <div class="card-header">
                <h3 class="card-title">Kelola Jasa</h3>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col">
                        <button class="btn btn-primary">Tambah</button>
                    </div>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nomor</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tBody" class="table-group-divider">
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <button class="btn btn-sm btn-warning text-light" data-bs-toggle="modal"
                                data-bs-target="#modalEdit">Edit</button>
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        <!-- Modal -->
        <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Jasa</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control mb-3" placeholder="Nama" id="nama">
                                <input type="text" class="form-control mb-3" placeholder="Harga" id="harga">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </div>
        </div>
@endsection()

@section('scripts')
    <script>
        $(document).ready(function() {
            
        });
    </script>
@endsection()
