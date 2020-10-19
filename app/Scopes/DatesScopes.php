<?php
namespace App\Scopes;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

trait DatesScopes {


      public function  scopeTwoMonthsOld(Builder $query )
      {

            return $query->where('created_at', '>=' , now()->subMonth(2));

      }




}
