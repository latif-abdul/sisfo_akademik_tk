<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="alert alert-success" role="alert"><i class="fas fa-tachometer-alt"></i>
        Dashboard
    </div>

    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Selamat datang <?= $user['name']; ?> !</h4>
        <p> Selamat datang <strong><?= $user['name']; ?></strong> di Sistem Informasi Akademik Taman Kanak-Kanak, Anda login sebagai <strong><?= $user['role_id']; ?></strong> </p>
        <hr>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-cogs"> Control Panel </i>
        </button>

    </div>

    <div class="card mb-3" style="max-width: 780px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['name']; ?></h5>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text"><small class="text-muted">Diperbarui sejak <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fas fa-cogs"> Control Panel </i></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- ROW PERTAMA -->

                    <div class="row">
                        <div class="col-md-3 text-info text-center">
                            <a href="<?= base_url() ?>">
                                <p class="nav-link">Siswa</p>
                                <i class="fas fa-2x fa-user-graduate"></i>
                            </a>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?= base_url() ?>">
                                <p class="nav-link">Tahun ajaran</p>
                                <i class="fas fa-2x fa-calendar-alt"></i>
                            </a>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?= base_url() ?>">
                                <p class="nav-link">Input nilai</p>
                                <i class="fas fa-2x fa-edit"></i>
                            </a>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?= base_url() ?>">
                                <p class="nav-link">Cetak transkrip</p>
                                <i class="fas fa-2x fa-file-alt"></i>
                            </a>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?= base_url() ?>">
                                <p class="nav-link">Guru</p>
                                <i class="fas fa-2x fa-smile"></i>
                            </a>
                        </div>
                    </div>

                    <!-- ROW PERTAMA -->

                    <div class="row">
                        <div class="col-md-3 text-info text-center">
                            <a href="<?= base_url() ?>">
                                <p class="nav-link">Siswa</p>
                                <i class="fas fa-2x fa-user-graduate"></i>
                            </a>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?= base_url() ?>">
                                <p class="nav-link">Tahun ajaran</p>
                                <i class="fas fa-2x fa-calendar-alt"></i>
                            </a>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?= base_url() ?>">
                                <p class="nav-link">Input nilai</p>
                                <i class="fas fa-2x fa-edit"></i>
                            </a>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?= base_url() ?>">
                                <p class="nav-link">Cetak transkrip</p>
                                <i class="fas fa-2x fa-file-alt"></i>
                            </a>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <a href="<?= base_url() ?>">
                                <p class="nav-link">Guru</p>
                                <i class="fas fa-2x fa-smile"></i>
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->