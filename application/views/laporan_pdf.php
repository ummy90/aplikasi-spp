<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>
	<table width="100%" border ="1px">
		<tr>
			<th>NISN</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>ID Kelas</th>
            <th>Alamat</th>
            <th>No Telp</th>
        </tr>

        <?php
                        $no=0;
                        foreach($siswa as $value): ?>
                        <tr>
                            <td><?php echo $value->nisn; ?></td>
                            <td><?php echo $value->nis; ?></td>
                            <td><?php echo $value->nama; ?></td>
                            <td><?php echo $value->id_kelas; ?></td>
                            <td><?php echo $value->alamat; ?></td>
                            <td><?php echo $value->no_telp; ?></td>
                        </tr>
                        <?php
                        endforeach;
                        ?>


                    </table>
</body></html>