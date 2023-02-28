<label for="nombre">
    Nombre:
    <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $programa->nombre) }}">
    @error('nombre')
    <small style="color: red;">{{ $message }}</small>   
    @enderror
</label>
<br>

<label for="foto">
    Foto:
    <img src="{{ asset('storage').'/'.$programa->foto }}" alt="" width="200px" height="200px">
    <input type="file" name="foto" id="foto" src=" {{ $programa->foto }}">
    @error('foto')
    <small style="color: red;">{{ $message }}</small>   
    @enderror
</label>
<br>


<label for="hora_inicio">
    Hora inicio:
    <input type="time" name="hora_inicio" id="hora_inicio" value="{{ old('hora_inicio', $programa->hora_inicio) }}">
    @error('hora_inicio')
    <small style="color: red;">{{ $message }}</small>   
    @enderror
</label>
<br>

<label for="hora_fin">
    Hora fin:
    <input type="time" name="hora_fin" id="hora_fin" value="{{ old('hora_fin', $programa->hora_fin) }}">
    @error('hora_fin')
    <small style="color: red;">{{ $message }}</small>   
    @enderror
</label>
<br>

<label for="descripcion">
    Descripcion:
</label>
<br>
<textarea name="descripcion" id="" cols="30" rows="10">
{{old('descripcion', $programa->descripcion)}}
</textarea>
@error('descripcion')
    <small style="color: red;">{{ $message }}</small>   
    @enderror
<br>

<label for="categoria">Categoria</label>
<input type="radio" name="categoria" id="" value="1" checked @if (old('categoria') == 1 || $programa->categoria == 1)
checked
@endif>
<label for="categoria">Religiosos</label>
<input type="radio" name="categoria" id="" value="2" @if (old('categoria') == 2 || $programa->categoria == 2)
        checked
    @endif>
<label for="categoria">Noticieros</label>
<input type="radio" name="categoria" id="" value="3" @if (old('categoria') == 3 || $programa->categoria == 3)
        checked
    @endif>
<label for="categoria">Analisis</label>
<input type="radio" name="categoria" id="" value="4" @if (old('categoria') == 4 || $programa->categoria == 4)
        checked
    @endif>
<label for="categoria">Familiares</label>
<input type="radio" name="categoria" id="" value="5" @if (old('categoria') == 5 || $programa->categoria == 5)
        checked
    @endif>
<label for="categoria">Entrenamiento</label>
<br>

<!-- Redes Sociales-->
<label for="facebook">
    Facebook:
    <input type="url" name="facebook" id="facebook" value="{{ old('facebook', $programa->facebook) }}">
</label>
<br>

<label for="twitter">
    Twitter:
    <input type="url" name="twitter" id="twitter" value="{{ old('twitter', $programa->twitter) }}">
</label>
<br>

<label for="instagram">
    Instagram:
    <input type="url" name="instagram" id="instagram" value="{{ old('instagram', $programa->instagram) }}">
</label>
<br>

<label for="tiktok">
    Tik tok:
    <input type="url" name="tiktok" id="tiktok" value="{{ old('tiktok', $programa->tiktok) }}">
</label>
<br>

<label for="youtube">
    You tube:
    <input type="url" name="youtube" id="youtube" value="{{ old('youtube', $programa->youtube) }}">
</label>
<br>




