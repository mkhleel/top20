<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'invoices';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['code', 'item_id', 'client_id', 'supplier_id', 'car_id', 'area_id', 'price', 'discount', 'qty'];

    public function car()
    {
        return $this->belongTo('App\Car');
    }

}
