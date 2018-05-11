<html>
    <head>

    </head>
    <body>
    <center><h1>Pendaftar Reseller</h1></center>
    <center><?php echo anchor('reseller/daftar', 'Tambah Data'); ?></center>
    <table style="margin:20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>Tipe</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Gender</th>
            <th>DoB</th>
            <th>Pekerjaan</th>
            <th>Kota</th>
            <th>Coba</th>
            <th>Sumber</th>
            <th>Alasan</th>
            <th>WhatsApp</th>
            <th>LINE</th>
            <th>Instagram</th>
            <th>Waktu Daftar</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($reseller as $r) {
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $r->tipe ?></td>
                <td><?php echo $r->nama ?></td>
                <td><?php echo $r->email ?></td>
                <td><center><?php echo $r->gender ?></center></td>
                <td><?php echo date("d/m/Y", strtotime($r->dob)) ?></td>
                <td><?php echo $r->job ?></td>
                <td><?php echo $r->kota ?></td>
                <td><center><?php echo $r->coba ?></center></td>
                <td><?php echo $r->sumber ?></td>
                <td><?php echo $r->alasan ?></td>
                <td><?php echo $r->whatsapp ?></td>
                <td><?php echo $r->line ?></td>
                <td><?php echo $r->instagram ?></td>
                <td><?php echo $r->waktu_daftar ?></td>
                <td>
                <?php echo anchor('reseller/edit/' . $r->id, 'Edit'); ?>
                <?php echo anchor('reseller/hapus/' . $r->id, 'Hapus'); ?>
                </td>
            </tr>
<?php } ?>
</table>
</body>
</html>