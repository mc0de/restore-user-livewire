<?php

namespace App\Http\Livewire\Competence;

use App\Models\Competence;
use Livewire\Component;

class Edit extends Component
{
    public Competence $competence;

    public array $listsForFields = [];

    public function mount(Competence $competence)
    {
        $this->competence = $competence;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.competence.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->competence->save();

        return redirect()->route('admin.competences.index');
    }

    protected function rules(): array
    {
        return [
            'competence.name' => [
                'string',
                'required',
                'unique:competences,name,' . $this->competence->id,
            ],
            'competence.type' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['type'])),
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['type'] = $this->competence::TYPE_SELECT;
    }
}
