<?php

/**
 * etapa_ref actions.
 *
 * @package    proyectosm
 * @subpackage etapa_ref
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class etapa_refActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->etapa_refs = Doctrine_Core::getTable('EtapaRef')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->etapa_ref = Doctrine_Core::getTable('EtapaRef')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->etapa_ref);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EtapaRefForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EtapaRefForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($etapa_ref = Doctrine_Core::getTable('EtapaRef')->find(array($request->getParameter('id'))), sprintf('Object etapa_ref does not exist (%s).', $request->getParameter('id')));
    $this->form = new EtapaRefForm($etapa_ref);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($etapa_ref = Doctrine_Core::getTable('EtapaRef')->find(array($request->getParameter('id'))), sprintf('Object etapa_ref does not exist (%s).', $request->getParameter('id')));
    $this->form = new EtapaRefForm($etapa_ref);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($etapa_ref = Doctrine_Core::getTable('EtapaRef')->find(array($request->getParameter('id'))), sprintf('Object etapa_ref does not exist (%s).', $request->getParameter('id')));
    $etapa_ref->delete();

    $this->redirect('etapa_ref/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $etapa_ref = $form->save();

      $this->redirect('etapa_ref/edit?id='.$etapa_ref->getId());
    }
  }
}
