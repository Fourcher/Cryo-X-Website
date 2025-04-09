<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'line_1',
        'line_2',
        'city',
        'state',
        'zip',
        'country'
    ];

    public function formatted()
    {
        $formatted = "";
        if($this->first_name) {
            $formatted .= $this->first_name;
        }
        if($this->last_name) {
            $formatted .= " " . $this->last_name;
        }
        if($this->line_1) {
            $formatted .= "<br>" . $this->line_1;
        }
        if($this->line_2) {
            $formatted .= "<br>" . $this->line_2;
        }
        if($this->city) {
            $formatted .= "<br>" . $this->city;
        }
        if($this->state) {
            $formatted .= "<br>" . $this->state;
        }
        if($this->zip) {
            $formatted .= "<br>" . $this->zip;
        }
        if($this->country) {
            $formatted .= "<br>" . $this->country;
        }
        return $formatted;


    }

}
