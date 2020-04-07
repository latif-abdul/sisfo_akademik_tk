<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Kelas
    </div>

    <?= $this->session->flashdata('message'); ?>



    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>Kode Kelas</th>
            <th>Nama Kelas</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($kelas as $kls) : ?>
            <tr>
                <td width="20px"><?= $no++ ?></td>
                <td><?= $kls['kode_kelas']; ?></td>
                <td><?= $kls['nama_kelas']; ?></td>
                <td width="20px"><?= anchor('kelas/update/' . $kls['id_kelas'], '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?>
                <td width="20px"><?= anchor('kelas/delete/' . $kls['id_kelas'], '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'); ?>
            </tr>
        <?php endforeach ?>
        <tr>
        </tr>
    </table>

    <?= anchor('kelas/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus" fa-sm></i> Tambah Kelas</button>') ?>

</div>