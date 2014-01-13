<?php

class UsersController extends AppController {
    public $uses = array('User');
    public $helpers = array('Form');
    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'top',
                'action' => 'index'
            ),
            'logoutRedirect'  => array(
                'controller' => 'top',
                'action' => 'index'
            ),
            'loginAction' => array(
                'controller' => 'top',
                'action' => 'index'
            ),
            'authError' => 'メールアドレスとパスワードの組み合わせが正しくありません。'
        )

    );

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
    }

    public function login() {
        if($this->request->is('post')) {
            if($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('ユーザ名かパスワードが違います'),
                    'default', array(), 'auth');
            }
        }
    }

    public function logout() {
        $this->Auth->logout();
    }

    public function signup() {
    }


}
