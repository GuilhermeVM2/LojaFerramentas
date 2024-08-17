<?php $__env->startSection('content'); ?>
    <h1>Dashboard de Produtos</h1>


    <form method="GET" action="<?php echo e(route('dashboard')); ?>">
        <input type="text" name="search" placeholder="Pesquisar produtos..." value="<?php echo e(request('search')); ?>">
        <button type="submit">Pesquisar</button>
    </form>


    <div class="row">
        <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/img/img01.png" class="card-img-top" alt="<?php echo e($produto->nome); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($produto->nome); ?></h5>
                        <p class="card-text"><?php echo e($produto->descricao); ?></p>
 <p class="card-text"><?php echo e($produto->categoria); ?></p>
                        <p class="card-text">Preço: R$ <?php echo e($produto->preco); ?></p>
                        <a href="<?php echo e(route('produtos.show', $produto->id)); ?>" class="btn btn-primary">Ver Produto</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DevNoite\Documents\Guilherme V. Matias\PhpProjects\LojaFerramentas\resources\views/usuarios/dashboard.blade.php ENDPATH**/ ?>