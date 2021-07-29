<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('parent_id')->nullable();
            $table->string('account_number')->nullable();
            $table->string('bank_branch')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('address')->nullable();
            $table->date('valid_until')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('industry')->nullable();
            $table->string('rating')->nullable();
            $table->string('website')->nullable();
            $table->text('description')->nullable();
            $table->integer('lft')->nullable();
            $table->integer('rgt')->nullable();
            $table->integer('depth')->nullable();
            $table->float('annual_revenue')->nullable();
            $table->integer('number_of_employees')->nullable();
            $table->string('fax')->nullable();
            $table->string('ownership')->nullable();
            $table->text('sic')->nullable();
            $table->string('ticker_symbol')->nullable();
            $table->string('type')->nullable();
            $table->integer('owner')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->text('logo')->nullable();
            $table->text('alias')->nullable();
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
        Schema::dropIfExists('accounts');
    }
}
