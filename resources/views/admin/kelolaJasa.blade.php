@extends('headerAdmin')
@section('container')
    <div class="container" style="margin-top: 15vh">
        <div class="card" style="box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.333);">
            <div class="card-header">
                <h3 class="card-title">Kelola Jasa</h3>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col">
                        <button class="btn btn-primary" data-bs-toggle='modal' data-bs-target='#modalInsert'>Tambah</button>
                    </div>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tBody" class="table-group-divider">

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Modal Insert-->
    <div class="modal fade" id="modalInsert" tabindex="-1" aria-labelledby="insertModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="insertModalLabel">Tambah Jasa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control mb-3" placeholder="Nama" id="nama">
                            <input type="text" class="form-control mb-3" placeholder="Harga" id="harga">
                            <input type="text" class="form-control mb-3" placeholder="Deskripsi" id="desc">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" onclick="insert()">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit-->
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
            read();
        });

        function read() {
            var html = "";
            $.get("{{ route('read_jasa') }}", {}, function(data, status) {
                for (let i = 0; i < data.length; i++) {
                    html += "<tr>"
                    html += "<td>" + data[i].id_jasa + "</td>"
                    html += "<td>" + data[i].nama_jasa + "</td>"
                    html += "<td>" + data[i].harga_jasa + "</td>"
                    html += "<td>" + data[i].deskripsi_jasa + "</td>"
                    html +=
                        "<td><button class='btn btn-warning' onclick='update("+data[i].id_jasa+")'>Edit</button> <button class='btn btn-danger'>Hapus</button></td>"
                    html += "</tr>"
                }
                $('#tBody').html(html);
            })
        }

        function insert() {            
            var nama = $('#nama').val();
            var harga = $('#harga').val();
            var desc = $('#desc').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('insert_jasa') }}",
                method: "POST", 
                data: {
                    'nama':nama,
                    'harga':harga,
                    'desc':desc
                },
                success: function(data, status) {                    
                    read();                    
                    $("#modalInsert").modal("hide");
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });       
        }

        function update(id) {
            $('#modalEdit').modal('show');

        }
    </script>
@endsection()
