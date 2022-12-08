<?php
require "condb.php";

?>
<script 
src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<table>
    <thead>
        <tr>
            <td>#</td>
            <td>NAME</td>
            <td>LAST NAME</td>
        </tr>
    </thead>
    <tbody>
        <?php

        $sql = "SELECT * FROM tb_student ORDER BY std_id ASC";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?= $row['std_id'] ?></td>
                <td><?= $row['std_name'] ?></td>
                <td><?= $row['std_sname'] ?></td>
                <td><button id="btn_edit" class="btn_edit" data="<?= $row['std_id'] ?>">edit</button> </td>
                <td><button class="btn_del" data="<?= $row['std_id'] ?>">del</button></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<script>
    $(".btn_del").click(function() {
        alert($(this).attr('data'));
    });
</script>