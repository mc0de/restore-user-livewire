<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('ordercompetence.order_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="order">{{ trans('cruds.ordercompetence.fields.order') }}</label>
        <x-select-list class="form-control" required id="order" name="order" :options="$this->listsForFields['order']" wire:model="ordercompetence.order_id" />
        <div class="validation-message">
            {{ $errors->first('ordercompetence.order_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.ordercompetence.fields.order_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('ordercompetence.competence_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="competence">{{ trans('cruds.ordercompetence.fields.competence') }}</label>
        <x-select-list class="form-control" required id="competence" name="competence" :options="$this->listsForFields['competence']" wire:model="ordercompetence.competence_id" />
        <div class="validation-message">
            {{ $errors->first('ordercompetence.competence_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.ordercompetence.fields.competence_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('ordercompetence.number') ? 'invalid' : '' }}">
        <label class="form-label required" for="number">{{ trans('cruds.ordercompetence.fields.number') }}</label>
        <input class="form-control" type="number" name="number" id="number" required wire:model.defer="ordercompetence.number" step="1">
        <div class="validation-message">
            {{ $errors->first('ordercompetence.number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.ordercompetence.fields.number_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.ordercompetences.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>