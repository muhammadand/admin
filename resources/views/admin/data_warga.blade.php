
@extends('layout.template')

@section('content')


                  <!-- Begin Page Content -->
                  <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Warga</h1>

                 <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                    <div class="card-body">
                        




                        <div class="container mt-5">
                            <div class="text-right mb-3">
                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus"></i> Tambah</button>
                            </div>
                            <div class="table-responsive">
                              <table class="table table-bordered custom-table" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                  <tr>
                                    <th class="custom-header-bg">Name</th>
                                    <th class="custom-header-bg">Nik</th>
                                    <th class="custom-header-bg">Umur</th>
                                    <th class="custom-header-bg">Email</th>
                                    <th class="custom-header-bg">Action</th>
                                  </tr>
                                </thead>
                                <tfoot>
                                  <tr>
                                    <th>Name</th>
                                    <th>Nik</th>
                                    <th>Umur</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                  </tr>
                                </tfoot>
                                <tbody>
                                  <tr>
                                    <td>Tiger Nixon</td>
                                    <td>1234567890</td>
                                    <td>61</td>
                                    <td>Tiger@gmail.com</td>
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
                                  <h5 class="modal-title" id="addModalLabel">Tambah Data Warga</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <!-- Form tambah data warga -->
                                  <form>
                                    <div class="form-group">
                                      <label for="addName">Name:</label>
                                      <input type="text" class="form-control" id="addName">
                                    </div>
                                    <div class="form-group">
                                      <label for="addAlamat">Alamat:</label>
                                      <input type="text" class="form-control" id="addAlamat">
                                    </div>
                                    <div class="form-group">
                                      <label for="addNik">Nik:</label>
                                      <input type="text" class="form-control" id="addNik">
                                    </div>
                                    <div class="form-group">
                                      <label for="addUmur">Umur:</label>
                                      <input type="text" class="form-control" id="addUmur">
                                    </div>
                                    <div class="form-group">
                                      <label for="addIstri">Istri:</label>
                                      <input type="text" class="form-control" id="addIstri">
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
                          <div class="modal fade " id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Data Warga</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <!-- Form edit data warga -->
                                <form>
                                  <div class="form-group">
                                    <label for="editName">Name:</label>
                                    <input type="text" class="form-control" id="editName">
                                  </div>
                                  <div class="form-group">
                                    <label for="editAlamat">Alamat:</label>
                                    <input type="text" class="form-control" id="editAlamat">
                                  </div>
                                  <div class="form-group">
                                    <label for="editNik">Nik:</label>
                                    <input type="text" class="form-control" id="editNik">
                                  </div>
                                  <div class="form-group">
                                    <label for="editUmur">Umur:</label>
                                    <input type="text" class="form-control" id="editUmur">
                                  </div>
                                  <div class="form-group">
                                    <label for="editIstri">Istri:</label>
                                    <input type="text" class="form-control" id="editIstri">
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
                                <h5 class="modal-title" id="deleteModalLabel">Hapus Data Warga</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Apakah Anda yakin ingin menghapus data warga ini?
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