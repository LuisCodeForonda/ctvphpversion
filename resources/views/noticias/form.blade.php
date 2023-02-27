<label for="titulo">Titulo</label>
<input type="text" name="titulo" id="titulo" value="{{ old('titulo', $noticia->titulo ) }}">
@error('titulo')
    <small style="color: red;">{{ $message }}</small>
@enderror
<br>

<label for="foto">Foto</label>
<img src="{{ asset('storage').'/'.$noticia->foto }}" alt="" width="200px" height="200px">
<input type="file" name="foto" id="foto">
@error('foto')
    <small style="color: red;">{{ $message }}</small>
@enderror
<br>

<label for="cuerpo">Cuerpo</label>
<textarea name="cuerpo" id="editor">
    {{ old('cuerpo', $noticia->cuerpo) }}
</textarea>
@error('cuerpo')
    <small style="color: red;">{{ $message }}</small>
@enderror
<br>

<label for="fecha_hora">Fecha Hora</label>
<input type="datetime-local" name="fecha_hora" id="fecha_hora" value="{{ old('fecha_hora', $noticia->fecha_hora ) }}">
@error('fecha_hora')
    <small style="color: red;">{{ $message }}</small>
@enderror
<br>

<input type="radio" name="categoria" id="" value="1" checked @if (old('dia') == 1 || $noticia->categoria == 1)
checked
@endif>
<label for="categoria">Sociedad</label>
<input type="radio" name="categoria" id="" value="2" @if (old('dia') == 2 || $noticia->categoria == 2)
        checked
    @endif>
<label for="categoria">Desastres y accidentes</label>
<input type="radio" name="categoria" id="" value="3" @if (old('dia') == 3 || $noticia->categoria == 3)
        checked
    @endif>
<label for="categoria">Seguridad</label>
<input type="radio" name="categoria" id="" value="4" @if (old('dia') == 4 || $noticia->categoria == 4)
        checked
    @endif>
<label for="categoria">Deportes</label>
<input type="radio" name="categoria" id="" value="5" @if (old('dia') == 5 || $noticia->categoria == 5)
        checked
    @endif>
<label for="categoria">Politica</label>
<input type="radio" name="categoria" id="" value="6" @if (old('dia') == 6 || $noticia->categoria == 6)
        checked
    @endif>
<label for="categoria">Entrenamiento</label>

