<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateSrnsTable extends Migration
{
    public function up()
    {
        Schema::create('srns', function (Blueprint $table) {
            $table->id();
            $table->string('srn_number')->unique();
            $table->date('date_of_request')->nullable();


            // Customer
            $table->string('customer_name');
            $table->string('contact_number')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();


            // Service details
            $table->string('related_work')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->default('Pending');
            $table->string('technician_assigned')->nullable();
            $table->dateTime('completion_datetime')->nullable();
            $table->dateTime('closing_datetime')->nullable();


            // Payment
            $table->string('payment_method')->nullable();
            $table->decimal('payment_amount', 10, 2)->nullable();
            $table->dateTime('payment_datetime')->nullable();
            $table->text('payment_description')->nullable();


            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('srns');
    }
}
