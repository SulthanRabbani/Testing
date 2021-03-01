<!-- 1772032 Sulthan Taqi Rabbani -->
<?php
$result = reportingnih();
?>
<table id="tableId" class="display">
    <thead>
    <tr>
        <th>Periode</th>
        <th>Nama Pegawai</th>
        <th>Role</th>
        <th>Nilai</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($result as $row){
    ?>
    <tr>
        <td><?php echo $row['ket_periode']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['role']; ?></td>
         <td><?php echo $row['nilai']; ?></td>
    </tr>
    <?php
    } $link = null;
    ?>
    </tbody>
</table>