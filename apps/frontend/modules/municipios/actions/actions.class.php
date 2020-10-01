<?php

/**
 * municipios actions.
 *
 * @package    proyectosm
 * @subpackage municipios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class municipiosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->municipioss = Doctrine_Core::getTable('Municipios')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->municipios = Doctrine_Core::getTable('Municipios')->find(array($request->getParameter('id_municipio')));
    $this->forward404Unless($this->municipios);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MunicipiosForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MunicipiosForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($municipios = Doctrine_Core::getTable('Municipios')->find(array($request->getParameter('id_municipio'))), sprintf('Object municipios does not exist (%s).', $request->getParameter('id_municipio')));
    $this->form = new MunicipiosForm($municipios);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($municipios = Doctrine_Core::getTable('Municipios')->find(array($request->getParameter('id_municipio'))), sprintf('Object municipios does not exist (%s).', $request->getParameter('id_municipio')));
    $this->form = new MunicipiosForm($municipios);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($municipios = Doctrine_Core::getTable('Municipios')->find(array($request->getParameter('id_municipio'))), sprintf('Object municipios does not exist (%s).', $request->getParameter('id_municipio')));
    $municipios->delete();

    $this->redirect('municipios/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $municipios = $form->save();

      $this->redirect('municipios/edit?id_municipio='.$municipios->getId_munIcIpIo());
    }
  }
}
