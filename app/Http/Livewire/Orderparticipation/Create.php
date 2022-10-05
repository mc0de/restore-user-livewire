<?php

namespace App\Http\Livewire\Orderparticipation;

use App\Models\Order;
use App\Models\Orderparticipation;
use App\Models\Participationstatus;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public array $listsForFields = [];

    public Orderparticipation $orderparticipation;

    public function mount(Orderparticipation $orderparticipation)
    {
        $this->orderparticipation = $orderparticipation;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.orderparticipation.create');
    }

    public function submit()
    {
        $this->validate();

        $this->orderparticipation->save();

        return redirect()->route('admin.orderparticipations.index');
    }

    protected function rules(): array
    {
        return [
            'orderparticipation.order_id' => [
                'integer',
                'exists:orders,id',
                'required',
            ],
            'orderparticipation.user_id' => [
                'integer',
                'exists:users,id',
                'required',
            ],
            'orderparticipation.status_id' => [
                'integer',
                'exists:participationstatuses,id',
                'required',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['order']  = Order::pluck('name', 'id')->toArray();
        $this->listsForFields['user']   = User::pluck('name', 'id')->toArray();
        $this->listsForFields['status'] = Participationstatus::pluck('name', 'id')->toArray();
    }
}
