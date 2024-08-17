


<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="my-4">Editar Produto</h1>


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


        <form action="<?php echo e(route('produtos.update', $produto->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>


            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control" value="<?php echo e($produto->nome); ?>">
            </div>


            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" class="form-control"><?php echo e($produto->descricao); ?></textarea>
            </div>


            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" name="categoria" class="form-control" value="<?php echo e($produto->categoria); ?>">
            </div>


            <div class="form-group">
                <label for="quantidade">Quantidade:</label>
                <input type="number" name="quantidade" class="form-control" value="<?php echo e($produto->quantidade); ?>">
            </div>


            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="text" name="preco" class="form-control" value="<?php echo e($produto->preco); ?>">
            </div>


            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DevNoite\Documents\Guilherme V. Matias\PhpProjects\LojaFerramentas\resources\views/produtos/edit.blade.php ENDPATH**/ ?>