<?php

namespace App\Http\Livewire\Declarationstatus;

use App\Models\Declarationstatus;
use Livewire\Component;

class Edit extends Component
{
    public Declarationstatus $declarationstatus;

    public function mount(Declarationstatus $declarationstatus)
    {
        $this->declarationstatus = $declarationstatus;
    }

    public function render()
    {
        return view('livewire.declarationstatus.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->declarationstatus->save();

        return redirect()->route('admin.declarationstatuses.index');
    }

    protected function rules(): array
    {
        return [
            'declarationstatus.name' => [
                'string',
                'required',
                'unique:declarationstatuses,name,' . $this->declarationstatus->id,
            ],
        ];
    }
}
