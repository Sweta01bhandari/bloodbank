<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('donation_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('donor_id');
            $table->text('request_details');
            // Add other relevant fields here

            // Define foreign key constraints (if applicable)
            $table->foreign('donor_id')->references('id')->on('donors')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donation_requests');
    }
}
