<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportUpdateRequest extends FormRequest
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
            'client_id' => ['required', 'exists:clients,id'],
            'hotdishmeat' => ['required', 'max:255', 'string'],
            'hotdishveg' => ['required', 'max:255', 'string'],
            'chili' => ['required', 'max:255', 'string'],
            'rye' => ['required', 'max:255', 'string'],
            'extrarye' => ['required', 'max:255', 'string'],
            'focaccia' => ['required', 'max:255', 'string'],
            'extrafocaccia' => ['required', 'max:255', 'string'],
            'client_id' => ['required', 'exists:clients,id'],
        ];
    }
}
