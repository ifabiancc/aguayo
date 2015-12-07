<h1>Artists List</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($artists as $artist): ?>
            <tr>
                <td><?php echo $artist->getName() ?></td>
                <td><a href="<?php echo url_for('artist/edit?id=' . $artist->getId()) ?>" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                    <a href="<?php echo url_for('artist/delete?id=' . $artist->getId()) ?>" method="delete" class="btn btn-danger"><i class="fa fa-minus-circle"></i> Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="<?php echo url_for('artist/new') ?>"  class="btn btn-success"><i class="fa fa-plus-circle"></i> New</a>
