<div id="userMenu">
	<h2>マイページ</h2>
	<?php echo $user['User']['display_name'] ?>
	<ul>
		<li>email： <?php echo $user['User']['email'] ?></li>
		<li>password： 伏せてあります</li>
		<li>勤務病院： <?php echo $user['Hospital']['hospital_name']  ?></li>
	</ul>
	<button id="editButton">編集する</button>
	<form action="./edit" method="post" id="editForm">
		<dl>
			<dt>ユーザーネーム</dt>
			<dd><input type="text" value="<?php echo $user['User']['display_name'] ?>" name="display_name" id="editDisplay_name"></dd>

			<dt>email</dt>
			<dd><input type="text" value="<?php echo $user['User']['email'] ?>" name="email" id="editEmail"></dd>

			<dt>パスワード</dt>
			<dd><input type="password" name="password" id="editPassword"></dd>
			<dd><input type="password" name="confirm" id="editConfirm">(確認)</dd>

			<dt>勤務先病院</dt>
			<dd><input type="text" name="hospital_id" id="editHospital"></dd>

		</dl>
		<input type="submit" value="確定する">
	</form>
</div>
<div id="history">
	<h2>口コミ投稿履歴</h2>
		<?php
		foreach ($history as $datas) {
			echo '<div class="history">';
			echo "<h3>{$datas['Hospital']['hospital_name']}</h3>";
			echo "<p>{$datas['Kuchikomi']['created']}</p>";
			echo "<p>{$datas['Kuchikomi']['discription']}</p>";
			echo "</div>";
		}
		?>
</div>
