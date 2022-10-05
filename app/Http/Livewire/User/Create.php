<?php

namespace App\Http\Livewire\User;

use App\Models\Competence;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public User $user;

    public array $roles = [];

    public string $password = '';

    public array $competence = [];

    public array $listsForFields = [];

    public function mount(User $user)
    {
        $this->user = $user;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.user.create');
    }

    public function submit()
    {
        $this->validate();
        $this->user->password = $this->password;
        $this->user->save();
        $this->user->roles()->sync($this->roles);
        $this->user->competence()->sync($this->competence);

        return redirect()->route('admin.users.index');
    }

    protected function rules(): array
    {
        return [
            'user.name' => [
                'string',
                'required',
            ],
            'user.email' => [
                'email:rfc',
                'required',
                'unique:users,email',
            ],
            'user.phone' => [
                'string',
                'max:15',
                'required',
            ],
            'password' => [
                'string',
                'required',
            ],
            'roles' => [
                'required',
                'array',
            ],
            'roles.*.id' => [
                'integer',
                'exists:roles,id',
            ],
            'user.locale' => [
                'string',
                'nullable',
            ],
            'competence' => [
                'array',
            ],
            'competence.*.id' => [
                'integer',
                'exists:competences,id',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['roles']      = Role::pluck('title', 'id')->toArray();
        $this->listsForFields['competence'] = Competence::pluck('name', 'id')->toArray();
    }
}
