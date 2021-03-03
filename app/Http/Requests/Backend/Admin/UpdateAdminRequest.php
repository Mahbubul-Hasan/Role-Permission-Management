<?php

namespace App\Http\Requests\Backend\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminRequest extends FormRequest
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
            'email'    => 'required|email|unique:admins,email,'. $this->route('admin')->id,
            'username' => 'required|min:3|max:20|unique:admins,username,'. $this->route('admin')->id,
            'roles'    => 'required',
            'password' => 'nullable|confirmed|min:6',
        ];
    }

    public function updateAdminData($admin)
    {
        $admin->update([
            'name'     => $this->name,
            'email'    => $this->email,
            'username' => $this->username,
            'password' => $this->password ? Hash::make($this->password) : $admin->password,
        ]);

        // assign multiple roles at once
        $admin->syncRoles($this->roles);
    }
}
