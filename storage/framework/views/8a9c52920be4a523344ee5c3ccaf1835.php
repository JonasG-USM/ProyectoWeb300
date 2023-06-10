

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div>
            <h2>Generar propuesta</h2>
        </div>
        <div>
            <a href="<?php echo e(route('tasks.index')); ?>" class="btn btn-primary">Volver</a>
        </div>
    </div>

    <form action="<?php echo e(route('tasks.store')); ?>" method="POST">
        <?php echo csrf_field(); ?> 
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Propuesta:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Propuesta" >
                    <form method ="post" action="accion.php" enctype="multipart/form-data">
                        ingrese la propuesta
                        <input name="documento" type="file"/>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Descripción:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Descripción..."></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Fecha:</strong>
                    <input type="date" name="due_date" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Estado (inicial):</strong>
                    <select name="status" class="form-select" id="">
                        <option value="">-- Elige el status --</option>
                        <option value="Pendiente">Esperando Revisión</option>
                        <option value="En progreso">Modificar propuesta</option>
                        <option value="Completada">Rechazado</option>
                        <option value="Completada">Aceptado</option>

                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Biblioteca\Desktop\proyecto\proyectoWeb\resources\views/create.blade.php ENDPATH**/ ?>