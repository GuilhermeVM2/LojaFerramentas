


<?php $__env->startSection('content'); ?>


<div class="container">
    <h1 class="my-4">Produtos</h1>


    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>


    <a class="btn btn-success mb-2" href="<?php echo e(route('produtos.create')); ?>"> Criar Novo Produto</a>


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th width="280px">Ação</th>
        </tr>
        <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($produto->nome); ?></td>
            <td><?php echo e($produto->descricao); ?></td>
            <td><?php echo e($produto->categoria); ?></td>
            <td><?php echo e($produto->quantidade); ?></td>
            <td><?php echo e($produto->preco); ?></td>
            <td>
                <form action="<?php echo e(route('produtos.destroy', $produto->id)); ?>" method="POST">
                    <a class="btn btn-info" href="<?php echo e(route('produtos.show', $produto->id)); ?>">Mostrar</a>
                    <a class="btn btn-primary" href="<?php echo e(route('produtos.edit', $produto->id)); ?>">Editar</a>


                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DevNoite\Documents\Guilherme V. Matias\PhpProjects\LojaFerramentas\resources\views/produtos/index.blade.php ENDPATH**/ ?>