<div id="userMenu">
	<?php echo $user[0] ?>
	<ul>
		<li>email： <?php echo $user[1] ?></li>
		<li>passsword： 伏せてあります</li>
		<li>勤務病院： <?php echo $user[2]  ?></li>
	</ul>
</div>
<div id="history">
	<ul id="history">
		<?php
		foreach ($kuchikomi as $datas) {
			echo "<li>{$datas[1]}</li>";
			echo "<li>{$datas[0]}</li>";
			echo "<li>{$datas[2]}</li>";
		}
		 ?>
	</ul>
</div>
