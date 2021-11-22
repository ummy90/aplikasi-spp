<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>
	<table width="100%" border ="1px">
		<tr>
                            <th>ID SPP</th>
                            <th>Tahun</th>
                            <th>Nominal</th>                            
                        </tr>

        <?php
                        $no=0;
                        foreach($spp as $value): ?>
                        <tr>
                            <td><?php echo $value->id_spp; ?></td>
                            <td><?php echo $value->tahun; ?></td>
                            <td><?php echo $value->nominal; ?></td>
                        </tr>
                        <?php
                        endforeach;
                        ?>


                    </table>
</body></html>