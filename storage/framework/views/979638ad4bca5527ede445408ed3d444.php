

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div>
            <h2>Editar propuesta</h2>
        </div>
        <div>
            <a href="<?php echo e(route('tasks.index')); ?>" class="btn btn-primary">Volver</a>
        </div>
    </div>

    <form action="<?php echo e(route('tasks.update',$task)); ?>" method="POST">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('PUT'); ?>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Propuesta:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Propuesta" value="<?php echo e($task->title); ?>">
                    <form method ="post" action="accion.php" enctype="multipart/form-data">
                        ingrese la propuesta
                        <input name="documento" type="file"/>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Comentario::</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Generar comentario..."><?php echo e($task->description); ?></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Fecha:</strong>
                    <input type="date" name="due_date" class="form-control" value=<?php echo e($task->due_date); ?> id="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Estado:</strong>
                    <select name="status" class="form-select" id="">
                        <option value="">-- Elige el status --</option>
                        <option value="Pendiente" <?php if("Pendiente" == $task->status): echo 'selected'; endif; ?>>Esperando Revisión</option>
                        <option value="En progreso" <?php if("En progreso" == $task->status): echo 'selected'; endif; ?>>Modificar propuesta</option>
                        <option value="Completada" <?php if("Completada" == $task->status): echo 'selected'; endif; ?>>Rechazado</option>
                        <option value="Completada" <?php if("Completada" == $task->status): echo 'selected'; endif; ?>>Aceptado</option>


                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Biblioteca\Desktop\proyecto\proyectoWeb\resources\views/edit.blade.php ENDPATH**/ ?>