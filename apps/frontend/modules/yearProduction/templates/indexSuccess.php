<h1>Year productions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($year_productions as $year_production): ?>
    <tr>
      <td><a href="<?php echo url_for('yearProduction/edit?id='.$year_production->getId()) ?>"><?php echo $year_production->getId() ?></a></td>
      <td><?php echo $year_production->getDate() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('yearProduction/new') ?>">New</a>
