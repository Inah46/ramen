<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        $kategoriId = (int) $this->get('kategori');
        $id = (int) $this->get('id');

        if ($this->method() == 'PUT') {
            if ($kategoriId > 0) {
                $name = 'required|unique:categories,name,'.$id.',id,kategori'.$kategoriId;
            }else{
                $name = 'required|unique:categories,name,'.$id;
            }

            //$keterangan = 'unique:categories,keterangan,'.$id;
        }else{
            $name = 'required|unique:categories,name,NULL,id,kategori,'.$kategoriId;
            //$keterangan = 'unique:categories,keterangan';
        }
        
        return [
            'name' => $name,
            //'keterangan' => $keterangan,
        ];
    }
}
