<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-eye"></i> Detail Siswa
    </div>

    <table class="table table-hover table-bordered table-striped">

        <?php
        foreach ($detail as $dt) : ?>

            <img class="mb-3" src="<?= base_url('assets/upload/') . $dt->photo; ?>" style="width: 25%">

            <tr>
                <td>Nis</td>
                <td><?= $dt->nis; ?></td>
            </tr>

            <tr>
                <td>Nama Lengkap</td>
                <td><?= $dt->nama_lengkap; ?></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><?= $dt->alamat; ?></td>
            </tr>

            <tr>
                <td>Telepon Ortu</td>
                <td><?= $dt->telepon_ortu; ?></td>
            </tr>

            <tr>
                <td>Tempat Lahir</td>
                <td><?= $dt->tempat_lahir; ?></td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td>
                <td><?= $dt->tanggal_lahir; ?></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td><?= $dt->jenis_kelamin; ?></td>
            </tr>

            <tr>
                <td>Nama Kelas</td>
                <td><?= $dt->nama_kelas; ?></td>
            </tr>

        <?php endforeach; ?>
    </table>
    <?= anchor('siswa', '<div class="btn btn-sm btn-primary">Kembali</div>'); ?><br><br><br><br>


</div>