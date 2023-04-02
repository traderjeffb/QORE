<?php

namespace App\Listeners;

use App\Events\NewEmployeeEvent;
use App\Mail\WelcomeNewEmployee;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmailToNewEmployee implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(NewEmployeeEvent $event)
    {
        $employee = $event->employee;

        Mail::to($employee->email)->send(new WelcomeNewEmployee($employee));
    }
}
