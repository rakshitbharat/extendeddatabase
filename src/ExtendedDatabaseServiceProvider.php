<?php

namespace Rakshitbharat\ExtendedDatabase;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class ExtendedDatabaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        Model::addGlobalScope('ToCompleteSql', function (Builder $query) {
            try {
                $query->addSelect(DB::raw('{sql::::::::sql}'))->first();
            } catch (\Exception $Exception) {
                $string = $Exception->getMessage();
                $string = explode('SQL: ', $string)[1];
                $string = str_replace(' , {sql::::::::sql}', '', $string);
                $string = str_replace(', {sql::::::::sql}', '', $string);
                $string = substr_replace($string, "", -1);
                return $string;
            }
        });
    }

    /**
     * Register the application services.
     */
    public function register()
    {

    }
}
