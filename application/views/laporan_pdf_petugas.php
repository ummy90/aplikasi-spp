<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>
	<table width="100%" border ="1px">
		<tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Nama Lengkap</th>
                        </tr>

        <?php
                        $no=0;
                        foreach($petugas as $value): ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $value->username; ?></td>
                            <td><?php echo $value->nama_petugas; ?></td>
                        </tr>
                        <?php
                        endforeach;
                        ?>


                    </table>
</body></html>