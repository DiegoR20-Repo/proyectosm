<?php

/**
 * etapa_proyecto actions.
 *
 * @package    proyectosm
 * @subpackage etapa_proyecto
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class etapa_proyectoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->etapa_proyectos = Doctrine_Core::getTable('EtapaProyecto')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->etapa_proyecto = Doctrine_Core::getTable('EtapaProyecto')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->etapa_proyecto);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EtapaProyectoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new EtapaProyectoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($etapa_proyecto = Doctrine_Core::getTable('EtapaProyecto')->find(array($request->getParameter('id'))), sprintf('Object etapa_proyecto does not exist (%s).', $request->getParameter('id')));
    $this->form = new EtapaProyectoForm($etapa_proyecto);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($etapa_proyecto = Doctrine_Core::getTable('EtapaProyecto')->find(array($request->getParameter('id'))), sprintf('Object etapa_proyecto does not exist (%s).', $request->getParameter('id')));
    $this->form = new EtapaProyectoForm($etapa_proyecto);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($etapa_proyecto = Doctrine_Core::getTable('EtapaProyecto')->find(array($request->getParameter('id'))), sprintf('Object etapa_proyecto does not exist (%s).', $request->getParameter('id')));
    $etapa_proyecto->delete();

    $this->redirect('etapa_proyecto/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $etapa_proyecto = $form->save();

      $this->redirect('etapa_proyecto/edit?id='.$etapa_proyecto->getId());
    }
  }
}
