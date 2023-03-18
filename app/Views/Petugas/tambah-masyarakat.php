<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<h2>Penambahan Data Masyarakat</h2>
<p>Silahkan gunakan form dibawah ini untuk mendata Masyarakat baru.</p>
<form method="POST" action="/masyarakat/simpan">
<div class="form-group">
<label class="font-weight-bold">Nik</label>
<input type="text" name="txtInputNik" maxlength="16" class="form-control" placeholder="Masukan NIK" autocomplete="off" autofocus>
</div>
<div class="form-group">
<label class="font-weight-bold">Nama Lengkap</label>
<input type="text" name="txtInputNama" class="form-control" placeholder="Masukan nama lengkap" autocomplete="off">
</div>
<div class="form-group">
<label class="font-weight-bold">Username</label>
<input type="text" name="txtInputUser" class="form-control" placeholder="Masukan User" autocomplete="off">
</div>
<div class="form-group">
<label class="font-weight-bold">Password</label>
<input type="password" name="txtInputPassword" class="form-control" placeholder="Masukan password baru jika akan diganti" autocomplete="off">
</div>
<div class="form-group">
<label class="font-weight-bold">No Telphone</label>
<input  type="tel" id="phone"  name="txtInputTlp" maxlength="13" class="form-control" placeholder="Masukan no telphone" autocomplete="off">
</div>
<div class="form-group">
<button class="btn btn-primary">Simpan</button>

</div>
</form>
<?= $this->endSection() ?>