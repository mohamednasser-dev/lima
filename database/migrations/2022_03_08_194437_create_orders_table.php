<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->enum('receive_times',['daily','weekly','monthly','one_time'])->default('one_time');

            $table->date('order_date');

            //for daily type
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            //for weekly type
            $table->integer('week_day')->nullable();  //sunday l
            $table->integer('week_count')->nullable();  // 3

            //for monthly type
            $table->integer('month_date_number')->nullable();  //15  = dd  1 -> 28
            $table->integer('month_count')->nullable();

            $table->foreignId('address_id')->constrained('addresses')->onDelete('restrict');
            $table->string('code')->nullable();
            $table->decimal('price',9,2);   //500
            $table->decimal('total_days_price',9,2);   //500  * days count = 10000
            $table->decimal('delivery_price',9,2);   // 200 * days count   = 500
            $table->decimal('price_after_code',9,2)->nullable();  // 500=coupon       =>   1000
            $table->decimal('total',9,2);
            $table->enum('payment_status',['paid','unpaid'])->default('unpaid');
            $table->enum('payment',['cash','card'])->default('cash');
            $table->enum('status',['pending','accepted','rejected','delivered','finished'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
