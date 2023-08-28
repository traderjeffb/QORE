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
            'scandium' => 0,
            'yttrium' => 0,
            'lanthanum' => 0,
            'cerium' => 0,
            'praseodymium' => 0,
            'neodymium' => 0,
            'promethium' => 0,
        ];

        foreach ($modules as $module) {
            $totals['gold'] += $module->gold;
            $totals['silver'] += $module->silver;
            $totals['platinum'] += $module->platinum;
            $totals['palladium'] += $module->palladium;
            $totals['scandium'] += $module->scandium;
            $totals['yttrium'] += $module->yttrium;
            $totals['lanthanum'] += $module->lanthanum;
            $totals['cerium'] += $module->cerium;
            $totals['praseodymium'] += $module->praseodymium;
            $totals['neodymium'] += $module->neodymium;
            $totals['promethium'] += $module->promethium;
        }

        return $totals;
    }
}
