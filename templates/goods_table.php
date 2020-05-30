<!-- Button trigger modal 
<button type="button" class="btn btn-primary mb-3 ml-3" data-toggle="modal" data-target="#exampleModal">
    Добавить новый товар
</button>
-->
<?php if ($isGoodsEmpty):?>
    <div class="alert alert-danger" role="alert">
        По Вашему запросу ничего не найдено!
    </div>

<?php else:?>
<table class="table">
    <thead>
    <tr>
        <th>id товара</th>
        <th>Название товара</th>
        <th>Описание</th>
        <th>Цена</th>
    </tr>
    </thead>

    <tbody>
		<?php foreach ($goods as $item): ?>
        <tr class=" <?=isInactive($item) ?'alert-danger' :'' ?>">
            <th scope="row"><?= $item['good_id'] ?></th>
            <td>
								<?= $item['good_name'] ?>
            </td>
            <td><?= $item['good_description'] ?></td>
            <td><?= $item['good_price'] ?></td>
        </tr>
		<?php endforeach; ?>

    </tbody>
</table>
<?php endif;?>
