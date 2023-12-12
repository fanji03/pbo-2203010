<h2>Film</h2>

<a href="<?php echo URL; ?>/film/input" class="btn">Input Film</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NEGARA ASAL</th>
            <th>GENRE</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['negara_asal']; ?></td>
                  <td><?php echo $row['genre']; ?></td>
                  <td><a href="<?php echo URL; ?>/film/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/film/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>