

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">Taller de Sistemas de Información</h2>
        </div>
        <div>
            <a href="<?php echo e(route('tasks.create')); ?>" class="btn btn-primary">Crear propuesta</a>
        </div>
        <div lass="col-12 ">
            <h4>Propuestas:</h4>
        </div>
    </div>
    <?php if(Session::get('success')): ?>
        <div>
            <div class="alert alert-success mt-2">
                <strong><?php echo e(Session::get('success')); ?><br>
            </div>
        </div>
    <?php endif; ?>
    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Propuesta</th>
                <th>Comentario</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="fw-bold"><?php echo e($task->title); ?></td>
                    <td><?php echo e($task->description); ?></td>
                    <td>
                        <?php echo e($task->due_date); ?>

                    </td>
                    <td>
                        <span class="badge bg-warning fs-6"><?php echo e($task->status); ?></span>
                    </td>
                    <td>
                        <a href="<?php echo e(route('tasks.edit', $task)); ?>" class="btn btn-warning">Editar</a>

                        <form action="<?php echo e(route('tasks.destroy', $task)); ?>" method="POST"class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>
        <?php echo e($tasks->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Biblioteca\Desktop\proyecto\proyectoWeb\resources\views/index.blade.php ENDPATH**/ ?>