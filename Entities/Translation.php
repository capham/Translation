<?php

namespace Modules\Translation\Entities;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Translation extends Model
{
    use Translatable;

    protected $table = 'translation__translations';
    public $translatedAttributes = ['value'];
    protected $fillable = ['key', 'value'];
}
