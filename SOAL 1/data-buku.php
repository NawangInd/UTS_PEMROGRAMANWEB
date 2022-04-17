
<table border="1" width="900" align="center">
    <tr>
        <th>No</th>
        <th>Judul Buku</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from barang");
    while($tampil = mysqli_fetch_array($ambildata)){
    ?>
        <tr>
            <td><?php echo $tampil['No'] ?></td>
            <td><?php echo $tampil['Judul_buku'] ?></td>
            <td><?php echo $tampil['Pengarang'] ?></td>
            <td><?php echo $tampil['Tahun_terbit'] ?></td>
        <tr>
    <?php } ?>
    </table>