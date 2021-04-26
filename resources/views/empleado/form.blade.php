    <h1>{{ $modo }} empleado </h1>

@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
    <ul>
         @foreach( $errors->all() as $error )
            <li>{{ $error }} </li>
        @endforeach
    </ul>
</div>

   

@endif


    <div class="form-group">
    <lable for="Nombre"> Nombre </lable>
    <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="Nombre">
    </div>

    <div class="form-group">
    <lable for="ApellidoP"> ApellidoP </lable>
    <input type="text" class="form-control" name="ApellidoP" value="{{ isset($empleado->ApellidoP)?$empleado->ApellidoP:old('ApellidoP') }}" id="ApellidoP">
    </div>

    <div class="form-group">
    <lable for="ApellidoM"> ApellidoM </lable>
    <input type="text" class="form-control" name="ApellidoM" value="{{isset($empleado->ApellidoM)?$empleado->ApellidoM:old('ApellidoM') }}" id="ApellidoM">
    </div>

    <div class="form-group">
    <lable for="Correo"> Correo </lable>
    <input type="text" class="form-control" name="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo') }}" id="Correo">
    </div>

    <div class="form-group">
    <label for="Foto"> </lable>
    @if(isset($empleado->Foto))
    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">
    @endif
    <input type="file" name="Foto" value="" id="Foto">

    </div>
    

    <input class="btn btn-success" type="submit" value="{{ $modo }} datos" >

    <a class="btn btn-primary" href="{{ url('empleado/') }}">Regresar</a>
    <br>