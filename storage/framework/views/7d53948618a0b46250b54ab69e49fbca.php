<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/img/img0.png" class="img-fluid" alt="<?php echo e($produto->nome); ?>">
            </div>
            <div class="col-md-6">
                <h2><?php echo e($produto->nome); ?></h2>
                <p><?php echo e($produto->categoria); ?></p>
                <p><?php echo e($produto->descricao); ?></p>
                <p>Preço: R$ <?php echo e($produto->preco); ?></p>


                <form method="POST" action="<?php echo e(route('carrinho.add', $produto->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <label for="quantidade">Selecione a Quantidade</label>
                    <input type="number" name="quantidade" id="">
                    <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DevNoite\Documents\Guilherme V. Matias\PhpProjects\LojaFerramentas\resources\views/produtos/show.blade.php ENDPATH**/ ?>