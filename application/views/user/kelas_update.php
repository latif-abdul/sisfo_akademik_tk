<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="far fa-edit"></i> Form Update Kelas
    </div>

    <?php foreach ($kelas as $kls) : ?>

        <form method="post" action="<?= base_url(); ?>kelas/update_aksi">

            <div class="form-group">
                <label>Kode Kelas</label>
                <input type="hidden" name="id_kelas" value="<?= $kls->id_kelas; ?>">
                <input class="form-control" type="text" name="kode_kelas" value="<?= $kls->kode_kelas; ?>">
            </div>

            <div class="form-group">
                <label>Nama Kelas</label>
                <input class="form-control" type="text" name="nama_kelas" value="<?= $kls->nama_kelas; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>


    <?php endforeach; ?>
</div>