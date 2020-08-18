
<h1>Users</h1>
<table id="country">
    <tr>
        <th>Country Name</th>
        <th>City Name</th>
        <th>Population</th>
    </tr>

    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
    )); ?>
</table>
