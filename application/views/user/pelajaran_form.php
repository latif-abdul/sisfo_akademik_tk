<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form input pelajaran
    </div>

    <form method="post" action="<?= base_url('pelajaran/tambah_pelajaran_aksi'); ?>">
        <div class="form-group">
            <label>Kode Pelajaran</label>
            <input type="text" name="kode_pelajaran" class="form-control">
            <?= form_error('kode_pelajaran', '<div class="text-danger small ml-3">'); ?>
        </div>

        <div class="form-group">
            <label>Nama Pelajaran</label>
            <input type="text" name="nama_pelajaran" class="form-control">
            <?= form_error('nama_pelajaran', '<div class="text-danger small ml-3">'); ?>
        </div>

        <div class="form-group">
            <label>Semester</label>
            <select name="semester" class="form-control">
                <option>1</option>
                <option>2</option>
            </select>
        </div>

        <div class="form-group">
            <label>Kelas</label>
            <select name="kelas" class="form-control">
                <option>-- Pilih Kelas --</option>
                <option value="TK A">TK A</option>
                <option value=">TK B">TK B</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->

    <!-- <?= anchor('kelas/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus" fa-sm></i> Tambah Kelas</button>') ?> -->
</div>