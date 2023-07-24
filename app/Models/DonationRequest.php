<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonationRequest extends Model
{
    // Define the table associated with the model (optional)
    protected $table = 'donation_requests';

    // Define the fillable attributes (fields) for mass assignment
    protected $fillable = [
        'donor_id', // Assuming you have a foreign key to link donation requests to donors
        'request_details',
        // Add other relevant fields here
    ];

    // Define relationships (if any)
    // For example, if a donation request belongs to a donor, you can define the relationship like this:
    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }
}
