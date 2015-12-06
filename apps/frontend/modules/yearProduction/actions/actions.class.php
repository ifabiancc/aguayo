<?php

/**
 * yearProduction actions.
 *
 * @package    aguayo
 * @subpackage yearProduction
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class yearProductionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->year_productions = Doctrine_Core::getTable('YearProduction')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new YearProductionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new YearProductionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($year_production = Doctrine_Core::getTable('YearProduction')->find(array($request->getParameter('id'))), sprintf('Object year_production does not exist (%s).', $request->getParameter('id')));
    $this->form = new YearProductionForm($year_production);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($year_production = Doctrine_Core::getTable('YearProduction')->find(array($request->getParameter('id'))), sprintf('Object year_production does not exist (%s).', $request->getParameter('id')));
    $this->form = new YearProductionForm($year_production);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($year_production = Doctrine_Core::getTable('YearProduction')->find(array($request->getParameter('id'))), sprintf('Object year_production does not exist (%s).', $request->getParameter('id')));
    $year_production->delete();

    $this->redirect('yearProduction/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $year_production = $form->save();

      $this->redirect('yearProduction/edit?id='.$year_production->getId());
    }
  }
}
