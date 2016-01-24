<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleRequest extends Request
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
    public function rules(Request $request)
    {
        switch($this->method())
        {
            case 'POST':
            {
                return [
                    'title' => 'required',
                    'slug'  => 'required|max:32|unique:articles',
                    'conclusion_md' => 'required',
                ];
            }
            case 'PATCH':
            {
                return [
                    'title' => 'required',
                    'slug'  => 'required|max:32|unique:articles,slug,'.$request->get('id'),
                    'conclusion_md' => 'required',
                ];
            }
            default:break;
        }
    }
}
