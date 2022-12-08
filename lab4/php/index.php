<?php 
echo "test";
$num = 10;
$name = "test";
echo $_GET['user'];
echo $_POST['password'];
?>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td><?php echo $name ?></td>
        </tr>
        <?php for($i = 2; $i < 5; $i++){ ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $name ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>