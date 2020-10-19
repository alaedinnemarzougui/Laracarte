<?php

namespace App\Models;

use App\Scopes\DatesScopes;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Mailing extends Model
{
    use HasFactory;
    use DatesScopes;

    protected  $fillable = ['name' , 'email' , 'message'];

}
