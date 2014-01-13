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
        $this->Auth->allow('login','logout','signup');
    }

    public function login() {
        if($this->request->is('post')) {
            $tmp = $this->Auth->login();
            debug($tmp);
            if($tmp) {
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
        if($this->request->is('post')) {
            $this->request->data['User']['password'] =
                AuthComponent::password($this->request->data['User']['password']);
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('新規ユーザーを追加しました'));
            }
        }
    }


}
