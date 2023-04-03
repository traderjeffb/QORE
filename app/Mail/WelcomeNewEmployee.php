<?php




namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeNewEmployee extends Mailable
{
    use Queueable, SerializesModels;

    public $employee;

    /**
     * Create a new message instance.
     *
     * @param $employee
     */
    public function __construct($employee)
    {
        $this->employee = $employee;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Welcome to Our Company')
                    ->view('emails.welcomeNewEmployee', ['employee' => $this->employee]);
    }/////
}


// namespace App\Mail;

// use App\Models\Employee;
// use Illuminate\Bus\Queueable;
// use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Mail\Mailable;
// use Illuminate\Mail\Mailables\Content;
// use Illuminate\Mail\Mailables\Envelope;
// use Illuminate\Queue\SerializesModels;

// class WelcomeNewEmployee extends Mailable
// {
//     use Queueable, SerializesModels;

//     public $employee;
//     /**
//      * Create a new message instance.
//      *
//      * @return void
//      */
//     public function __construct(Employee $employee)
//     {
//         $this->employee = $employee;
//     }

//     /**
//      * Get the message envelope.
//      *
//      * @return \Illuminate\Mail\Mailables\Envelope
//      */
//     public function envelope()
//     {
//         return new Envelope(
//             subject: 'Welcome New Employee',
//         );
//     }

//     /**
//      * Get the message content definition.
//      *
//      * @return \Illuminate\Mail\Mailables\Content
//      */
//     public function content()
//     {
//         return new Content(
//             view: 'newEmployee.blade.php',
//         );
//     }

//     /**
//      * Get the attachments for the message.
//      *
//      * @return array
//      */
//     public function attachments()
//     {
//         return [];
//     }
// }
