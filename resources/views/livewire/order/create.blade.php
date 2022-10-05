<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('order.ordersort') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.order.fields.ordersort') }}</label>
        <select class="form-control" wire:model="order.ordersort">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['ordersort'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('order.ordersort') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.ordersort_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.ordertype_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="ordertype">{{ trans('cruds.order.fields.ordertype') }}</label>
        <x-select-list class="form-control" required id="ordertype" name="ordertype" :options="$this->listsForFields['ordertype']" wire:model="order.ordertype_id" />
        <div class="validation-message">
            {{ $errors->first('order.ordertype_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.ordertype_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.order.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="order.name">
        <div class="validation-message">
            {{ $errors->first('order.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.location') ? 'invalid' : '' }}">
        <label class="form-label required" for="location">{{ trans('cruds.order.fields.location') }}</label>
        <input class="form-control" type="text" name="location" id="location" required wire:model.defer="order.location">
        <div class="validation-message">
            {{ $errors->first('order.location') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.location_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.address') ? 'invalid' : '' }}">
        <label class="form-label required" for="address">{{ trans('cruds.order.fields.address') }}</label>
        <input class="form-control" type="text" name="address" id="address" required wire:model.defer="order.address">
        <div class="validation-message">
            {{ $errors->first('order.address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.address_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.city') ? 'invalid' : '' }}">
        <label class="form-label required" for="city">{{ trans('cruds.order.fields.city') }}</label>
        <input class="form-control" type="text" name="city" id="city" required wire:model.defer="order.city">
        <div class="validation-message">
            {{ $errors->first('order.city') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.city_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.description') ? 'invalid' : '' }}">
        <label class="form-label required" for="description">{{ trans('cruds.order.fields.description') }}</label>
        <textarea class="form-control" name="description" id="description" required wire:model.defer="order.description" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('order.description') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.description_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.participation_possible') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.order.fields.participation_possible') }}</label>
        @foreach($this->listsForFields['participation_possible'] as $key => $value)
            <label class="radio-label"><input type="radio" name="participation_possible" wire:model="order.participation_possible" value="{{ $key }}">{{ $value }}</label>
        @endforeach
        <div class="validation-message">
            {{ $errors->first('order.participation_possible') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.participation_possible_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.date') ? 'invalid' : '' }}">
        <label class="form-label required" for="date">{{ trans('cruds.order.fields.date') }}</label>
        <x-date-picker class="form-control" required wire:model="order.date" id="date" name="date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('order.date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.start_time') ? 'invalid' : '' }}">
        <label class="form-label required" for="start_time">{{ trans('cruds.order.fields.start_time') }}</label>
        <x-date-picker class="form-control" required wire:model="order.start_time" id="start_time" name="start_time" picker="time" />
        <div class="validation-message">
            {{ $errors->first('order.start_time') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.start_time_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('order.end_time') ? 'invalid' : '' }}">
        <label class="form-label required" for="end_time">{{ trans('cruds.order.fields.end_time') }}</label>
        <x-date-picker class="form-control" required wire:model="order.end_time" id="end_time" name="end_time" picker="time" />
        <div class="validation-message">
            {{ $errors->first('order.end_time') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.end_time_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>