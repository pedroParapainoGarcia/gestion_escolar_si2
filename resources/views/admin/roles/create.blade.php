@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Nuevo Rol</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/roles') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nombre del rol</label>
                                    <input type="text" value="{{ old('name') }}" name="name" class="form-control"
                                        required>
                                    @error('name')
                                        <small style="color: red">{{ $message }}</small>
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
                                            id="{{ $permiso->name }}" class="switches name">
                                        <label for="{{ $permiso->name }}" class="switch">
                                            <span>{{ $permiso->description }}</span>
                                        </label>
                                        <br />
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ url('admin/roles') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-primary"><i class="bi bi-floppy2"></i> Guardar
                                    registro</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


