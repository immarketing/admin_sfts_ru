<?php

namespace admin_sfts_ru\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Agpplgroup
 */
class Agpplgroup extends Model
{
    protected $table = 'agpplgroups';

    public $timestamps = false;

    protected $fillable = [
        'Code',
        'Name'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getCode() {
		return $this->Code;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->Name;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setCode($value) {
		$this->Code = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setName($value) {
		$this->Name = $value;
		return $this;
	}



}