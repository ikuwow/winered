<div id= "hospitalinfo">
	<div id="title">
		<h2><?php echo $title;?></h2>
	</div>
	<div id="boxinfo">
		<table>
			<tbody>
				<tr>
					<th>住所</th>
					<td><?php echo $address;?></td>
				</tr>
				<tr>
					<th>交通情報</th>
					<td><?php echo $station;?></td>
				</tr>
				<tr>
					<th>施設形態</th>
					<td><?php echo $facility;?></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="addKuchikomi">
		<form method="post" action="">
			<p>口コミを投稿する</p>
			<input type="text" name="kuchikomi" id="kuchikomi"></input>
			<input type="submit" value="投稿する"></input>
		</form>
	</div>
	<div id="showKuchikomi">
		<?php foreach ($kuchikomi as $key => $data):?>
			<?php echo $data['Kuchikomi']['discription'];?>
			<?php echo $data['User']['username'];?>
			<?php foreach ($reply_array[$key] as $keys => $child):?>
				<?php echo $child['Kuchikomi']['discription'];?>
				<?php echo $child['User']['username'];?>
			<?php endforeach; ?>
			<?php echo '<p id="reply" onclick="open_reply('.$key.')">コメントする</p>';?>
			<?php echo '<p id="reply" onclick="close_reply('.$key.')">閉じる</p>';?>
			<?php echo '<form class="reply_form" id="reply_form_'.$key.'" method="post" action="">
							<input type="text" name="reply" id="reply"></input>
							<input type="hidden" name="parent_id" value="'.$key.'"></input>
							<input type="submit" value="コメントする"></input>
						</form>';?>
		<?php endforeach; ?>
	</div>
</div>

<script type="text/javascript">
function open_reply(key){
	document.getElementById("reply_form_" + key).style.display = "block";
}
function close_reply(key){
	document.getElementById("reply_form_" + key).style.display = "none";
}
</script>