<?php
/**
 * Created by PhpStorm.
 * User: molano
 * Date: 14/12/2017
 * Time: 21:55
 */

namespace Strings;


trait slugCase
{


    public function slugCase()
    {

            return $this
                ->replace('_',' ')
                ->replace(' ', '-')
                ->ucwords()
                ->preg_replace("/(.)(?=[A-Z])/", '$1-')
                ->replace('--', '-')
                ->strlower();


    }


}

