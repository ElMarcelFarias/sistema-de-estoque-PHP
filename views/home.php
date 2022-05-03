
<fieldset>
    <form POST="GET">
        <input type="text" id="busca" name="busca" value="<?php echo (!empty($_GET['busca']))?$_GET['busca']:'';?>" placeholder="Digite o código de barras ou nome do produto" class="search">
    </form>
</fieldset>
<br/>
<br/>

<table class="table table-striped">
    <thead>
		  <tr>
			<th scope="col">Código de Barras</th>
			<th scope="col">Nome do Produto</th>
			<th scope="col">Preço do Produto</th>
			<th scope="col">Quantidade</th>
            <th scope="col">Ações</th>
		  </tr>
    </thead>
    <tbody>
    <?php foreach($list as $item): ?>
        <tr class="tableHover1">
            <td><?php echo $item['cod'];?></td>
            <td><?php echo $item['name'];?></td>
            <td>R$<?php echo number_format($item['price'], 2, ',', '.');?></td>
            <td><?php echo $item['quantity'];?></td>
            <td>
                <a href="<?php echo BASE_URL; ?>home/edit/<?php echo $item['id']; ?>" class="editarTable"><ion-icon name="create-outline"></ion-icon></a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://kit.fontawesome.com/351d3029ef.js" crossorigin="anonymous"></script>
<script>
    document.getElementById('busca').focus();
</script>