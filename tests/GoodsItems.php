<?php

/*
 * This file is part of ibrand/advert.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iBrand\Component\Advert\Test;

use Illuminate\Database\Eloquent\Model;

class GoodsItems extends Model
{
    protected $guarded = ['id'];

    /**
     * Address constructor.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $prefix = config('ibrand.app.database.prefix', 'ibrand_');

        $this->setTable($prefix.'goods_item');
    }
}
