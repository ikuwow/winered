<?php //debug($hospitals);?>

<h2><?php echo h($hospitals['Prefecture']['prefecture_name']);?>の病院一覧</h2>
<table>
<th>病院名</th><th>病院名（カナ）</th><th>会社名</th><th>郵便番号</th>
<?php foreach ($hospitals['Hospital'] as $hospital):?>
<tr>
<td><a href="/<?php echo $basedir;?>/hospital/<?php echo $hospital['id'];?>"><?php echo h($hospital['hospital_name']);?></a><td>
<td><?php echo h($hospital['hospital_name_kana']);?></td>
<td><?php echo h($hospital['company_name']);?></td>
<td><?php echo h($hospital['zip_code']);?></td>
</tr>
<?php endforeach;?>
</table>




