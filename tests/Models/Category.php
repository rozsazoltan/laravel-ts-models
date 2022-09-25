<?php

namespace Datarose\TypeScript\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
  public function products(): HasMany
  {
    return $this->hasMany(Product::class);
  }
}
