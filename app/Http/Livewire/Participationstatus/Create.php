<?php

namespace App\Http\Livewire\Participationstatus;

use App\Models\Participationstatus;
use Livewire\Component;

class Create extends Component
{
    public Participationstatus $participationstatus;

    public function mount(Participationstatus $participationstatus)
    {
        $this->participationstatus = $participationstatus;
    }

    public function render()
    {
        return view('livewire.participationstatus.create');
    }

    public function submit()
    {
        $this->validate();

        $this->participationstatus->save();

        return redirect()->route('admin.participationstatuses.index');
    }

    protected function rules(): array
    {
        return [
            'participationstatus.name' => [
                'string',
                'required',
                'unique:participationstatuses,name',
            ],
        ];
    }
}
