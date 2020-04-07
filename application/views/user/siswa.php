<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Siswa
    </div>

    <?= $this->session->flashdata('message'); ?>

    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>NO</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($siswa as $swa) : ?>
            <tr>
                <td width="20px"><?= $no++ ?></td>
                <td><?= $swa['nama_lengkap']; ?></td>
                <td><?= $swa['alamat']; ?></td>

                <td width="20px"><?= anchor('siswa/detail/' . $swa['id'], '<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'); ?>
                <td width="20px"><?= anchor('siswa/update/' . $swa['id'], '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?>
                <td width="20px"><?= anchor('siswa/delete/' . $swa['id'], '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'); ?>
            </tr>
        <?php endforeach; ?>
    </table>

    <?= anchor('siswa/tambah_siswa', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus" fa-sm></i> Tambah Siswa</button>'); ?>

</div>