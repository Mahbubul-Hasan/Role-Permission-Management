<?php

namespace App\Http\Requests\Backend\Admin;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;

class StoreAdminRequest extends FormRequest
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
            'email'    => 'required|email|unique:admins',
            'username' => 'required|min:3|max:20|unique:admins',
            'roles'    => 'required',
            'password' => 'required|confirmed|min:6',
        ];
    }

    public function storeAdminData()
    {
        $admin = Admin::create([
            'name'     => $this->name,
            'email'    => $this->email,
            'username' => $this->username,
            'password' => Hash::make($this->password),
        ]);

        // assign multiple roles at once
        $admin->assignRole($this->roles);
    }
}
