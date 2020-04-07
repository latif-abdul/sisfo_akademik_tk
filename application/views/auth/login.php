<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- CODE GAMBAR ANJINGNYA -->
                    <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h3 text-gray-900 mb-3"><b>Masuk untuk memulai</b></h1>
                                <h1 class="h6 text-gray-900 mb-6"><b>Masukan username dan password anda</b></h1>
                            </div>

                            <?= $this->session->flashdata('message'); ?>

                            <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" placeholder="Enter Email Address..." name="email" value="<?= set_value('email') ?>">

                                    <!-- PENAMBAHAN ALERT FORM VALIDASI ERROR UNTUK NAMA-->
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">

                                    <!-- PENAMBAHAN ALERT FORM VALIDASI ERROR UNTUK NAMA-->
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>