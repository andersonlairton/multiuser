<?php

class UserLevel extends CWebUser
{
      protected $_model;

      public function isInRole($nomeRegra)
      {
            $user = $this->loadUser(); //usuario logado,onde user é um campo no banco de dados
            $nivelRegra = ManageLevel::getLevel($nomeRegra);

            if($user->superuser==1){
                  return true;
            }else if ($user && $nivelRegra)
                  return $user->level == $nivelRegra; //onde usuario é o model e nivel é o campo que deve ser igual ao da regra
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
