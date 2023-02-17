    
<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-center mb-4">
    <h1>Категории</h1>
</div>
<div class="container">
    <div class="row">
        <div class="d-flex flex-wrap justify-content-between">
            <a href="<?php echo e(request()->fullUrlWithQuery(['category' => 'phones'])); ?>" class="text-decoration-none text-dark">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo e(asset('img/5hq.png')); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center">Телефоны</h5>
                    </div>
                </div>
            </a>
            <a href="<?php echo e(request()->fullUrlWithQuery(['category' => 'consoles'])); ?>" class="text-decoration-none text-dark">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo e(asset('img/5hq.png')); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center">Приставки</h5>
                    </div>
                </div>
            </a>
            <a href="<?php echo e(request()->fullUrlWithQuery(['category' => 'accessories'])); ?>" class="text-decoration-none text-dark">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo e(asset('img/5hq.png')); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center">Аксессуары</h5>
                    </div>
                </div>
            </a>
            <a href="<?php echo e(request()->fullUrlWithQuery(['category' => 'laptops'])); ?>" class="text-decoration-none text-dark">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo e(asset('img/5hq.png')); ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center">Ноутбуки</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="container border-bottom mt-5">
    <div class="row mb-2">
        <div class="col">
            <img class="me-2" src="media/img/filter-results-button.png" width="16" height="16" alt=""><a href="" class="text-decoration-none text-dark">Фильтры</a>
        </div>
        <div class="col text-end">
            <div class="dropdown">
                <a class="dropdown-toggle text-decoration-none text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Популярные
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?php echo e(request()->fullUrlWithQuery(['field' => 'name', 'order' => 'asc'])); ?>">Название по возрастанию</a></li>
                  <li><a class="dropdown-item" href="<?php echo e(request()->fullUrlWithQuery(['field' => 'name', 'order' => 'desc'])); ?>">Название по убыванию</a></li>
                  <li><a class="dropdown-item" href="#">Цена по возрастанию</a></li>
                  <li><a class="dropdown-item" href="#">Цена по убыванию</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <div class="card h-100">
                    <a href="<?php echo e(route('details', $p->id)); ?>"><img src="<?php echo e(asset('img/'.$p->img)); ?>" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($p->name); ?></h5>
                    </div>
                    <form action="<?php echo e(route('addToCart', $p->id)); ?>" method="POST" class="card-footer d-flex justify-content-between mt-auto">
                        <?php echo csrf_field(); ?>
                        <strong class="mt-2"><?php echo e($p->price); ?> ₽</strong><button type="submit" class="btn btn-dark">В корзину</button>
                    </form>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/vrurvmcg/bbaxtvc-m1/resources/views/catalog.blade.php ENDPATH**/ ?>