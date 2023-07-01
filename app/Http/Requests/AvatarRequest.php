<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AvatarRequest extends FormRequest
{
  public function rules()
  {
    return ['avatar' => ['required', 'string']];
  }
}
