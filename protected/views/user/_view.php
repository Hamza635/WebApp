<?php
/* @var $this UserController */
/* @var $data User */
?>

    <tr>
        <td><?php echo CHtml::link(CHtml::encode($data->id)); ?></td>
        <td><?php echo CHtml::encode($data->username); ?></td>
        <td><?php echo CHtml::encode($data->password); ?></td>
        <td><?php echo CHtml::encode($data->email); ?></td>
    </tr>


