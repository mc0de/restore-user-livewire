<?php

namespace App\Http\Livewire\Ordertype;

use App\Models\Ordertype;
use Livewire\Component;

class Edit extends Component
{
    public Ordertype $ordertype;

    public array $listsForFields = [];

    public function mount(Ordertype $ordertype)
    {
        $this->ordertype = $ordertype;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.ordertype.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->ordertype->save();

        return redirect()->route('admin.ordertypes.index');
    }

    protected function rules(): array
    {
        return [
            'ordertype.name' => [
                'string',
                'required',
                'unique:ordertypes,name,' . $this->ordertype->id,
            ],
            'ordertype.type' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['type'])),
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['type'] = $this->ordertype::TYPE_SELECT;
    }
}
