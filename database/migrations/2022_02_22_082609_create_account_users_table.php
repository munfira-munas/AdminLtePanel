<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 200);
            $table->string('last_name', 200)->nullable(); 
            $table->string('email', 200);
            $table->string('password', 60)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('mobile', 50)->nullable();
            $table->string('designation', 100)->nullable();
            $table->string('type', 100)->comment('admin,super_admin,staff, blah blah')->default('staff');
            $table->integer('status')->comment('0=Inactive,1=Active')->default(0);
            $table->string('auth_type', 100);
            $table->string('logged_code', 15)->nullable();
            $table->string('confirmation_code', 15)->nullable();
            $table->timestamps();
            $table->bigInteger('account_id')->unsigned();
            $table->foreign('account_id')->references('id')->on('accounts') ->onDelete('restrict');
        
        });


       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_users');
    }
}
