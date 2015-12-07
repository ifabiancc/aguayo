<h1>Genres List</h1>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Name</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($genres as $genre): ?>
    <tr>
      <td><?php echo $genre->getName() ?></td>
      <td><a href="<?php echo url_for('genre/edit?id=' . $genre->getId()) ?>" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                    <a href="<?php echo url_for('genre/delete?id=' . $genre->getId()) ?>" method="delete" class="btn btn-danger"><i class="fa fa-minus-circle"></i> Delete</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('genre/new') ?>" class="btn btn-success"><i class="fa fa-plus-circle"></i> New</a>
