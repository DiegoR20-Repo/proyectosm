<?php

/**
 * departamentos actions.
 *
 * @package    proyectosm
 * @subpackage departamentos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class departamentosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->departamentoss = Doctrine_Core::getTable('Departamentos')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->departamentos = Doctrine_Core::getTable('Departamentos')->find(array($request->getParameter('id_departamento')));
    $this->forward404Unless($this->departamentos);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new DepartamentosForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new DepartamentosForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($departamentos = Doctrine_Core::getTable('Departamentos')->find(array($request->getParameter('id_departamento'))), sprintf('Object departamentos does not exist (%s).', $request->getParameter('id_departamento')));
    $this->form = new DepartamentosForm($departamentos);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($departamentos = Doctrine_Core::getTable('Departamentos')->find(array($request->getParameter('id_departamento'))), sprintf('Object departamentos does not exist (%s).', $request->getParameter('id_departamento')));
    $this->form = new DepartamentosForm($departamentos);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($departamentos = Doctrine_Core::getTable('Departamentos')->find(array($request->getParameter('id_departamento'))), sprintf('Object departamentos does not exist (%s).', $request->getParameter('id_departamento')));
    $departamentos->delete();

    $this->redirect('departamentos/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $departamentos = $form->save();

      $this->redirect('departamentos/edit?id_departamento='.$departamentos->getId_departamento());
    }
  }
}
