@extends('layouts.app');

@section('content')
    <div class="container">
        <form>
            <div class="form-group">
              <label for="titulo">{{ __('Titulo') }}</label>
              <input type="titulo" class="form-control" id="titulo" aria-describedby="titulo">
            </div>
            <div class="form-group">
              <label for="contenido">{{ __('Contenido') }}</label>
              <textarea class="form-control" id="contenido" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label class="form-check-label" for="imagenprincipal">{{ __('Imagen Principal') }}</label>
              <input type="file" class="custom-file-input" id="imagenprincipal" required>
            </div>
            <div class="form-group">
                <label class="form-check-label" for="imagensecundaria">{{ __('Imagen Secundaria') }}</label>
                <input type="file" class="custom-file-input" id="imagensecundaria" required>
            </div>
            <div class="form-group">
                <label for="descripcionimagen">{{ __('Descripcion de la Imagen Secundaria') }}</label>
                <input type="text" class="form-control" id="descripcionimagen" aria-describedby="descripcionimagen">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
          </form>
    </div>
@endsection