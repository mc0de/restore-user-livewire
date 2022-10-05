<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('availabilty.user_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="user">{{ trans('cruds.availabilty.fields.user') }}</label>
        <x-select-list class="form-control" required id="user" name="user" :options="$this->listsForFields['user']" wire:model="availabilty.user_id" />
        <div class="validation-message">
            {{ $errors->first('availabilty.user_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.availabilty.fields.user_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('availabilty.type') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.availabilty.fields.type') }}</label>
        <select class="form-control" wire:model="availabilty.type">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['type'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('availabilty.type') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.availabilty.fields.type_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('availabilty.date') ? 'invalid' : '' }}">
        <label class="form-label required" for="date">{{ trans('cruds.availabilty.fields.date') }}</label>
        <x-date-picker class="form-control" required wire:model="availabilty.date" id="date" name="date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('availabilty.date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.availabilty.fields.date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('availabilty.start_time') ? 'invalid' : '' }}">
        <label class="form-label required" for="start_time">{{ trans('cruds.availabilty.fields.start_time') }}</label>
        <x-date-picker class="form-control" required wire:model="availabilty.start_time" id="start_time" name="start_time" picker="time" />
        <div class="validation-message">
            {{ $errors->first('availabilty.start_time') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.availabilty.fields.start_time_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('availabilty.end_time') ? 'invalid' : '' }}">
        <label class="form-label required" for="end_time">{{ trans('cruds.availabilty.fields.end_time') }}</label>
        <x-date-picker class="form-control" required wire:model="availabilty.end_time" id="end_time" name="end_time" picker="time" />
        <div class="validation-message">
            {{ $errors->first('availabilty.end_time') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.availabilty.fields.end_time_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.availabilties.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>