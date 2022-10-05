<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('declaration_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Declaration" format="csv" />
                <livewire:excel-export model="Declaration" format="xlsx" />
                <livewire:excel-export model="Declaration" format="pdf" />
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
                            {{ trans('cruds.declaration.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.declaration.fields.user') }}
                            @include('components.table.sort', ['field' => 'user.name'])
                        </th>
                        <th>
                            {{ trans('cruds.declaration.fields.order') }}
                            @include('components.table.sort', ['field' => 'order.name'])
                        </th>
                        <th>
                            {{ trans('cruds.order.fields.date') }}
                            @include('components.table.sort', ['field' => 'order.date'])
                        </th>
                        <th>
                            {{ trans('cruds.declaration.fields.user_start_time') }}
                            @include('components.table.sort', ['field' => 'user_start_time'])
                        </th>
                        <th>
                            {{ trans('cruds.declaration.fields.user_end_time') }}
                            @include('components.table.sort', ['field' => 'user_end_time'])
                        </th>
                        <th>
                            {{ trans('cruds.declaration.fields.kilometers') }}
                            @include('components.table.sort', ['field' => 'kilometers'])
                        </th>
                        <th>
                            {{ trans('cruds.declaration.fields.status') }}
                            @include('components.table.sort', ['field' => 'status.name'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($declarations as $declaration)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $declaration->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $declaration->id }}
                            </td>
                            <td>
                                @if($declaration->user)
                                    <span class="badge badge-relationship">{{ $declaration->user->name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($declaration->order)
                                    <span class="badge badge-relationship">{{ $declaration->order->name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($declaration->order)
                                    {{ $declaration->order->date ?? '' }}
                                @endif
                            </td>
                            <td>
                                {{ $declaration->user_start_time }}
                            </td>
                            <td>
                                {{ $declaration->user_end_time }}
                            </td>
                            <td>
                                {{ $declaration->kilometers }}
                            </td>
                            <td>
                                @if($declaration->status)
                                    <span class="badge badge-relationship">{{ $declaration->status->name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('declaration_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.declarations.show', $declaration) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('declaration_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.declarations.edit', $declaration) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('declaration_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $declaration->id }})" wire:loading.attr="disabled">
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
            {{ $declarations->links() }}
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