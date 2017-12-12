<h1 class="">Портфолио</h1>
<p>
<table class="table table-inverse">
    Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
    <tr><td>Год</td><td>Проект</td><td>Описание</td></tr>
    <?php

    foreach($data as $row)
    {
        echo '<tr><td>'.$row['id'].'</td><td>'.$row['name'].'</td></tr>';
    }

    ?>
</table>
<button type="button" class="btn btn-default-outline">Default</button>
</p>