<?php

/**
 * area_produccion actions.
 *
 * @package    proyectosm
 * @subpackage area_produccion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class area_produccionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->area_produccions = Doctrine_Core::getTable('AreaProduccion')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->area_produccion = Doctrine_Core::getTable('AreaProduccion')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->area_produccion);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AreaProduccionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AreaProduccionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($area_produccion = Doctrine_Core::getTable('AreaProduccion')->find(array($request->getParameter('id'))), sprintf('Object area_produccion does not exist (%s).', $request->getParameter('id')));
    $this->form = new AreaProduccionForm($area_produccion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($area_produccion = Doctrine_Core::getTable('AreaProduccion')->find(array($request->getParameter('id'))), sprintf('Object area_produccion does not exist (%s).', $request->getParameter('id')));
    $this->form = new AreaProduccionForm($area_produccion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($area_produccion = Doctrine_Core::getTable('AreaProduccion')->find(array($request->getParameter('id'))), sprintf('Object area_produccion does not exist (%s).', $request->getParameter('id')));
    $area_produccion->delete();

    $this->redirect('area_produccion/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $area_produccion = $form->save();

      $this->redirect('area_produccion/edit?id='.$area_produccion->getId());
    }
  }
}
