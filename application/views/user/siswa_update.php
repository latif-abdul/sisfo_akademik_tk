<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-eye"></i> Form Update Siswa
    </div>

    <?php foreach ($siswa as $swa) : ?>
        <?= form_open_multipart('siswa/update_siswa_aksi'); ?>

        <div class="form-group">
            <label>NIS Siswa</label>
            <input type="hidden" name="id" class="form-control" value="<?= $swa->id; ?>">
            <input type="text" name="nis" class="form-control" value="<?= $swa->nis; ?>">
            <?= form_error('nis', '<div class="text-danger ml-3">', '</div>'); ?>
        </div>

        <div class="form-group">
            <label>Nama Siswa</label>
            <input type="text" name="nama_lengkap" class="form-control" value="<?= $swa->nama_lengkap; ?>">
            <?= form_error('nama_lengkap', '<div class="text-danger ml-3">', '</div>'); ?>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?= $swa->alamat; ?>">
            <?= form_error('alamat', '<div class="text-danger ml-3">', '</div>'); ?>
        </div>

        <div class="form-group">
            <label>Telepon Orang Tua</label>
            <input type="text" name="telepon_ortu" class="form-control  value=" <?= $swa->telepon_ortu; ?>"">
            <?= form_error('telepon_ortu', '<div class="text-danger ml-3">', '</div>'); ?>
        </div>

        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" value="<?= $swa->tempat_lahir; ?>">
            <?= form_error('tempat_lahir', '<div class="text-danger ml-3" >', '</div>'); ?>
        </div>

        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="<?= $swa->tanggal_lahir; ?>">
            <?= form_error('tanggal_lahir', '<div class="text-danger ml-3">', '</div>'); ?>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" value="<?= $swa->jenis_kelamin; ?>">
                <option>Laki-Laki</option>
                <option>Perempuan</option>
            </select>
            <?= form_error('jenis_kelamin', '<div class="text-danger ml-3">', '</div>'); ?>
        </div>

        <div class="form-group">
            <label>Pilih Kelas</label>
            <select name="nama_kelas" class="form-control" value="<?= $swa->nama_kelas; ?>">

                <?php
                foreach ($kelas as $kls) : ?>
                    <option value="<?= $kls->nama_kelas ?>"><?= $kls->nama_kelas ?></option>
                <?php endforeach; ?>

            </select>
            <?= form_error('nama_kelas', '<div class="text-danger ml-3">', '</div>'); ?>
        </div>

        <div class="form-group">

            <?php foreach ($detail as $dt) : ?>
                <img src="<?= base_url() . 'assets/upload/' . $swa->photo; ?>">
            <?php endforeach; ?><br>
            <label>Foto</label><br>
            <input type="file" name="userfile" value="<?= $swa->photo; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>

        <? form_close(); ?>

    <?php endforeach; ?>
</div>