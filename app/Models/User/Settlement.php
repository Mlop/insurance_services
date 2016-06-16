<?php
namespace App\Models\User;
use App\Models\Base;

/**
 * todo example for model
 * Class Settlement
 * @package App\Models
 */
class Settlement extends Base
{
    protected $connection = 'financial';
    protected $table = 'settlement';
    protected $primaryKey = 'settlement_id';
    protected $fillable = [
        'settlement_id',
        'payment_method_id',
        'original_amount',
        'actual_amount',
        'comment',
        'order_id',
        'created_at',
        'updated_at',
        'status',
        'transaction_no',
        'is_online',
        'card_num',
        'customer_id',
        'customer_name',
        'type',
        'bank_no',
        'bank_address',
        'paid_time',
        'serial_no',
        'is_lock',
    ];

    const STATUS_ID_PENDDING = 1;
    const STATUS_ID_SUCCESS = 2;
    const STATUS_ID_FAILED = 3;
    const STATUS_ID_CANCELED = 4;
    public static $status = [
        self::STATUS_ID_PENDDING => 'pendding',
        self::STATUS_ID_SUCCESS => 'success',
        self::STATUS_ID_FAILED => 'failed',
        self::STATUS_ID_CANCELED => 'canceled',
    ];

    const LOCK_STATUS_YES = 1;
    const LOCK_STATUS_NO = 0;
    const STATUS_TO_VOID = 2;

    const TYPE_RECEIPT = 'receipt';
    const TYPE_REFUND = 'refund';

    public $timestamps = true;

    public function freshTimestamp() {
        return time();
    }
    public function fromDateTime($value) {
        return $value;
    }

    public function histories()
    {
        return $this->hasMany('App\Models\Financial\SettlementUpdateHistory', 'settlement_id', 'settlement_id');
    }

    public function paymentMethod()
    {
        return $this->hasOne('App\Models\Financial\PaymentMethod', 'payment_method_id', 'payment_method_id');
    }
}
