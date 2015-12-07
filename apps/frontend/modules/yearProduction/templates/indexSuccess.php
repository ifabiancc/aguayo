<h1>Year productions List</h1>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Date</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($year_productions as $year_production): ?>
    <tr>
      <td><?php echo $year_production->getDate() ?></td>
    <td><a href="<?php echo url_for('yearProduction/edit?id=' . $year_production->getId()) ?>" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                    <a href="<?php echo url_for('yearProduction/delete?id=' . $year_production->getId()) ?>" method="delete" class="btn btn-danger"><i class="fa fa-minus-circle"></i> Delete</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('yearProduction/new') ?>" class="btn btn-success"><i class="fa fa-plus-circle"></i> New</a>
