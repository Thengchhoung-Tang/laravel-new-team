<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('account_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->boolean('is_vip')->nullable();
            $table->string('type')->nullable();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('phone_3')->nullable();
            $table->string('phone_4')->nullable();
            $table->string('street_no')->nullable();
            $table->string('house_no')->nullable();
            $table->string('address')->nullable();
            $table->string('relationship')->nullable();
            $table->string('working_field')->nullable();
            $table->string('identity_card')->nullable();
            $table->string('identity_card_photos')->nullable();
            $table->string('profile')->nullable();
            $table->string('salutation')->nullable();
            $table->string('occupation')->nullable();
            $table->timestamp('date_of_birth')->nullable();
            $table->integer('owner')->nullable();
            $table->string('assistant_name')->nullable();
            $table->string('department')->nullable();
            $table->string('fax')->nullable();
            $table->string('lead_source')->nullable();
            $table->integer('reports_to')->nullable();
            $table->text('remark')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('owner_account_id')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
