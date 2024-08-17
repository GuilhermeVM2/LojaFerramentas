<?php if(Auth::check()): ?>
    <div>
        <h3>Olá, <?php echo e(Auth::user()->name); ?></h3>
        <h4><?php echo e(Auth::user()->tipo_usuario); ?></h4>
    </div>
    <form action="/logout" method="post">
        <?php echo csrf_field(); ?>
        <button type="submit">Logout</button>
    </form>
    <?php if(Auth::user()->isAdmin()): ?>
        <div>
            <a href="/produtos"><h3>Dashboard Produtos - Adm</h3></a>
        </div>
    
    <?php endif; ?>
<?php else: ?>
    <div>
        <h5>CABEÇALHO</h5>
        <ul>
            <li><a href="/login">Login</a></li>
            <li><a href="/registro">Registro</a></li>
        </ul>
        <hr>
    </div>
   
<?php endif; ?>
<?php /**PATH C:\Users\DevNoite\Documents\Guilherme V. Matias\PhpProjects\LojaFerramentas\resources\views/parts/header.blade.php ENDPATH**/ ?>