<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="far fa-edit"></i> Form Edit Pelajaran
    </div>

    <?php foreach($pelajaran as $pl) : ?>

        <form method="post" action="<?= base_url();?>pelajaran/update_aksi/<?= $pl['kode_pelajaran']; ?> ">

            <div class="form-group">
                <label>Nama Pelajaran</label>
                <input type="hidden" name="nama_pelajaran" class="form-control">
                <input type="text" name="nama_pelajaran" class="form-control" value="<?= $pl['nama_pelajaran']; ?>">
            </div>

            <div class="form-group">
                <label>Semester</label>
                <select name="semester" class="form-control">
                    <option><?= $pl['semester']; ?></option>
                    <option>1</option>
                    <option>2</option>
                </select>
            </div>

            <div class="form-group">
                <label>Kelas</label>
                <select name="nama_kelas" class="form-control">
                    <option><?= $pl['nama_kelas']; ?></option>
                    <option>TK A</option>
                    <option>TK B</option>
                </select>
            </div>

            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
        </form>
    <?php endforeach;?>
</div>