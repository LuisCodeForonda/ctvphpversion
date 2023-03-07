
<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $programacion->nombre) }}">

    @error('nombre')
        <small style="color: red;">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="hora" class="form-label">Hora</label>
    <input type="time" name="hora" class="form-control" value="{{ old('hora', $programacion->hora) }}">

    @error('hora')
        <small style="color: red;">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="dia" class="form-label">Dias</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="dia" id="dia1" value="0" @if (old('dia') == 0 || $programacion->dia == 0) checked @endif>
        <label class="form-check-label" for="dia1">
            Lunes a Viernes
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="dia" id="dia2" value="1" @if (old('dia') == 1 || $programacion->dia == 1) checked @endif>
        <label class="form-check-label" for="dia2">
            Sabados
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="dia" id="dia3" value="2" @if (old('dia') == 2 || $programacion->dia == 2) checked @endif>
        <label class="form-check-label" for="dia3">
            Domingos
        </label>
    </div>
    @error('dia')
        <small style="color: red;">{{ $message }}</small>
    @enderror
</div>
