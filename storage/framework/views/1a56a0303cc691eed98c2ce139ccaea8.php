<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="my-4">Criar Produto</h1>


    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Oops!</strong> Houve alguns problemas com sua entrada.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>


    <form action="<?php echo e(route('produtos.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>


        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome">
        </div>


        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" class="form-control" placeholder="Descrição"></textarea>
        </div>


        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria" class="form-control" placeholder="Categoria">
        </div>


        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" class="form-control" placeholder="Quantidade">
        </div>


        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="text" name="preco" class="form-control" placeholder="Preço">
        </div>


        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DevNoite\Documents\Guilherme V. Matias\PhpProjects\LojaFerramentas\resources\views/produtos/create.blade.php ENDPATH**/ ?>