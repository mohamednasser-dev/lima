<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveUnneededColumnsFromOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Drop the old columns first
        Schema::table('orders', function (Blueprint $table) {
            $this->dropColumnIfExists($table, 'receive_times');
            $this->dropColumnIfExists($table, 'week_day');
            $this->dropColumnIfExists($table, 'week_count');
            $this->dropColumnIfExists($table, 'month_date_number');
            $this->dropColumnIfExists($table, 'month_count');
        });

        // Add the new columns
        Schema::table('orders', function (Blueprint $table) {
            // Add shipping type
            $table->enum('shipping_type', ['once', 'daily', 'weekly', 'monthly'])->default('once')->after('id');
            $table->unsignedBigInteger('shipping_count')->default(1)->comment('How many ships of the order | عدد الشحنات')->after('shipping_type');
            $table->enum('week_day', [
                'sat', 'sun', 'mon', 'tue', 'wed', 'thu', 'fri'
            ])->nullable()->comment('In case shipping_type is weekly, then determine the week day, اليوم الذي سيتم فيه إرسال الشحنة اسبوعيًا')->after('shipping_count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $this->dropColumnIfExists($table, 'shipping_type');
            $this->dropColumnIfExists($table, 'shipping_count');
        });
    }

    private function dropColumnIfExists(Blueprint $table, string $column){
        if(Schema::hasColumn($table->getTable(), $column))
            $table->dropColumn($column);
    }

}
