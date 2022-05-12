<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticiaRequest extends FormRequest
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
            'titulo' => 'required|max:100',
            'data' => 'required|date',
            'categoria_id' => 'required|exists:categoria,id',
            'arquivo' => 'image',
        ];
    }

    public function messages() {
      return [
        'required' => ':attribute é requerido',
        'image' => 'Não é um arquivo de imagem',
        'date' => 'Não é uma data válida',
        'categoria_id.exists'=> 'Não foi encontrado na tabela categoria',
        'max'=> 'Tamanho máximo de :max'
      ];
    }
}
