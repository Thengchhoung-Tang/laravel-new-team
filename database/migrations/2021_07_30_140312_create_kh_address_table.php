<?php
 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kh_address', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->text('_type_kh')->nullable();
            $table->text('_type_en')->nullable();
            $table->string('_code')->nullable();
            $table->text('_name_kh')->nullable();
            $table->text('_name_en')->nullable();
            $table->text('_path_kh')->nullable();
            $table->text('_path_en')->nullable();
            $table->text('_reference')->nullable();
            $table->text('_official_note')->nullable();
            $table->text('_note')->nullable();
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
        Schema::dropIfExists('kh_address');
    }
}
