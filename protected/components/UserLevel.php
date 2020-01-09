<?php

class UserLevel extends CWebUser
{
       protected $_model;

      public function isInRole($nomeRegra)
      {
            $usuario = $this->loadUser();//usuario logado
            $nivelRegra = ManageLevel::getLevel($nomeRegra);
            if ($usuario && $nivelRegra)
                  return $usuario->nivel == $nivelRegra;//onde usuario é o model e nivel é o campo que deve ser igual ao da regra
            return false;
      }

      protected function loadUser()
      {
            if ($this->_model === null) {
                  $this->_model = Administrador::model()->findByPk($this->id);
            }
            return $this->_model;
      }
}