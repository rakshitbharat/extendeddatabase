<?php

namespace Rakshitbharat\ExtendedDatabase;

use Illuminate\Support\ServiceProvider;

class ExtendedDatabaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        \Illuminate\Database\Eloquent\Builder::macro("toSqlWithBindings", function () {
            $query = $this;
            try {
                $query->addSelect(\Illuminate\Support\Facades\DB::raw('{sql::::::::sql}'))->first();
            } catch (\Exception $Exception) {
                $string = $Exception->getMessage();
                $string = explode('SQL: ', $string)[1];
                $string = str_replace(' , {sql::::::::sql}', '', $string);
                $string = str_replace(', {sql::::::::sql}', '', $string);
                $string = str_replace(' {sql::::::::sql}', '', $string);
                $string = substr_replace($string, "", -1);
                return $string;
            }
        });

        \Illuminate\Database\Eloquent\Builder::macro("paginateToDatatable", function () {
            return app('datatables')->eloquent($this)->toJson();
        });
    }
}
