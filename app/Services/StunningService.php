<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Stunning;

class StunningService
{
  public function create(Request $request): Stunning
  {
      return Stunning::create(array_merge(
          $request->validated(),
          array('status_kesehatan' => !blank($request->status) ? true : false)
      ));
  }

  public function update(Request $request, Stunning $stunning): Stunning|bool
  {
      return $stunning->update(array_merge(
          $request->validated(),
          array('status_kesehatan' => !blank($request->status) ? true : false)
      ));
  }
}
