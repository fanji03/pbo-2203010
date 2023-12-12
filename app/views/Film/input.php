<h2>Input Film</h2>

<form action="<?php echo URL; ?>/film/save" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="nama" name="nama" required></td>
        </tr>
        <tr>
            <td>NEGARA ASAL</td>
            <td><input type="text" name="negara_asal" required></td>
        </tr>
        <tr>
            <td>GENRE</td>
            <td><input type="text" name="genre" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>