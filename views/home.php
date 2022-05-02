
<fieldset>
    <form POST="GET">
        <input type="text" id="busca" name="busca" value="<?php echo (!empty($_GET['busca']))?$_GET['busca']:'';?>" placeholder="Digite o código de Barras ou nome do produto" style="width:100%;height:50px;font-size:18px">
    </form>
</fieldset>
<br/>
<br/>

<table border="0" width="100%">
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

<script>
    document.getElementById('busca').focus();
</script>