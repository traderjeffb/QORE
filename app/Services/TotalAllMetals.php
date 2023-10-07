<?php
namespace App\Services;

use App\Models\Module;

class TotalAllMetals
{
    public function getTotal($metal)
    {


        $total = []; // Initialize the total to zero
        $total[''.$metal.''] = Module::sum($metal);



// dd($total);
        return $total;
    }
}
