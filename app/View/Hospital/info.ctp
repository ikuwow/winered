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
		<form method="post" action=" ">
			<p>口コミを投稿する</p>
			<input type="text" name="kuchikomi" id="kuchikomi"></input>
			<input type="submit" value="投稿する"></input>
		</form>
	</div>
	<div id="showKuchikomi">
		<?php foreach ($kuchikomi as $key => $data):?>
			<?php echo $data['Kuchikomi']['discription'];?>
			<?php echo $data['User']['display_name'];?>
		<?php endforeach; ?>
	</div>
<?php var_dump($results);?>
<?php var_dump($kuchikomi);?>
</div>