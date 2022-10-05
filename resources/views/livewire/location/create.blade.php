<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('location.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.location.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="location.name">
        <div class="validation-message">
            {{ $errors->first('location.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.location.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('location.address') ? 'invalid' : '' }}">
        <label class="form-label required" for="address">{{ trans('cruds.location.fields.address') }}</label>
        <input class="form-control" type="text" name="address" id="address" required wire:model.defer="location.address">
        <div class="validation-message">
            {{ $errors->first('location.address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.location.fields.address_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('location.city') ? 'invalid' : '' }}">
        <label class="form-label required" for="city">{{ trans('cruds.location.fields.city') }}</label>
        <input class="form-control" type="text" name="city" id="city" required wire:model.defer="location.city">
        <div class="validation-message">
            {{ $errors->first('location.city') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.location.fields.city_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.locations.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>