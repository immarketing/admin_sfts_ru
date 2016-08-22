<?php

namespace admin_sfts_ru\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Agtest
 */
class Agtest extends Model
{
    protected $table = 'agtests';

    public $timestamps = false;

    protected $fillable = [
        'ShortName',
        'Name',
        'Code',
        'GoogleSheetID',
        'JSON'
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
	public function getCode() {
		return $this->Code;
	}

	/**
	 * @return mixed
	 */
	public function getGoogleSheetID() {
		return $this->GoogleSheetID;
	}

	/**
	 * @return mixed
	 */
	public function getJSON() {
		return $this->JSON;
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
	public function setCode($value) {
		$this->Code = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setGoogleSheetID($value) {
		$this->GoogleSheetID = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setJSON($value) {
		$this->JSON = $value;
		return $this;
	}



}