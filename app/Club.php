<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = ['name', 'shortname', 'address', 'zipcode', 'city', 'email', 'siteurl'];

    public function club_board_members() {
        return $this->hasMany('App\ClubBoardMember');
    }
}
