<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<h2>Penambahan Data User</h2>
<p>Silahkan gunakan form dibawah ini untuk mendata user baru.</p>
<form method="POST" action="/petugas/simpan">
<div class="form-group">
<label class="font-weight-bold">Username</label>
<input type="text" name="txtInputUser" class="form-control" placeholder="Masukan username" autocomplete="off" autofocus>
</div>
<div class="form-group">
<label class="font-weight-bold">Nama Lengkap</label>
<input type="text" name="txtInputNama" class="form-control" placeholder="Masukan nama lengkap petugas" autocomplete="off">
</div>
<div class="form-group">
<label class="font-weight-bold">Password</label>
<input type="password" name="txtInputPassword" class="form-control" placeholder="Masukan password petugas" autocomplete="off">
</div>
<div class="form-group">
<label class="font-weight-bold">No Telphone</label>
<input  type="tel" id="phone"  name="txtInputTlp" maxlength="13" class="form-control" placeholder="Masukan no telphone petugas" autocomplete="off">
</div>
<div class="form-group">
<label class="font-weight-bold">Level User</label>
<select name="selectLevel" class="form-control">
<option value="admin">Admin</option>
<option value="petugas">Petugas</option>
</select>
</div>
<div class="form-group">
<button class="btn btn-primary">Simpan User</button>
</div>
</form>
<?= $this->endSection() ?>