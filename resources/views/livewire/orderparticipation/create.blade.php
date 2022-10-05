<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('orderparticipation.order_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="order">{{ trans('cruds.orderparticipation.fields.order') }}</label>
        <x-select-list class="form-control" required id="order" name="order" :options="$this->listsForFields['order']" wire:model="orderparticipation.order_id" />
        <div class="validation-message">
            {{ $errors->first('orderparticipation.order_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.orderparticipation.fields.order_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('orderparticipation.user_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="user">{{ trans('cruds.orderparticipation.fields.user') }}</label>
        <x-select-list class="form-control" required id="user" name="user" :options="$this->listsForFields['user']" wire:model="orderparticipation.user_id" />
        <div class="validation-message">
            {{ $errors->first('orderparticipation.user_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.orderparticipation.fields.user_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('orderparticipation.status_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="status">{{ trans('cruds.orderparticipation.fields.status') }}</label>
        <x-select-list class="form-control" required id="status" name="status" :options="$this->listsForFields['status']" wire:model="orderparticipation.status_id" />
        <div class="validation-message">
            {{ $errors->first('orderparticipation.status_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.orderparticipation.fields.status_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.orderparticipations.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>