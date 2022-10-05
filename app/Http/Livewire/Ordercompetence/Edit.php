<?php

namespace App\Http\Livewire\Ordercompetence;

use App\Models\Competence;
use App\Models\Order;
use App\Models\Ordercompetence;
use Livewire\Component;

class Edit extends Component
{
    public array $listsForFields = [];

    public Ordercompetence $ordercompetence;

    public function mount(Ordercompetence $ordercompetence)
    {
        $this->ordercompetence = $ordercompetence;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.ordercompetence.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->ordercompetence->save();

        return redirect()->route('admin.ordercompetences.index');
    }

    protected function rules(): array
    {
        return [
            'ordercompetence.order_id' => [
                'integer',
                'exists:orders,id',
                'required',
            ],
            'ordercompetence.competence_id' => [
                'integer',
                'exists:competences,id',
                'required',
            ],
            'ordercompetence.number' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['order']      = Order::pluck('name', 'id')->toArray();
        $this->listsForFields['competence'] = Competence::pluck('name', 'id')->toArray();
    }
}
