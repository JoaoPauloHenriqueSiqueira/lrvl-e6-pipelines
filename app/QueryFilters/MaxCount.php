<?php

namespace App\QueryFilters;

class MaxCount extends Filter
{
    /**
     * #1 We are delegating this implementation to Filter Class
     */
//    public function handle($request, \Closure $next)
//    {
//        if(!request()->has('active')){
//            return $next($request);
//        }
//
//        $builder = $next($request);
//        return $builder->where('active', request('active'));
//    }

    protected function applyFilter($builder)
    {
        return $builder->take(request($this->filterName()));
    }

}
