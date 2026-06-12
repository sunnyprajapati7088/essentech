<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Srn extends Model
{
    use SoftDeletes;


    protected $table = 'srns';


    protected $fillable = [
        'srn_number',
        'date_of_request',
        'customer_name',
        'contact_number',
        'email',
        'address',
        'related_work',
        'description',
        'status',
        'technician_assigned',
        'completion_datetime',
        'closing_datetime',
        'payment_method',
        'payment_amount',
        'payment_datetime',
        'payment_description',
    ];


    protected $casts = [
        'date_of_request' => 'date',
        'completion_datetime' => 'datetime',
        'closing_datetime' => 'datetime',
        'payment_datetime' => 'datetime',
        'payment_amount' => 'decimal:2',
    ];


    // constants to reuse in views/controllers
    public const STATUS_PENDING = 'Pending';
    public const STATUS_IN_PROGRESS = 'In Progress';
    public const STATUS_COMPLETED = 'Completed';
    public const STATUS_CANCELLED = 'Cancelled';


    public const PAYMENT_METHODS = ['Online', 'Offline', 'Cash', 'UPI', 'Card'];


    public static function getStatuses()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_IN_PROGRESS,
            self::STATUS_COMPLETED,
            self::STATUS_CANCELLED,
        ];
    }
}
