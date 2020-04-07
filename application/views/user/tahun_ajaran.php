<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Tahun Ajaran
    </div>

    <?= $this->session->flashdata('message'); ?>

    <table class="table table-hover table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>Tahun Ajaran</th>
            <th>Semester</th>
            <th>Status</th>
            <th colspan="2">Aksi</th>
        </tr>


        <?php
        $no = 1;
        foreach ($tahun_ajaran as $aj) : ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $aj['tahun_ajaran']; ?></td>
                <td><?= $aj['semester']; ?></td>
                <td><?= $aj['status']; ?></td>
                <td width="20px"><?= anchor('tahun_ajaran/update/' . $aj['id'], '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?>
                <td width="20px"><?= anchor('tahun_ajaran/delete/' . $aj['id'], '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'); ?>
            </tr>
        <?php endforeach; ?>
    </table>
    <?= anchor('tahun_ajaran/tambah_tahun_ajaran', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus" fa-sm></i> Tambah Tahun Ajaran</button>') ?>
</div>