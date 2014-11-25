<?php namespace Searcher;

use Illuminate\Database\Eloquent\Model;

class Retrieval extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'retrieval';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];



}
