<a href="<?php echo BASE_URL; ?>home/add">Adicionar produto</a>

<table border="1" width="100%">
    <tr>
        <th>Cód. Barra</th>
        <th>Nome</th>
        <th>Preço Unit.</th>
        <th>Qtd.</th>
        <th>Ações</th>
    </tr>
    <?php foreach($list as $item): ?>
        <tr>
            <td><?php echo $item['cod'];?></td>
            <td><?php echo $item['name'];?></td>
            <td>R$<?php echo number_format($item['price'], 2, ',', '.');?></td>
            <td><?php echo $item['quantity'];?></td>
            <td>
                <a href="<?php echo BASE_URL; ?>home/edit/<?php echo $item['id']; ?>">Editar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>