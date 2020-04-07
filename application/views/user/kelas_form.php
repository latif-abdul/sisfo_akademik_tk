<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form input kelas
    </div>

    <form method="post" action="<?= base_url('kelas/input_aksi'); ?>">
        <div class="form-group">
            <label> Kode Kelas </label>
            <input type="text" name="kode_kelas" placeholder="Masukan Kode Kelas" class="form-control">
            <?= form_error('kode_kelas', '<div class = "text-danger small"> ml-3'); ?>
        </div>

        <div class="form-kelas">
            <label> Nama Kelas </label>
            <input type="text" name="nama_kelas" placeholder="Masukan Nama Kelas" class="form-control">
            <?= form_error('nama_kelas', '<div class = "text-danger small"> ml-3'); ?>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>