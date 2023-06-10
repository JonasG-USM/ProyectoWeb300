@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Editar propuesta</h2>
        </div>
        <div>
            <a href="{{route('tasks.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    <form action="{{route('tasks.update',$task)}}" method="POST">
        @csrf 
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Propuesta:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Propuesta" value="{{$task->title}}">
                    <form method ="post" action="accion.php" enctype="multipart/form-data">
                        ingrese la propuesta
                        <input name="documento" type="file"/>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Comentario::</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Generar comentario...">{{$task->description}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Fecha:</strong>
                    <input type="date" name="due_date" class="form-control" value={{$task->due_date}} id="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Estado:</strong>
                    <select name="status" class="form-select" id="">
                        <option value="">-- Elige el status --</option>
                        <option value="Pendiente" @selected("Pendiente" == $task->status)>Esperando Revisión</option>
                        <option value="En progreso" @selected("En progreso" == $task->status)>Modificar propuesta</option>
                        <option value="Completada" @selected("Completada" == $task->status)>Rechazado</option>
                        <option value="Completada" @selected("Completada" == $task->status)>Aceptado</option>


                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>
</div>
@endsection
