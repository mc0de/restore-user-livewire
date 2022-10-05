<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('order_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Order" format="csv" />
                <livewire:excel-export model="Order" format="xlsx" />
                <livewire:excel-export model="Order" format="pdf" />
            @endif




        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.order.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.ordersort') }}
                            @include('components.table.sort', ['field' => 'ordersort'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.ordertype') }}
                            @include('components.table.sort', ['field' => 'ordertype.name'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.name') }}
                            @include('components.table.sort', ['field' => 'name'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.location') }}
                            @include('components.table.sort', ['field' => 'location'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.address') }}
                            @include('components.table.sort', ['field' => 'address'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.city') }}
                            @include('components.table.sort', ['field' => 'city'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.description') }}
                            @include('components.table.sort', ['field' => 'description'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.participation_possible') }}
                            @include('components.table.sort', ['field' => 'participation_possible'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.date') }}
                            @include('components.table.sort', ['field' => 'date'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.start_time') }}
                            @include('components.table.sort', ['field' => 'start_time'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.end_time') }}
                            @include('components.table.sort', ['field' => 'end_time'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $order)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $order->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $order->id }}
                            </td>
                            <td>
                                {{ $order->ordersort_label }}
                            </td>
                            <td>
                                @if($order->ordertype)
                                    <span class="badge badge-relationship">{{ $order->ordertype->name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $order->name }}
                            </td>
                            <td>
                                {{ $order->location }}
                            </td>
                            <td>
                                {{ $order->address }}
                            </td>
                            <td>
                                {{ $order->city }}
                            </td>
                            <td>
                                {{ $order->description }}
                            </td>
                            <td>
                                {{ $order->participation_possible_label }}
                            </td>
                            <td>
                                {{ $order->date }}
                            </td>
                            <td>
                                {{ $order->start_time }}
                            </td>
                            <td>
                                {{ $order->end_time }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('order_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.orders.show', $order) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('order_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.orders.edit', $order) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('order_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $order->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $orders->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush