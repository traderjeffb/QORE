<?php

namespace App\Services;

use App\Models\Module;

class TotalAllMetals
{
    public function getTotal()
    {
        $modules = Module::all();

        $totals = [
            'gold' => 0,
            'silver' => 0,
            'platinum' => 0,
            'palladium' => 0,
        ];

        foreach ($modules as $module) {
            $totals['gold'] += $module->gold;
            $totals['silver'] += $module->silver;
            $totals['platinum'] += $module->platinum;
            $totals['palladium'] += $module->palladium;
        }
// dd($totals);
        return $totals;
    }
}
