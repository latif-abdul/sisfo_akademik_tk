<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-edit"></i> Form Update Tahun Ajaran
    </div>

    <?php foreach ($tahun_ajaran as $ta) : ?>

        <form method="post" action="<?= base_url('tahun_ajaran/update_aksi'); ?>">
            <div class="form-group">
                <label>Tahun Ajaran</label>
                <input type="hidden" name="id" class="form-control" value="<?= $ta->id;  ?>">
                <input type="text" name="tahun_ajaran" class="form-control" value="<?= $ta->tahun_ajaran; ?>">
            </div>

            <div class="form-group">
                <label>Semester</label>
                <select name="semester" class="form-control">
                    <option><?= $ta->semester; ?></option>
                    <!-- <option>Ganjil</option> -->
                    <option>Genap</option>
                </select>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option><?= $ta->status; ?></option>
                    <!-- <option>Aktif</option> -->
                    <option>Tidak Aktif</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>

        </form>

    <?php endforeach; ?>

</div>