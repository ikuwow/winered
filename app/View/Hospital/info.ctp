<!DOCTYPE html>
<html lang="ja">
<head>
</head>
<body>
    <?php foreach ($results as $data):?>
    <table>
        <tr>
            <td>
                <?php var_dump($data);?>
            </td>
        </tr>
    </table>
    <?php endforeach;?>
</body>
</html>