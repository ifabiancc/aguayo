<h1>Albums List</h1>
<div class="row col-md-12">
    <form action="" method="post">
        <?php echo $filter['artist_id']->renderLabel() ?>
        <?php echo $filter['artist_id']->renderError() ?>
        <?php echo $filter['artist_id'] ?>
        <?php echo $filter['genre_id']->renderLabel() ?>
        <?php echo $filter['genre_id']->renderError() ?>
        <?php echo $filter['genre_id'] ?>
        <?php echo $filter['year_production_id']->renderLabel() ?>
        <?php echo $filter['year_production_id']->renderError() ?>
        <?php echo $filter['year_production_id'] ?>
        <?php echo $filter['_csrf_token']->render() ?>
        <?php // echo $filter ?>
        <button class="btn btn-success">Filtrar</button>
    </form>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Artist</th>
            <th>Genre</th>
            <th>Year production</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <?php if ($sf_user->isAuthenticated()): ?>
                <th>Stock</th>
                <th>Actions</th>
            <?php endif ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($albums as $album): ?>
            <tr>
                <td><?php echo $album->getArtist() ?></td>
                <td><?php echo $album->getGenre() ?></td>
                <td><?php echo $album->getYearProduction() ?></td>
                <td><?php echo $album->getName() ?></td>
                <td><img width="30px" src="../uploads/album/<?php echo $album->getImage() ?>" /></td>
                <td><?php echo $album->getPrice() ?></td>
                <?php if ($sf_user->isAuthenticated()): ?>
                    <td><button class="btn btn-success" onclick="removeStock(<?php echo $album->getId() ?>)"><i class="fa fa-minus"></i></button><label id="stock-<?php echo $album->getId() ?>"><?php echo $album->getStock() ?></label><button onclick="addStock(<?php echo $album->getId() ?>)" class="btn btn-success"><i class="fa fa-plus"></i></button></td>
                    <td><a href="<?php echo url_for('album/edit?id=' . $album->getId()) ?>" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="<?php echo url_for('album/edit?id=' . $album->getId()) ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i> Delete</a></td>
                <?php endif ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php if ($sf_user->isAuthenticated()): ?>
    <a href="<?php echo url_for('album/new') ?>" class="btn btn-success"><i class="fa fa-plus-circle"></i> New</a>
<?php endif
?>
<script>
    function addStock(id) {
        $.ajax({
            url: "<?php echo url_for('album/addStock') ?>",
            method: "POST",
            data: {id: id},
            dataType: "json",
            success: function (data) {
                if (data.success) {
                    $("#stock-" + id).text(data.stock);
                }
            }
        })
    }

    function removeStock(id) {
        $.ajax({
            url: "<?php echo url_for('album/removeStock') ?>",
            method: "POST",
            data: {id: id},
            dataType: "json",
            success: function (data) {
                if (data.success) {
                    $("#stock-" + id).text(data.stock);
                }
            }
        })
    }
</script>