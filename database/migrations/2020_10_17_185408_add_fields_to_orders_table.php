<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('payment_id')->nullable();
            $table->decimal('total')->nullable();
            $table->string('name');
            $table->text('address');
            $table->text('district');
            $table->text('state');
            $table->text('country')->default('IN');
            $table->integer('pincode');
            $table->string('email');
            $table->string('phone');
            $table->boolean('shipped')->default(false);
            $table->boolean('accepted')->default(false);
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
            $table->dropColumn('payment_id');
            $table->dropColumn('total');
            $table->dropColumn('name');
            $table->dropColumn('address');
            $table->dropColumn('district');
            $table->dropColumn('state');
            $table->dropColumn('country');
            $table->dropColumn('pincode');
            $table->dropColumn('email');
            $table->dropColumn('phone');
            $table->dropColumn('shipped');
            $table->dropColumn('accepted');
        });
    }
}
