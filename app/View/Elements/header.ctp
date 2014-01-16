<div id="header">
	<div id="logos">
		<h1>看護師の口コミを探すならナースのための口コミサイト【Winered】</h1>
        <p><a href="/<?php echo $basedir;?>"><img src="/<?php echo $basedir;?>/img/winered_logo.png" width="250" alt="Wineredのロゴ"></a></p>
	</div>

    <form action="/<?php echo $basedir;?>/users/login" method="post" id="loginForm">
    <p id="registerFlow">新規登録は<a href="/<?php echo $basedir;?>/users/signup">こちら</a></p>


<?php if (isset($me)): ?>

<?php echo 'ようこそ、'.$me['username'].'さん。';?>
<?php echo $this->Html->link('ログアウト','/users/logout'); ?>

<?php else: ?>

<!-- ログインフォーム -->
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User', array('url' => 'login')); ?>
		<div id="emailWrap">
<?php echo $this->Form->input('username', array('label' => 'ユーザ名')); ?>
		</div>
		<div id="passwordWrap">
<?php echo $this->Form->input('password', array('label' => 'パスワード')); ?>
		</div>
<?php echo $this->Form->end('ログイン'); ?>

<?php endif; ?>
</div>
