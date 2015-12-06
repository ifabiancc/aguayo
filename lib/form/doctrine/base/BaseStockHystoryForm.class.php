<?php

/**
 * StockHystory form base class.
 *
 * @method StockHystory getObject() Returns the current form's model object
 *
 * @package    aguayo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseStockHystoryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'album_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Album'), 'add_empty' => false)),
      'description' => new sfWidgetFormInputText(),
      'alue'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'album_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Album'))),
      'description' => new sfValidatorString(array('max_length' => 225)),
      'alue'        => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('stock_hystory[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'StockHystory';
  }

}
