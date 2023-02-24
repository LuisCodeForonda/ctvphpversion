<label for="nombre">Nombre:</label>
<input type="text" name="nombre" id="nombre" value="{{ old('nombre', $banner->nombre)}}">
@error('nombre')
    <small style="color: red;">{{ $message }}</small>
@enderror

<br>

<label for="logo">Logo:</label>
<img src="{{ asset('storage').'/'.$banner->logo }}" alt="" width="200px" height="200px">
<input type="file" name="logo" id="logo" value="{{ old('logo', $banner->logo)}}">
@error('logo')
    <small style="color: red;">{{ $message }}</small>
@enderror
<br>

<label for="hora">Hora:</label>
<input type="time" name="hora" id="hora" value="{{ old('hora', $banner->hora)}}">
@error('hora')
    <small style="color: red;">{{ $message }}</small>
@enderror
<br>
