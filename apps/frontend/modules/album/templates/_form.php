<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('album/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('album/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'album/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['artist_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['artist_id']->renderError() ?>
          <?php echo $form['artist_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['genre_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['genre_id']->renderError() ?>
          <?php echo $form['genre_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['year_production_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['year_production_id']->renderError() ?>
          <?php echo $form['year_production_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['name']->renderLabel() ?></th>
        <td>
          <?php echo $form['name']->renderError() ?>
          <?php echo $form['name'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['image']->renderLabel() ?></th>
        <td>
          <?php echo $form['image']->renderError() ?>
          <?php echo $form['image'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['price']->renderLabel() ?></th>
        <td>
          <?php echo $form['price']->renderError() ?>
          <?php echo $form['price'] ?>
        </td>
      </tr>
      <?php if($form->getObject()->isNew()){ ?>
      <tr>
        <th><?php echo $form['stock']->renderLabel() ?></th>
        <td>
          <?php echo $form['stock']->renderError() ?>
          <?php echo $form['stock'] ?>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</form>
