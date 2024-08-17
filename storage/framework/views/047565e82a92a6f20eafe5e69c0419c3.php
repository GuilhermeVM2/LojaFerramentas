<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Login</h1>
    <form method="POST" action="<?php echo e(route('usuarios.login')); ?>">
        <?php echo csrf_field(); ?>


        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required autofocus>
        </div>


        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" class="form-control" required>
        </div>


        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DevNoite\Documents\Guilherme V. Matias\PhpProjects\LojaFerramentas\resources\views/usuarios/login.blade.php ENDPATH**/ ?>