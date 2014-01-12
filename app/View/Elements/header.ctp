<div id="header">
	<div id="logos">
		<h1>看護師の口コミを探すならナースのための口コミサイト【Winered】</h1>
        <p><img src="/<?php echo $basedir;?>/img/winered_logo.png" width="250" alt="Wineredのロゴ"></p>
	</div>

	<form action="./login" method="post" id="loginForm">
		<p id="registerFlow">新規登録は<a href="./register">こちら</a></p>
		<div id="emailWrap">
			email<br>
			<input type="text" name="email" id="email">
		</div>
		<div id="passwordWrap">
			password<br>
			<input type="password" name="password" id="password">
		</div>
		<input type="submit" value="login" name="send" id="send">
	</form>
</div>
