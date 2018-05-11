<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1">

        <title>Edit Data</title>
    </head>
    <body>
    <center>
        <h1>Edit Data Mitra Jingchips</h1>
    </center>
    <?php
    foreach ($reseller as $r) {
        $hidden = array('id' => $r->id);
        ?>
        <?php echo form_open('reseller/update', '', $hidden); ?>
        <table style="margin:20px auto;">
            <tr>
                <td><?php echo form_label('Peluang usaha yang Anda inginkan ?'); ?></td>
                <td><?php
                    $tipe1 = FALSE;
                    $tipe2 = FALSE;
                    $tipe3 = FALSE;
                    switch ($r->tipe) {
                        case 'Prajurit': $tipe1 = TRUE;
                            break;
                        case 'Kapten': $tipe2 = TRUE;
                            break;
                        case 'Jendral': $tipe3 = TRUE;
                            break;
                    }
                    echo form_radio('tipe', 'Prajurit', $tipe1);
                    echo form_label('Prajurit');
                    ?><br><?php
                    echo form_radio('tipe', 'Kapten', $tipe2);
                    echo form_label('Kapten');
                    ?><br><?php
                    echo form_radio('tipe', 'Jendral', $tipe3);
                    echo form_label('Jendral');
                    ?>

                </td>
            </tr>
            <tr>
                <td><?php echo form_label('Nama Lengkap'); ?></td>
                <td><?php
                    $data_nama = array(
                        'name' => 'nama',
                        'placeholder' => 'Nama lengkap Anda'
                    );
                    echo form_input($data_nama, $r->nama);
                    echo form_error('nama');
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo form_label('Alamat Email'); ?></td>
                <td><?php
                    $data_email = array(
                        'type' => 'email',
                        'name' => 'email',
                        'placeholder' => 'Alamat Email Anda'
                    );
                    echo form_input($data_email, $r->email);
                    echo form_error('email');
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo form_label('Jenis Kelamin'); ?></td>
                <td><?php
                    $gender1 = FALSE;
                    $gender2 = FALSE;
                    switch ($r->gender) {
                        case 'L': $gender1 = TRUE;
                            break;
                        case 'P': $gender2 = TRUE;
                            break;
                    }
                    echo form_radio('gender', 'L', $gender1);
                    echo form_label('Laki-Laki');
                    ?><br><?php
                    echo form_radio('gender', 'P', $gender2);
                    echo form_label('Perempuan');
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo form_label('Tanggal Lahir'); ?></td>
                <td><?php
                    $data_dob = array(
                        'type' => 'date',
                        'name' => 'dob'
                    );
                    echo form_input($data_dob, $r->dob);
                    echo form_error('dob');
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo form_label('Pekerjaan Anda saat ini'); ?></td>
                <td><?php
                    $job1 = FALSE;
                    $job2 = FALSE;
                    $job3 = FALSE;
                    $job4 = FALSE;
                    $job5 = FALSE;
                    $job6 = FALSE;
                    switch ($r->job) {
                        case 'Pelajar': $job1 = TRUE;
                            break;
                        case 'Mahasiswa': $job2 = TRUE;
                            break;
                        case 'Karyawan': $job3 = TRUE;
                            break;
                        case 'Wirausaha': $job4 = TRUE;
                            break;
                        case 'Ibu Rumah Tangga': $job5 = TRUE;
                            break;
                        case 'Lainnya': $job6 = TRUE;
                            break;
                    }
                    echo form_radio('job', 'Pelajar', $job1);
                    echo form_label('Pelajar');
                    ?><br><?php
                    echo form_radio('job', 'Mahasiswa', $job2);
                    echo form_label('Mahasiswa');
                    ?><br><?php
                    echo form_radio('job', 'Karyawan', $job3);
                    echo form_label('Karyawan');
                    ?><br><?php
                    echo form_radio('job', 'Wirausaha', $job4);
                    echo form_label('Wirausaha');
                    ?><br><?php
                    echo form_radio('job', 'Ibu Rumah Tangga', $job5);
                    echo form_label('Ibu Rumah Tangga');
                    ?><br><?php
                    echo form_radio('job', 'Lainnya', $job6);
                    echo form_label('Lainnya');
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo form_label('Di kota mana Anda tinggal saat ini ?'); ?></td>
                <td><?php
                    $data_kota = array(
                        'name' => 'kota',
                        'placeholder' => 'Kota lokasi Anda'
                    );
                    echo form_input($data_kota, $r->kota);
                    echo form_error('kota');
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo form_label('Apakah Anda pernah mencoba <br> Jing Chips sebelumnya ?'); ?></td>
                <td><?php
                    $coba1 = FALSE;
                    $coba2 = FALSE;
                    switch ($r->coba) {
                        case 'Y': $coba1 = TRUE;
                            break;
                        case 'T': $coba2 = TRUE;
                            break;
                    }
                    echo form_radio('coba', 'Y', $coba1);
                    echo form_label('Ya');
                    ?><br><?php
                    echo form_radio('coba', 'T', $coba2);
                    echo form_label('Tidak');
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo form_label('Dari mana Anda tahu Jing Chips ?'); ?></td>
                <td><?php
                    $sumber1 = FALSE;
                    $sumber2 = FALSE;
                    $sumber3 = FALSE;
                    $sumber4 = FALSE;
                    $sumber5 = FALSE;
                    switch ($r->sumber) {
                        case 'Instagram': $sumber1 = TRUE;
                            break;
                        case 'Teman': $sumber2 = TRUE;
                            break;
                        case 'Artikel Online': $sumber3 = TRUE;
                            break;
                        case 'Seminar': $sumber4 = TRUE;
                            break;
                        case 'Lainnya': $sumber5 = TRUE;
                            break;
                    }
                    echo form_radio('sumber', 'Instagram', $sumber1);
                    echo form_label('Instagram');
                    ?><br><?php
                    echo form_radio('sumber', 'Teman', $sumber2);
                    echo form_label('Teman');
                    ?><br><?php
                    echo form_radio('sumber', 'Artikel Online', $sumber3);
                    echo form_label('Artikel Online');
                    ?><br><?php
                    echo form_radio('sumber', 'Seminar', $sumber4);
                    echo form_label('Seminar');
                    ?><br><?php
                    echo form_radio('sumber', 'Lainnya', $sumber5);
                    echo form_label('Lainnya');
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo form_label('Apa alasan Anda ingin bergabung <br> menjadi mitra Jing Chips ?'); ?></td>
                <td><?php
                    $data_alasan = array(
                        'name' => 'alasan',
                        'placeholder' => 'Alasan Anda'
                    );
                    echo form_textarea($data_alasan, $r->alasan);
                    echo form_error('alasan');
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo form_label('Nomor WA'); ?></td>
                <td><?php
                    $data_wa = array(
                        'name' => 'wa',
                        'placeholder' => 'Nomor WhatsApp Anda'
                    );
                    echo form_input($data_wa, $r->whatsapp);
                    echo form_error('wa');
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo form_label('ID LINE'); ?></td>
                <td><?php
                    $data_line = array(
                        'name' => 'line',
                        'placeholder' => 'ID LINE Anda'
                    );
                    echo form_input($data_line, $r->line);
                    echo form_error('line');
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo form_label('Instagram'); ?></td>
                <td><?php
                    $data_ig = array(
                        'name' => 'ig',
                        'placeholder' => 'Instagram Anda'
                    );
                    echo form_input($data_ig, $r->instagram);
                    echo form_error('ig');
                    ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><?php echo form_submit('submit', 'Simpan'); ?></td>
            </tr>
        </table>
        <?php echo form_close(); ?>
    <?php } ?>
</body>
</html>