<?php

namespace App\QueryFilters;

class Active extends Filter
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
        return $builder->where($this->filterName(), request($this->filterName()));
    }

}
