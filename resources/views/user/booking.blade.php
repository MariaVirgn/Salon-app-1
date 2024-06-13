@extends('headerUser')
@section('container')
    <div class="container" style="margin-top: 15vh;">
        <div class="card" style="box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.333);">
            <div class="card-header">
                <h3 class="card-title">Status Pemesanan</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jasa</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody id="tBody" class="table-group-divider">
                            <tr>
                                <th scope="row">1</th>
                                <td>Didi</td>
                                <td>Potong Rambut</td>
                                <td>Diterima</td>
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
            
        });
    </script>
@endsection()
