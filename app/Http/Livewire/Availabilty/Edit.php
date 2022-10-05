<?php

namespace App\Http\Livewire\Availabilty;

use App\Models\Availabilty;
use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public Availabilty $availabilty;

    public array $listsForFields = [];

    public function mount(Availabilty $availabilty)
    {
        $this->availabilty = $availabilty;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.availabilty.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->availabilty->save();

        return redirect()->route('admin.availabilties.index');
    }

    protected function rules(): array
    {
        return [
            'availabilty.user_id' => [
                'integer',
                'exists:users,id',
                'required',
            ],
            'availabilty.type' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['type'])),
            ],
            'availabilty.date' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'availabilty.start_time' => [
                'required',
                'date_format:' . config('project.time_format'),
            ],
            'availabilty.end_time' => [
                'required',
                'date_format:' . config('project.time_format'),
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['user'] = User::pluck('name', 'id')->toArray();
        $this->listsForFields['type'] = $this->availabilty::TYPE_SELECT;
    }
}
