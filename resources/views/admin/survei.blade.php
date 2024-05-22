<!-- resources/views/admin/create.blade.php -->
@extends('layout.template')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Hasil Survei</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
     
        <div class="card-body"> 
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-3">
                        <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus"></i> Tambah Survei</button>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-inline">
                            <label for="dataTable_length" class="mr-2">Show</label>
                            <select name="dataTable_length" id="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm mr-2">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <span>entries</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            
            

                <div class="table-responsive">
                    <table class="table table-bordered custom-table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="custom-header-bg">ID</th>
                                <th class="custom-header-bg">Judul</th>
                                <th class="custom-header-bg">jumlah responden</th>
                                <th class="custom-header-bg">Tindakan</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Judul</th>
                                <th>jumlah responden</th>
                                <th>Tindakan</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Survei Kepuasan Pelanggan</td>
                                <td>10</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal"><i class="fas fa-edit"></i> Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i> Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Modal Tambah -->
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addModalLabel">Tambah Survei</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Form tambah survei -->
                            <form>
                                <div class="form-group">
                                    <label for="addJudul">Judul:</label>
                                    <input type="text" class="form-control" id="addJudul">
                                </div>
                                <div class="form-group">
                                    <label for="addDeskripsi">Deskripsi:</label>
                                    <textarea class="form-control" id="addDeskripsi" rows="3"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Modal Edit -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Survei</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Form edit survei -->
                            <form>
                                <div class="form-group">
                                    <label for="editJudul">Judul:</label>
                                    <input type="text" class="form-control" id="editJudul">
                                </div>
                                <div class="form-group">
                                    <label for="editDeskripsi">Deskripsi:</label>
                                    <textarea class="form-control" id="editDeskripsi" rows="3"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Modal Delete -->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Hapus Survei</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Apakah Anda yakin ingin menghapus survei ini?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<!-- DataTables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

<script>
$(document).ready(function() {
    $('#dataTable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});
</script>

@endsection
