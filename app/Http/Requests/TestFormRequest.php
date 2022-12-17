<?php

namespace App\Http\Requests;

use App\Custom\Language;
use Illuminate\Foundation\Http\FormRequest;

class TestFormRequest extends FormRequest
{
    public readonly string $string;
    public readonly int $int;
    public readonly float $float;
    public readonly Language $language;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
