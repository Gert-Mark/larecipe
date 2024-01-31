<?php

if (! function_exists('larecipe_assets')) {
    function larecipe_assets($path, $secure = null)
    {
        if(config('app.env')=='local'){
            return asset('vendor/binarytorch/larecipe/assets/'.$path, $secure);
        }
        return asset('manager/vendor/binarytorch/larecipe/assets/'.$path, $secure);
    }
}
