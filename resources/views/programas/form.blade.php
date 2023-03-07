<div class="card">
    <div class="card-body">

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre"
                value="{{ old('nombre', $programa->nombre) }}">
            @error('nombre')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <img src="{{ asset('storage') . '/' . $programa->foto }}" alt="" width="200px" height="200px">
            <label for="formFile" class="form-label">Foto</label>
            <input class="form-control" type="file" name="foto" id="formFile">
            @error('foto')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        {{--
        <label for="foto">
            Foto:
            <img src="{{ asset('storage') . '/' . $programa->foto }}" alt="" width="200px" height="200px">
            <input type="file" name="foto" id="foto" src=" {{ $programa->foto }}">
            @error('foto')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </label>
        <br> --}}

        <div class="mb-3">
            <label for="hora_inicio" class="form-label">Hora inicio</label>
            <input type="time" name="hora_inicio" class="form-control" id="hora_inicio"
                value="{{ old('hora_inicio', $programa->hora_inicio) }}">
            @error('hora_inicio')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        {{--
        <label for="hora_inicio">
            Hora inicio:
            <input type="time" name="hora_inicio" id="hora_inicio"
                value="{{ old('hora_inicio', $programa->hora_inicio) }}">
            @error('hora_inicio')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </label>
        <br> --}}

        <div class="mb-3">
            <label for="hora_fin" class="form-label">Hora inicio</label>
            <input type="time" name="hora_fin" class="form-control" id="hora_fin"
                value="{{ old('hora_fin', $programa->hora_fin) }}">
            @error('hora_fin')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        {{--
        <label for="hora_fin">
            Hora fin:
            <input type="time" name="hora_fin" id="hora_fin" value="{{ old('hora_fin', $programa->hora_fin) }}">
            @error('hora_fin')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </label>
        <br> --}}

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <textarea name="descripcion" class="form-control" id="descripcion" rows="3">
                {{ old('descripcion', $programa->descripcion) }}
            </textarea>
            @error('descripcion')
            <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        {{--
        <label for="descripcion">
            Descripcion:
        </label>
        <br>
        <textarea name="descripcion" id="" cols="30" rows="10">
        {{ old('descripcion', $programa->descripcion) }}
        </textarea>
        @error('descripcion')
            <small style="color: red;">{{ $message }}</small>
        @enderror
        <br>--}}

        <div class="mb-3">
            <label for="categoria" class="form-label">Categoria</label>
            
            <div class="form-check">
                <input class="form-check-input" type="radio" name="categoria" id="dia1" value="1" checked @if (old('categoria') == 1 || $programa->categoria == 1) checked @endif>
                <label class="form-check-label" for="dia1">
                    Religiosos
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="categoria" id="dia2" value="2" @if (old('categoria') == 2 || $programa->categoria == 2) checked @endif>
                <label class="form-check-label" for="dia2">
                    Noticieros
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="categoria" id="dia3" value="3" @if (old('categoria') == 3 || $programa->categoria == 3) checked @endif>
                <label class="form-check-label" for="dia3">
                    Analisis
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="categoria" id="dia4" value="4" @if (old('categoria') == 4 || $programa->categoria == 4) checked @endif>
                <label class="form-check-label" for="dia4">
                    Familiares
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="categoria" id="dia5" value="5" @if (old('categoria') == 5 || $programa->categoria == 5) checked @endif>
                <label class="form-check-label" for="dia5">
                    Entrenamiento
                </label>
            </div>

            @error('descripcion')
                <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        {{--
        <label for="categoria">Categoria</label>
        <input type="radio" name="categoria" id="" value="1" checked
            @if (old('categoria') == 1 || $programa->categoria == 1) checked @endif>
        <label for="categoria">Religiosos</label>
        <input type="radio" name="categoria" id="" value="2"
            @if (old('categoria') == 2 || $programa->categoria == 2) checked @endif>
        <label for="categoria">Noticieros</label>
        <input type="radio" name="categoria" id="" value="3"
            @if (old('categoria') == 3 || $programa->categoria == 3) checked @endif>
        <label for="categoria">Analisis</label>
        <input type="radio" name="categoria" id="" value="4"
            @if (old('categoria') == 4 || $programa->categoria == 4) checked @endif>
        <label for="categoria">Familiares</label>
        <input type="radio" name="categoria" id="" value="5"
            @if (old('categoria') == 5 || $programa->categoria == 5) checked @endif>
        <label for="categoria">Entrenamiento</label>
        <br>--}}

        <!-- Redes Sociales-->
        <label for="facebook" class="form-label">Links de redes sociales (Opcional)</label>
        <div class="mb-3">
            <label for="facebook" class="form-label">Facebook</label>
            <input type="url" name="facebook" class="form-control" id="facebook"
                value="{{ old('facebook', $programa->facebook) }}">
        </div>

        <div class="mb-3">
            <label for="twitter" class="form-label">Twitter</label>
            <input type="url" name="twitter" class="form-control" id="twitter"
                value="{{ old('twitter', $programa->twitter) }}">
        </div>

        <div class="mb-3">
            <label for="instagram" class="form-label">Instagram</label>
            <input type="url" name="instagram" class="form-control" id="instagram"
                value="{{ old('instagram', $programa->instagram) }}">
        </div>


        <div class="mb-3">
            <label for="tiktok" class="form-label">Tik tok</label>
            <input type="url" name="tiktok" class="form-control" id="tiktok"
                value="{{ old('tiktok', $programa->tiktok) }}">
        </div>

        <div class="mb-3">
            <label for="youtube" class="form-label">You tube</label>
            <input type="url" name="youtube" class="form-control" id="youtube"
                value="{{ old('youtube', $programa->youtube) }}">
        </div>

        {{--
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
        --}}

    </div>
</div>
