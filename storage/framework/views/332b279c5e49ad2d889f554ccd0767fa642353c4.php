<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-center mb-4">
    <h1>Категории</h1>
</div>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between">
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
    <div class="row">
        <div class="d-flex justify-content-between mt-5">
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <a href="<?php echo e(route('details', $p->id)); ?>" class="text-decoration-none text-dark">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo e(asset('img/'.$p->img)); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($p->name); ?></h5>
                                <p class="card-text"><?php echo e($p->text); ?></p>
                                <div class="row">
                                    <div class="d-flex justify-content-between">
                                        <strong><?php echo e($p->price); ?> ₽</strong><a href="#" class="btn btn-dark">В корзину</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p>no items</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/vrurvmcg/bbaxtvc-m1/resources/views/catalog.blade.php ENDPATH**/ ?>