<div class="container-fluid">
    <button class="btn btn-sm btn-primary"><i class="fa fa-plus fa-sm"></i> Tambah Barang</button>
    
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php
        $no=1;
        foreach($barang as $brg) : ?>

        <tr>
            <td><?php echo $no++  ?></td>
            <td><?php echo $brg->nama_barang ?></td>
            <td><?php echo $brg->keterangan ?></td>
            <td><?php echo $brg->kategori ?></td>
            <td><?php echo $brg->harga ?></td>
            <td><?php echo $brg->stok ?></td>
            <td><div class="btn btn-succes btn-sm"><i class="fas fa-search-plus"></i></div></td>
            <td><div class="btn btn-succes btn-sm"><i class="fas fa-edit"></i></div></td>
            <td><div class="btn btn-succes btn-sm"><i class="fas fa-trash"></i></div></td>
        </tr>

        <?php endforeach ?>
    </table>
</div>
