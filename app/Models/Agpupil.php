<?php

namespace admin_sfts_ru\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Agpupil
 */
class Agpupil extends Model
{
    protected $table = 'agpupils';

    public $timestamps = false;

    protected $fillable = [
        'fName',
        'lName',
        'pwd1',
        'pwd2',
        'courseID',
        'login',
        'testID',
        'testResult',
        'isTestCompleted'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getFName() {
		return $this->fName;
	}

	/**
	 * @return mixed
	 */
	public function getLName() {
		return $this->lName;
	}

	/**
	 * @return mixed
	 */
	public function getPwd1() {
		return $this->pwd1;
	}

	/**
	 * @return mixed
	 */
	public function getPwd2() {
		return $this->pwd2;
	}

	/**
	 * @return mixed
	 */
	public function getCourseID() {
		return $this->courseID;
	}

	/**
	 * @return mixed
	 */
	public function getLogin() {
		return $this->login;
	}

	/**
	 * @return mixed
	 */
	public function getTestID() {
		return $this->testID;
	}

	/**
	 * @return mixed
	 */
	public function getTestResult() {
		return $this->testResult;
	}

	/**
	 * @return mixed
	 */
	public function getIsTestCompleted() {
		return $this->isTestCompleted;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setFName($value) {
		$this->fName = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setLName($value) {
		$this->lName = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPwd1($value) {
		$this->pwd1 = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPwd2($value) {
		$this->pwd2 = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCourseID($value) {
		$this->courseID = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setLogin($value) {
		$this->login = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTestID($value) {
		$this->testID = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTestResult($value) {
		$this->testResult = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIsTestCompleted($value) {
		$this->isTestCompleted = $value;
		return $this;
	}



}