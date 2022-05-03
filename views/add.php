<h1>Adicionar Produto</h1>

<?php if(!empty($warning)):?>
<div class="warning">
    <?php echo $warning ?>
</div>
<?php endif;?>

<form method="POST" class="form">
    Código de Barras:<br/>
    <input type="text" name="cod" required><br/><br/>
    Nome do Produto:<br/>
    <input type="text" name="name"  required><br/><br/>
    Preço do Produto:<br/>
    <input type="text" name="price" class="dinheiro" required><br/><br/>
    Quantidade:<br/>
    <input type="text" name="quantity" class="dinheiro" required><br/><br/>
    Qtd. Mínima:<br/>
    <input type="text" name="min_quantity" class="dinheiro" required><br/><br/>

    <input type="submit" value="Adicionar Produto">
</form>