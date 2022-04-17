<table border ="1" width = "900" align = "center">
<thead>
    <tr>
        <th>No</th>
        <th>Provinsi</th>
        <th>Kabupaten</th>
        <th>Kecamatan</th>
    </tr>
</thead>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from data");
    while($tampil = mysqli_fetch_array($ambildata)){
    ?>
        <tr>
            <td><?php echo $tampil['No'] ?></td>
            <td><?php echo $tampil['Provinsi'] ?></td>
            <td><?php echo $tampil['Kabupaten'] ?></td>
            <td><?php echo $tampil['Kecamatan'] ?></td>
        <tr>
    <?php } ?>
    </table>