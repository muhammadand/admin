@extends('layout.template')

@section('content')


   <!-- Begin Page Content -->
   <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Hasil Survei</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="container mt-5">
                <h2 class="mb-4">Jadwal Kegiatan</h2>
                <div class="row mb-3">
                  <div class="col">
                    <button class="btn btn-info" data-toggle="modal" data-target="#addEventModal"><i class="fas fa-plus"></i> Tambah Event</button>
                  </div>
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Waktu</th>
                      <th>Detail Kegiatan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>08:00 - 09:00</td>
                      <td>Sarapan Pagi</td>
                      <td>
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editEventModal"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>
                    <!-- Tambahkan baris untuk event lainnya di sini -->
                  </tbody>
                </table>
              </div>
            
              <!-- Modal Tambah Event -->
              <div class="modal fade" id="addEventModal" tabindex="-1" role="dialog" aria-labelledby="addEventModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="addEventModalLabel">Tambah Event</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <!-- Form tambah event -->
                      <form>
                        <div class="form-group">
                          <label for="eventTime">Waktu:</label>
                          <input type="text" class="form-control" id="eventTime">
                        </div>
                        <div class="form-group">
                          <label for="eventDetail">Detail Kegiatan:</label>
                          <input type="text" class="form-control" id="eventDetail">
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                      <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </div>
              </div>
            
              <!-- Modal Edit Event -->
              <div class="modal fade" id="editEventModal" tabindex="-1" role="dialog" aria-labelledby="editEventModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="editEventModalLabel">Edit Event</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <!-- Form edit event -->
                      <form>
                        <div class="form-group">
                          <label for="editEventTime">Waktu:</label>
                          <input type="text" class="form-control" id="editEventTime">
                        </div>
                        <div class="form-group">
                          <label for="editEventDetail">Detail Kegiatan:</label>
                          <input type="text" class="form-control" id="editEventDetail">
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
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container my-auto">
    <div class="copyright text-center my-auto">
        <span>Copyright &copy; Your Website 2020</span>
    </div>
</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
<div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    <a class="btn btn-primary" href="login.html">Logout</a>
</div>
</div>
</div>
</div>


@endsection