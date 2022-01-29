<table class="table table-striped">
			<thead>
				<tr>
				<th scope="col">No</th>
				<th scope="col">Nama Obat</th>
				<th scope="col">Stok</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach ($dataObat as $row): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->obatalkes_nama; ?></td>
                        <td><?= $row->stok; ?></td>
                    </tr>
                <?php endforeach ?>
			</tbody>
		</table>