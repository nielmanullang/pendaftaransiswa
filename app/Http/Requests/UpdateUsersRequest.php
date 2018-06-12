<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsersRequest extends FormRequest
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
            'namalengkap' => 'required',
            'username' => 'required',
            'jeniskelamin' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
            'alamat' => 'required',
            'notelpon' => 'required',
            'asalsekolah' => 'required',
            'niksiswa' => 'required',
            'nikayah' => 'required',
            'nikibu' => 'required',
            // 'nam' => 'required',
            // 'email' => 'required|email|unique:users,email,'.$this->route('user'),
            
            // 'role_id' => 'required',
            // 'role_id' => 'required',
        ];
    }
}
