<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meeting;

class CalendarController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $events = [];
        $appointments = \App\Models\Meeting::with(['customer', 'employee'])->get();
        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => $appointment->customer->name . ' ('.$appointment->employee->name.')',
                'start' => $appointment->start_time,
                'end' => $appointment->finish_time,
            ];
        }
        return view('sales.salesCalendar', compact('events'));
    }
}
