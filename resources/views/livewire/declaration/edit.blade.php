<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('declaration.user_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="user">{{ trans('cruds.declaration.fields.user') }}</label>
        <x-select-list class="form-control" required id="user" name="user" :options="$this->listsForFields['user']" wire:model="declaration.user_id" />
        <div class="validation-message">
            {{ $errors->first('declaration.user_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.declaration.fields.user_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('declaration.order_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="order">{{ trans('cruds.declaration.fields.order') }}</label>
        <x-select-list class="form-control" required id="order" name="order" :options="$this->listsForFields['order']" wire:model="declaration.order_id" />
        <div class="validation-message">
            {{ $errors->first('declaration.order_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.declaration.fields.order_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('declaration.user_start_time') ? 'invalid' : '' }}">
        <label class="form-label required" for="user_start_time">{{ trans('cruds.declaration.fields.user_start_time') }}</label>
        <x-date-picker class="form-control" required wire:model="declaration.user_start_time" id="user_start_time" name="user_start_time" picker="time" />
        <div class="validation-message">
            {{ $errors->first('declaration.user_start_time') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.declaration.fields.user_start_time_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('declaration.user_end_time') ? 'invalid' : '' }}">
        <label class="form-label required" for="user_end_time">{{ trans('cruds.declaration.fields.user_end_time') }}</label>
        <x-date-picker class="form-control" required wire:model="declaration.user_end_time" id="user_end_time" name="user_end_time" picker="time" />
        <div class="validation-message">
            {{ $errors->first('declaration.user_end_time') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.declaration.fields.user_end_time_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('declaration.kilometers') ? 'invalid' : '' }}">
        <label class="form-label required" for="kilometers">{{ trans('cruds.declaration.fields.kilometers') }}</label>
        <input class="form-control" type="number" name="kilometers" id="kilometers" required wire:model.defer="declaration.kilometers" step="1">
        <div class="validation-message">
            {{ $errors->first('declaration.kilometers') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.declaration.fields.kilometers_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('declaration.status_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="status">{{ trans('cruds.declaration.fields.status') }}</label>
        <x-select-list class="form-control" required id="status" name="status" :options="$this->listsForFields['status']" wire:model="declaration.status_id" />
        <div class="validation-message">
            {{ $errors->first('declaration.status_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.declaration.fields.status_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.declarations.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>