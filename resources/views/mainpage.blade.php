@extends('master')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Timelime example  -->
            <div class="row">
                <div class="col-md-12">
                    <!-- The time line -->
                    <div class="timeline">
                        <!-- timeline time label -->
                        <div class="time-label">
                            <span class="bg-red">Linimasa Foto Anda</span>
                        </div>
                        <!-- /.timeline-label -->
                        <div>
                            <i class="fa fa-camera bg-purple"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-clock"></i>
                                    5 Hari Yang Laluu
                                </span>
                                <h3 class="timeline-header"><a href="#">Username | </a>Foto - foto
                                    terbaru anda</h3>
                                <div class="timeline-body">
                                    <img src="http" alt="">
                                    <img src="http" alt="">
                                    <img src="http" alt="">
                                    <img src="http" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- timeline time label -->
                        <div class="time-label">
                            <span class="bg-green"> 12 Januari 2000</span>
                        </div>
                        <!-- timeline item -->
                        <div>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-clock"></i>
                                    5 Hari Yang Lalu
                                </span>

                                <h3 class="timeline-header"><a href="">Judul Foto</a> |
                                    <a href="" class="btn btn-sm btn-warning" data-toggle="modal"
                                        data-target="#editfoto">Edit</a>

                                    <div class="modal fade" id="editfoto" z-index="30">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #FFA500">
                                                    <h4 class="modal-title">Edit Foto Anda</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                </div>
                                                <div class="modal-footer justify-content-between"
                                                    style="background-color: #FFA500">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-warning">Simpan</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    <a href="" class="btn btn-sm btn-danger" data-toggle="modal"
                                        data-target="#hapusfoto">Hapus</a>
                                </h3>

                                <div class="modal fade" id="hapusfoto" z-index="30">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: red">
                                                <h4 class="modal-title">Hapus Foto Anda</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                            </div>
                                            <div class="modal-footer justify-content-between" style="background-color: red">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </div>

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>

                                <div class="timeline-body">
                                    <img src="" alt="" class="img-fluid"
                                        width="250" height="150">
                                </div>
                                <div class="timeline-footer">
                                    <p>Deskripsi</p>
                                </div>
                            </div>
                        </div>
                        <!-- END timeline item -->

                        <div>
                            <i class="fas fa-clock bg-gray"></i>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.timeline -->

    </section>
    <!-- /.content -->
    {{-- </div> --}}
    <!-- /.content-wrapper -->
@endsection
