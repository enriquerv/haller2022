<div class="tab-pane" id="tab1">
    <h2 class="hidden">&nbsp;</h2>

    <div class="form-group mt-4 {{ $errors->first('name') ? 'has-error' : '' }}">
        <label for="title" class="col-sm-2 control-label">Título *</label>
        <div class="col-sm-10">
            <input type="text" value="{{ isset($item) ? $item->title : '' }}" name='title' id='title' class="form-control" placeholder="Título">
            <span class="help-block">{{ $errors->first('title', ':message') }}</span>
        </div>
    </div>

    <div class="form-group mt-4 {{ $errors->first('name') ? 'has-error' : '' }}">
        <label for="description" class="col-sm-2 control-label">Descripción *</label>
        <div class="col-sm-10">
            <textarea type="text" name='description' id='description' class="form-control" placeholder="Descripción" rows="7">{{ isset($item) ? $item->description : '' }}</textarea>
            <span class="help-block">{{ $errors->first('description', ':message') }}</span>
        </div>
    </div>

    <div class="form-group mt-4 {{ $errors->first('name') ? 'has-error' : '' }}">
        <label for="image_1" class="col-sm-2 control-label">Imagen portada *</label>
        <div class="col-sm-10">
            <input type="file" name='image_1' id='image_1' class="form-control" placeholder="Portada">
            <span class="help-block">{{ $errors->first('image_1', ':message') }}</span>
            @if (isset($item))
                <span class="text-info">Si no deseas cambiar la imagen de portada, deja este campo vacío</span>
            @endif
        </div>
    </div>

    <div class="form-group mt-4 {{ $errors->first('name') ? 'has-error' : '' }}">
        <label for="image_2" class="col-sm-2 control-label">Imagen card *</label>
        <div class="col-sm-10">
            <input type="file" name='image_2' id='image_2' class="form-control" placeholder="Card">
            <span class="help-block">{{ $errors->first('image_2', ':message') }}</span>
            @if (isset($item))
                <span class="text-info">Si no deseas cambiar la imagen de card, deja este campo vacío</span>
            @endif
        </div>
    </div>

    <div class="form-group mt-4 {{ $errors->first('name') ? 'has-error' : '' }}">
        <label for="written_by" class="col-sm-2 control-label">Escrito por *</label>
        <div class="col-sm-10">
            <input type="text" value="{{ isset($item) ? $item->written_by : '' }}" name='written_by' id='written_by' class="form-control" placeholder="Escrito por">
            <span class="help-block">{{ $errors->first('written_by', ':message') }}</span>
        </div>
    </div>

    <div class="form-group mt-4 {{ $errors->first('name') ? 'has-error' : '' }}">
        <label for="available" class="col-sm-2 control-label">Activo *</label>
        <div class="col-sm-10">
            SI <input type="radio" id='available' name="available" class="inp-radio" value="1" {{ isset($item) ? ($item->available == 1 ? 'checked' : '') : '' }}>
            NO <input type="radio" id='available' name="available" class="inp-radio" value="0" {{ isset($item) ? ($item->available == 0 ? 'checked' : '') : '' }}>
            <span class="help-block">{{ $errors->first('available', ':message') }}</span>
        </div>
    </div>
</div>

<style>
    .inp-radio{
        width: 20px;
        height: 20px;
        margin-right: 50px !important;
    }
    .mt-4{
        margin-top: 1em;
    }
</style>