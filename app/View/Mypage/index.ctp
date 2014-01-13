<div id="userMenu">
	<?php echo $user['display_name'] ?>
	<ul>
		<li>email： <?php echo $user['email'] ?></li>
		<li>passsword： 伏せてあります</li>
		<li>勤務病院： <?php echo $user['hospital_id']  ?></li>
	</ul>
</div>
<div id="history">
	<ul id="history">
		<?php
		foreach ($history as $datas) {
			echo "<li>{$datas['Kuchikomi']['created']}</li>";
			echo "<li>{$datas['Kuchikomi']['discription']}</li>";
			echo "<li>{$datas['Kuchikomi']['hospital_id']}</li>";
		}
		 ?>
	</ul>
</div>
