<h1>Editar Produto</h1>

<?php if(!empty($warning)):?>
<div class="warning">
    <?php echo $warning ?>
</div>
<?php endif;?>

<form method="POST" class="form">
    Código de Barras:<br/>
    <input type="text" name="cod" value="<?php echo $info['cod']; ?>" required><br/><br/>
    Nome do Produto:<br/>
    <input type="text" name="name" value="<?php echo $info['name']; ?>" required><br/><br/>
    Preço do Produto:<br/>
    <input type="text" name="price" class="dinheiro" value="<?php echo number_format($info['price'], 2, ',','.'); ?>" required><br/><br/>
    Quantidade:<br/>
    <input type="text" name="quantity" class="dinheiro" value="<?php echo number_format($info['quantity'], 2, ',','.'); ?>" required><br/><br/>
    Qtd. Mínima:<br/>
    <input type="text" name="min_quantity" class="dinheiro" value="<?php echo number_format($info['min_quantity'], 2, ',','.'); ?>" required><br/><br/>

    <input type="submit" value="Salvar alterações" class="buttonEdit">
</form>

     