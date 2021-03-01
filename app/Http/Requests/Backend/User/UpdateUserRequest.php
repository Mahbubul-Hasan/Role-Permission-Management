<?php

namespace App\Http\Requests\Backend\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'    => 'required|email|unique:users,email,'. $this->route('user')->id,
            'roles'    => 'required',
            'password' => 'nullable|confirmed|min:6',
        ];
    }

    public function updateUserData($user)
    {
        $user->update([
            'name'     => $this->name,
            'email'    => $this->email,
            'password' => $this->password ? Hash::make($this->password) : $user->password,
        ]);

        // assign multiple roles at once
        $user->syncRoles($this->roles);
    }
}
