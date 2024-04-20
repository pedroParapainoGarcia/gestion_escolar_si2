@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Modificación de datos del Rol</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('/admin/roles',$rol->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nombre del Rol</label>
                                    <input type="text" value="{{$rol->name}}" name="name" class="form-control" required>
                                    @error('name')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <label for="">Permisos para este Rol:</label>
                        <div class="row g-3">
                            <br />
                            @foreach ($permission as $permiso)
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <input type="checkbox" name="permission[]" value="{{ $permiso->name }}"
                                        @if (in_array($permiso->name, $rolePermissions)) checked @endif>
                                        {{ $permiso->description }}
                                        <br />
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        
                     
                       
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{url('admin/usuarios')}}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-success"><i class="bi bi-pencil-square"></i> Actualizar registro</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
