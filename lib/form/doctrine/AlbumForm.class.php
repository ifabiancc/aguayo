<?php

/**
 * Album form.
 *
 * @package    aguayo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AlbumForm extends BaseAlbumForm
{
  public function configure()
  {
      $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'artist_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Artist'), 'add_empty' => false)),
      'genre_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Genre'), 'add_empty' => false)),
      'year_production_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('YearProduction'), 'add_empty' => false)),
      'name'               => new sfWidgetFormInputText(),
      'image'              => new sfWidgetFormInputFile(),
      'price'              => new sfWidgetFormInputText(),
      'stock'              => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'artist_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Artist'))),
      'genre_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Genre'))),
      'year_production_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('YearProduction'))),
      'name'               => new sfValidatorString(array('max_length' => 45)),
      'image'              => new sfValidatorString(array('max_length' => 45)),
      'price'              => new sfValidatorString(array('max_length' => 45)),
      'stock'              => new sfValidatorInteger(),
    ));
  }
}
