<?php
if (!function_exists('current_locale')) {
    function current_locale()
    {
        return app()->getLocale();
    }
}

if(!function_exists('is_active')){
    function is_active($route, $activeClass = 'bg-primary text-white', $inactiveClass = 'text-slate-600 dark:text-slate-400 hover:bg-primary'){
        return request()->routeIs($route) ? $activeClass : $inactiveClass;
    }
}
?>