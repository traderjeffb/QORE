<?

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Employee;

class Appointment extends Model
{
    protected $table = 'appointments';

    protected $fillable = [
        'start_time',
        'finish_time',
        'comments',
        'customer_id',
        'employee_id',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
