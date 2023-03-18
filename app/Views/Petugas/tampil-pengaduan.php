<?= $this->extend('/dashboard') ?>
<?= $this->section('content') ?>
<h2>Data Pengaduan Masyarakat</h2>
<p>Berikut ini data Pengaduan dari Masyarakat.</p>
<table class="table table-sm table-hovered">
<thead class="bg-info text-center">
<tr>
<th>No</th>
<th>Nik</th>
<th>Nama</th>
<th>Tanggal Masuk</th>
<th>Status</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php foreach($ListPengaduan as $key => $row): ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $row['nik'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['tgl_pengaduan'] ?></td>
                                <td><?= $row['status'] ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="/pengaduan/validasi/<?= $row['id_pengaduan']?>" class="btn btn-info btn-sm"><i class="far fa-edit"> Validasi </i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
</tbody>
</table>
<?= $this->endSection() ?>