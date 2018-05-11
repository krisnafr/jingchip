<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1">

        <title>Daftar</title>
    </head>
    <body>
    <center>
        <h1>Pendaftaran Mitra Jingchips</h1>
        <h3>Modal awal menjadi Prajurit : 260 rb ( pembelian 20 pcs Jing Chips )<br>
            Modal awal menjadi Kapten : 1,2 Juta ( pembelian 100 pcs Jing Chips )<br>
            Modal awal menjadi Jendral : 10 Juta ( pembelian 1000 pcs Jing Chips )</h3>
    </center>
    <?php echo form_open('reseller/daftar_submit'); ?>
    <table style="margin:20px auto;">
        <tr>
            <td><?php echo form_label('Peluang usaha yang Anda inginkan ?'); ?></td>
            <td><?php
                echo form_radio('tipe', 'Prajurit', TRUE);
                echo form_label('Prajurit');
                ?><br><?php
                echo form_radio('tipe', 'Kapten');
                echo form_label('Kapten');
                ?><br><?php
                echo form_radio('tipe', 'Jendral');
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
                echo form_input($data_nama, set_value('nama'));
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
                echo form_input($data_email, set_value('email'));
                echo form_error('email');
                ?>
            </td>
        </tr>
        <tr>
            <td><?php echo form_label('Jenis Kelamin'); ?></td>
            <td><?php
                echo form_radio('gender', 'L', TRUE);
                echo form_label('Laki-Laki');
                ?><br><?php
                echo form_radio('gender', 'P');
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
                echo form_input($data_dob, set_value('dob'));
                echo form_error('dob');
                ?>
            </td>
        </tr>
        <tr>
            <td><?php echo form_label('Pekerjaan Anda saat ini'); ?></td>
            <td><?php
                echo form_radio('job', 'Pelajar', TRUE);
                echo form_label('Pelajar');
                ?><br><?php
                echo form_radio('job', 'Mahasiswa');
                echo form_label('Mahasiswa');
                ?><br><?php
                echo form_radio('job', 'Karyawan');
                echo form_label('Karyawan');
                ?><br><?php
                echo form_radio('job', 'Wirausaha');
                echo form_label('Wirausaha');
                ?><br><?php
                echo form_radio('job', 'Ibu Rumah Tangga');
                echo form_label('Ibu Rumah Tangga');
                ?><br><?php
                echo form_radio('job', 'Lainnya');
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
                echo form_input($data_kota, set_value('kota'));
                echo form_error('kota');
                ?>
            </td>
        </tr>
        <tr>
            <td><?php echo form_label('Apakah Anda pernah mencoba <br> Jing Chips sebelumnya ?'); ?></td>
            <td><?php
                echo form_radio('coba', 'Y', TRUE);
                echo form_label('Ya');
                ?><br><?php
                echo form_radio('coba', 'T');
                echo form_label('Tidak');
                ?>
            </td>
        </tr>
        <tr>
            <td><?php echo form_label('Dari mana Anda tahu Jing Chips ?'); ?></td>
            <td><?php
                echo form_radio('sumber', 'Instagram', TRUE);
                echo form_label('Instagram');
                ?><br><?php
                echo form_radio('sumber', 'Teman');
                echo form_label('Teman');
                ?><br><?php
                echo form_radio('sumber', 'Artikel Online');
                echo form_label('Artikel Online');
                ?><br><?php
                echo form_radio('sumber', 'Seminar');
                echo form_label('Seminar');
                ?><br><?php
                echo form_radio('sumber', 'Lainnya');
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
                echo form_textarea($data_alasan, set_value('alasan'));
                echo form_error('alasan');
                ?>
            </td>
        </tr>
        <tr>
            <td><?php echo form_label('Nomor WhatsApp'); ?></td>
            <td><?php
                $data_wa = array(
                    'name' => 'wa',
                    'placeholder' => 'Nomor WhatsApp Anda'
                );
                echo form_input($data_wa, set_value('wa'));
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
                echo form_input($data_line, set_value('line'));
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
                echo form_input($data_ig, set_value('ig'));
                echo form_error('ig');
                ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo form_submit('submit', 'Submit'); ?></td>
        </tr>
    </table>
    <?php echo form_close(); ?>
</body>
</html>