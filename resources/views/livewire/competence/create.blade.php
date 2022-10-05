<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('competence.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.competence.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="competence.name">
        <div class="validation-message">
            {{ $errors->first('competence.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.competence.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('competence.type') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.competence.fields.type') }}</label>
        <select class="form-control" wire:model="competence.type">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['type'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('competence.type') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.competence.fields.type_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.competences.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>