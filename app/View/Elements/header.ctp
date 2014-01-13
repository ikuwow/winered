<div id="header">
	<div id="logos">
		<h1>看護師の口コミを探すならナースのための口コミサイト【Winered】</h1>
        <p><a href="/<?php echo $basedir;?>"><img src="/<?php echo $basedir;?>/img/winered_logo.png" width="250" alt="Wineredのロゴ"></a></p>
	</div>

    <form action="/<?php echo $basedir;?>/users/login" method="post" id="loginForm">
    <p id="registerFlow">新規登録は<a href="/<?php echo $basedir;?>/users/signup">こちら</a></p>
		<div id="emailWrap">
			ユーザー名<br>
			<input type="text" name="username" id="username">
		</div>
		<div id="passwordWrap">
			パスワード<br>
			<input type="password" name="password" id="password">
		</div>
		<input type="submit" value="login" name="send" id="send">
	</form>
</div>
