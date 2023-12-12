<h2>Edit Film</h2>

<form action="<?php echo URL; ?>/film/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="nama" name="nama" value="<?php echo $data['row']['nama']; ?>" required></td>
        </tr>
        <tr>
            <td>NEGARA ASAL</td>
            <td><input type="text" name="negara_asal" value="<?php echo $data['row']['negara_asal']; ?>" required></td>
        </tr>
        <tr>
            <td>GENRE</td>
            <td><input type="text" name="genre" value="<?php echo $data['row']['genre']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>