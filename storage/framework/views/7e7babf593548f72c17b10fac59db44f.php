

<?php $__env->startSection('content'); ?>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                  <div class="mb-md-5 mt-md-4 pb-5">

                    <h2 class="fw-bold mb-2 text-uppercase">Iniciar Sesión</h2>
                    <p class="text-white-50 mb-4">Seleccione como desea ingresar</p>
                    <select class="form-select" aria-label="Default select example">
                        <option value="">-- Seleccione --</option>
                        <option value="1">Alumno</option>
                        <option value="2">Profesor</option>
                        <option value="3">Administrador</option>
                    </select>
                    <div class="form-group">
                      <p class="text-white-50 mb-4">Seleccione usuario</p>
                      <select name="status" class="form-select" id="">
                          <option value="">-- Seleccione --</option>
                          <option value="">Nicolás González </option>
                          <option value=""> Jonas González </option>
                          <option value=""> Carlos Altén </option>
                      </select>
                      <label for="inputpassword5" class="form-label"></label>
                      <input type="password" id="inputpassword5" class="form-control" aria-labelledby="passwordHelpBlock">
                      <div id="passwordHelpBlock" class=form-text>
                        <p class="text-white-50 mb-4">Ingrese su contraseña</p>
                      </div>
                  </div>

                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!"></a></p>

                    
                    <a href="<?php echo e(route('tasks.index')); ?>" class="btn btn-outline-light btn-lg px-5"type="submit">Ingresar</a>

                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                      <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                    </div>

                  </div>



                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Biblioteca\Desktop\proyecto\proyectoWeb\resources\views/login.blade.php ENDPATH**/ ?>