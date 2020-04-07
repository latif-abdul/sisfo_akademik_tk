<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Pelajaran
    </div>

    <?= $this->session->flashdata('message'); ?>


    <table class="table table-bordered table-hover table-striped">

        <tr>
            <th>No</th>
            <th>Kode Pelajaran</th>
            <th>Nama Pelajaran</th>
            <th>Semester</th>
            <th>Kelas</th>

            <th colspan="2">Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($pelajaran as $pl) : ?>
            <tr>
                <td width="20px"><?= $no++; ?></td>
                <td><?= $pl->kode_pelajaran; ?></td>
                <td><?= $pl->nama_pelajaran; ?></td>
                <td><?= $pl->semester; ?></td>
                <td><?= $pl->kelas; ?></td>

                <td width="20px"><?= anchor('pelajaran/update/' . $pl->kode_pelajaran, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?>
                <td width="20px"><?= anchor('pelajaran/delete/' . $pl->kode_pelajaran, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'); ?>
            </tr>
        <?php endforeach; ?>

    </table>



    <?= anchor('pelajaran/tambah_pelajaran', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus" fa-sm></i> Tambah Pelajaran</button>'); ?>

</div>