<?php
echo $this->Form->create('User', array('url' => 'signup'));
echo $this->Form->input('email',array('label'=>'メールアドレス'));
echo $this->Form->input('password',array('label'=>'パスワード'));
echo $this->Form->input('screen_name',array('label'=>'ユーザ名'));
echo $this->Form->end('新規ユーザを作成する');
?>

