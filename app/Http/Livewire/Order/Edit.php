<?php

namespace App\Http\Livewire\Order;

use App\Models\Order;
use App\Models\Ordertype;
use Livewire\Component;

class Edit extends Component
{
    public Order $order;

    public array $listsForFields = [];

    public function mount(Order $order)
    {
        $this->order = $order;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.order.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->order->save();

        return redirect()->route('admin.orders.index');
    }

    protected function rules(): array
    {
        return [
            'order.ordersort' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['ordersort'])),
            ],
            'order.ordertype_id' => [
                'integer',
                'exists:ordertypes,id',
                'required',
            ],
            'order.name' => [
                'string',
                'required',
            ],
            'order.location' => [
                'string',
                'required',
            ],
            'order.address' => [
                'string',
                'required',
            ],
            'order.city' => [
                'string',
                'required',
            ],
            'order.description' => [
                'string',
                'required',
            ],
            'order.participation_possible' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['participation_possible'])),
            ],
            'order.date' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'order.start_time' => [
                'required',
                'date_format:' . config('project.time_format'),
            ],
            'order.end_time' => [
                'required',
                'date_format:' . config('project.time_format'),
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['ordersort']              = $this->order::ORDERSORT_SELECT;
        $this->listsForFields['ordertype']              = Ordertype::pluck('name', 'id')->toArray();
        $this->listsForFields['participation_possible'] = $this->order::PARTICIPATION_POSSIBLE_RADIO;
    }
}
