<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 23 Aug 2017 20:25:30 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OcInformationToLayout
 * 
 * @property int $information_id
 * @property int $store_id
 * @property int $layout_id
 *
 * @package App\Models
 */
class OcInformationToLayout extends Eloquent
{
	protected $table = 'oc_information_to_layout';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'information_id' => 'int',
		'store_id' => 'int',
		'layout_id' => 'int'
	];

	protected $fillable = [
		'layout_id'
	];
}
