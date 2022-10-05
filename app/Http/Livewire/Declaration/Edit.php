<?php

namespace App\Http\Livewire\Declaration;

use App\Models\Declaration;
use App\Models\Declarationstatus;
use App\Models\Order;
use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public Declaration $declaration;

    public array $listsForFields = [];

    public function mount(Declaration $declaration)
    {
        $this->declaration = $declaration;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.declaration.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->declaration->save();

        return redirect()->route('admin.declarations.index');
    }

    protected function rules(): array
    {
        return [
            'declaration.user_id' => [
                'integer',
                'exists:users,id',
                'required',
            ],
            'declaration.order_id' => [
                'integer',
                'exists:orders,id',
                'required',
            ],
            'declaration.user_start_time' => [
                'required',
                'date_format:' . config('project.time_format'),
            ],
            'declaration.user_end_time' => [
                'required',
                'date_format:' . config('project.time_format'),
            ],
            'declaration.kilometers' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'declaration.status_id' => [
                'integer',
                'exists:declarationstatuses,id',
                'required',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['user']   = User::pluck('name', 'id')->toArray();
        $this->listsForFields['order']  = Order::pluck('name', 'id')->toArray();
        $this->listsForFields['status'] = Declarationstatus::pluck('name', 'id')->toArray();
    }
}
