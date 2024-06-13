@extends('headerAdmin')
@section('container')
    <div class="container" style="margin-top: 15vh;">
        <div class="card" style="box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.333);">
            <div class="card-header">
                <h3 class="card-title">Riwayat Booking</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nomor</th>
                            </tr>
                        </thead>
                        <tbody id="tBody" class="table-group-divider">
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>

                            </tr>
                        
                        </tbody>
                    </table>
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
            $.get("{{ route('getRiwayat') }}", {}, function(data, status) {
                console.log(data);
                // for (let i = 0; i < data.length; i++) {
                //     html += "<tr>"
                //     html += "<td>" + data[i].id_jasa + "</td>"
                //     html += "<td>" + data[i].nama_jasa + "</td>"
                //     html += "<td>" + data[i].harga_jasa + "</td>"
                //     html +=
                //         "<td><button class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#modalEdit'>Edit</button> <button class='btn btn-danger'>Hapus</button></td>"
                //     html += "</tr>"
                // }
                $('#tBody').html(html);
            })
        }
    </script>
@endsection()
