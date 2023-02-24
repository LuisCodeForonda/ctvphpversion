<label for="nombre">
    Nombre:
    <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $programacion->nombre)}}">
    @error('nombre')
    <small style="color: red;">{{ $message }}</small>   
    @enderror
</label>
<br>
<label for="hora">
    Hora:
    <input type="time" name="hora" id="hora" value="{{ old('hora', $programacion->hora)}}">
    @error('hora')
    <small style="color: red;">{{ $message }}</small>   
    @enderror
</label>
<br>

<label for="dias">
    Dias:
    <input type="radio" name="dia" id="dias" value="0" @if (old('dia') == 0 || $programacion->dia == 0)
        checked
    @endif>
    <span>Lunes a Viernes</span>
    <input type="radio" name="dia" id="dias" value="1" @if (old('dia') == 1 || $programacion->dia == 1)
    checked
    @endif>
    <span>Sabados</span>
    <input type="radio" name="dia" id="dias" value="2"  @if (old('dia') == 2 || $programacion->dia == 2)
    checked
    @endif>
    <span>Domingos</span>
</label>
<br>