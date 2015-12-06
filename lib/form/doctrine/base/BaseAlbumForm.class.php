<?php

/**
 * Album form base class.
 *
 * @method Album getObject() Returns the current form's model object
 *
 * @package    aguayo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAlbumForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'artist_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Artist'), 'add_empty' => false)),
      'genre_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Genre'), 'add_empty' => false)),
      'year_production_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('YearProduction'), 'add_empty' => false)),
      'name'               => new sfWidgetFormInputText(),
      'image'              => new sfWidgetFormInputText(),
      'price'              => new sfWidgetFormInputText(),
      'stock'              => new sfWidgetFormInputText(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
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
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('album[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Album';
  }

}
