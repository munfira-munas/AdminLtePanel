<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('first_name', 200);
            $table->string('last_name', 200)->nullable();
            $table->string('company_name', 200)->nullable();
            $table->string('address_1', 100)->nullable();
            $table->string('address_2', 100)->nullable();
            $table->string('postcode', 50)->nullable();
            $table->string('suburb', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('email', 200);
            $table->string('phone', 50)->nullable();
            $table->string('mobile', 50)->nullable();
            $table->string('web', 50)->nullable();
            $table->string('domain', 50);
            $table->integer('type')->comment('0=Basic,1=pro')->default(0);;
            $table->integer('status')->comment('0=Inactive,1=Active')->default(0);;
            $table->string('package', 200)->nullable();
            $table->integer('max_users')->default(1);
            $table->string('crm_status', 300);
            $table->string('auth_type', 100);
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
