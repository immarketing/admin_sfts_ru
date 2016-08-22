<?php

namespace admin_sfts_ru\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Agcourse
 */
class Agcourse extends Model
{
    protected $table = 'agcourses';

    public $timestamps = false;

    protected $fillable = [
        'ShortName',
        'Name',
        'googleDocID',
        'TOCJSON',
        'Code'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getShortName() {
		return $this->ShortName;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->Name;
	}

	/**
	 * @return mixed
	 */
	public function getGoogleDocID() {
		return $this->googleDocID;
	}

	/**
	 * @return mixed
	 */
	public function getTOCJSON() {
		return $this->TOCJSON;
	}

	/**
	 * @return mixed
	 */
	public function getCode() {
		return $this->Code;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setShortName($value) {
		$this->ShortName = $value;
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

	/**
	 * @param $value
	 * @return $this
	 */
	public function setGoogleDocID($value) {
		$this->googleDocID = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTOCJSON($value) {
		$this->TOCJSON = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCode($value) {
		$this->Code = $value;
		return $this;
	}



}