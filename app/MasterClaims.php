<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterClaims extends Model
{
  protected $fillable = ['number', 'user_id', 'claim_date', 'block_id', 'service_id', 'site_id', 'claim_type_id', 'payment_approved'];
}
