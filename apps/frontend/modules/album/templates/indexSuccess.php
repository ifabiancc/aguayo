<h1>Albums List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Artist</th>
      <th>Genre</th>
      <th>Year production</th>
      <th>Name</th>
      <th>Image</th>
      <th>Price</th>
      <th>Stock</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($albums as $album): ?>
    <tr>
      <td><a href="<?php echo url_for('album/edit?id='.$album->getId()) ?>"><?php echo $album->getId() ?></a></td>
      <td><?php echo $album->getArtistId() ?></td>
      <td><?php echo $album->getGenreId() ?></td>
      <td><?php echo $album->getYearProductionId() ?></td>
      <td><?php echo $album->getName() ?></td>
      <td><?php echo $album->getImage() ?></td>
      <td><?php echo $album->getPrice() ?></td>
      <td><?php echo $album->getStock() ?></td>
      <td><?php echo $album->getCreatedAt() ?></td>
      <td><?php echo $album->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('album/new') ?>">New</a>
