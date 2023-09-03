<?php

namespace Evan\MyWork\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;
}
