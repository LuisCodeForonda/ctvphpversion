<label for="nombre">Nombre:</label>
<input type="text" name="nombre" id="nombre" value="{{ old('nombre', $miniatura->nombre)}}">
@error('nombre')
    <small style="color: red;">{{ $message }}</small>
@enderror

<br>

<label for="foto">Foto:</label>
<img src="{{ asset('storage').'/'.$miniatura->foto }}" alt="" width="200px" height="200px">
<input type="file" name="foto" id="foto" value="{{ old('foto', $miniatura->foto)}}">
@error('foto')
    <small style="color: red;">{{ $message }}</small>
@enderror
<br>
