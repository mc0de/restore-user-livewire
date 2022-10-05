<?php

namespace App\Http\Livewire\User;

use App\Models\Competence;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public User $user;

    public array $roles = [];

    public string $password = '';

    public array $competence = [];

    public array $listsForFields = [];

    public function mount(User $user)
    {
        $this->user       = $user;
        $this->roles      = $this->user->roles()->pluck('id')->toArray();
        $this->competence = $this->user->competence()->pluck('id')->toArray();
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.user.edit');
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
                'unique:users,email,' . $this->user->id,
            ],
            'user.phone' => [
                'string',
                'max:15',
                'required',
            ],
            'password' => [
                'string',
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