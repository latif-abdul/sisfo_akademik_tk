<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form input tahun ajaran
    </div>

    <form method="post" action="<?= base_url('tahun_ajaran/tambah_tahun_ajaran_aksi'); ?>">
        <div class="form-group">
            <label> Tahun Ajaran </label>
            <input type="text" name="tahun_ajaran" placeholder="Masukan Kode Kelas" class="form-control">
            <?= form_error('tahun_ajaran', '<div class = "text-danger small" ml-3>'); ?>
        </div>

        <div class="form-kelas">
            <label> Semester </label>
            <select name="semester" class="form-control">
                <option value="">-- Pilih Semester --</option>
                <option>Ganjil</option>
                <option>Genap</option>
            </select>
            <?= form_error('semester', '<div class = "text-danger small" ml-3>'); ?>
        </div>

        <div class="form-kelas">
            <label> Status </label>
            <select name="status" class="form-control">
                <option value="">-- Pilih Status --</option>
                <option>Aktif</option>
                <option>Tidak aktif</option>
            </select>
            <?= form_error('status', '<div class = "text-danger small" ml-3>'); ?>
        </div><br>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>