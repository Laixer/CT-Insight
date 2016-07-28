<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id');
            $table->string('username', 50)->unique();
            $table->string('firstname', 30);
            $table->string('lastname', 50)->nullable();
            $table->string('email')->unique();
            $table->boolean('isadmin');
            $table->rememberToken();
            $table->string('access_token', 40)->unique();
            $table->string('refresh_token', 40)->unique();
            $table->datetime('access_token_expire');
            $table->timestamps();
            $table->primary('id');
        });

        Schema::create('remoteapp_users', function (Blueprint $table) {
            $table->integer('id');
            $table->string('username', 50)->unique();
            $table->char('gender', 1)->nullable();
            $table->string('firstname', 30);
            $table->string('lastname', 50)->nullable();
            $table->boolean('active');
            $table->dateTime('banned')->nullable();
            $table->dateTime('confirmed_mail')->nullable();
            $table->date('registration_date');
            $table->date('expiration_date');
            $table->string('website', 180)->nullable();
            $table->integer('mobile')->nullable()->unsigned();
            $table->integer('phone')->nullable()->unsigned();
            $table->string('email', 80)->unique();
            $table->boolean('pref_use_ct_numbering')->default('Y');
            $table->decimal('pref_hourrate_calc', 6, 3)->nullable();
            $table->decimal('pref_hourrate_more', 6, 3)->nullable();
            $table->tinyInteger('pref_profit_calc_contr_mat')->unsigned();
            $table->tinyInteger('pref_profit_calc_contr_equip')->unsigned();
            $table->tinyInteger('pref_profit_calc_subcontr_mat')->unsigned();
            $table->tinyInteger('pref_profit_calc_subcontr_equip')->unsigned();
            $table->tinyInteger('pref_profit_more_contr_mat')->unsigned();
            $table->tinyInteger('pref_profit_more_contr_equip')->unsigned();
            $table->tinyInteger('pref_profit_more_subcontr_mat')->unsigned();
            $table->tinyInteger('pref_profit_more_subcontr_equip')->unsigned();
            $table->decimal('administration_cost', 6, 2)->nullable();
            $table->timestamps();
            $table->primary('id');
        });

        Schema::create('remoteapp_projects', function (Blueprint $table) {
            $table->integer('id');
            $table->string('project_name', 50);
            $table->string('address_street', 60);
            $table->string('address_number', 5);
            $table->string('address_postal', 6);
            $table->string('address_city', 35);
            $table->boolean('pref_email_reminder');
            $table->boolean('tax_reverse');
            $table->boolean('use_estimate');
            $table->boolean('use_more');
            $table->boolean('use_less');
            $table->decimal('hour_rate', 6, 3)->unsigned();
            $table->decimal('hour_rate_more', 6, 3)->nullable();
            $table->tinyInteger('profit_calc_contr_mat')->unsigned();
            $table->tinyInteger('profit_calc_contr_equip')->unsigned();
            $table->tinyInteger('profit_calc_subcontr_mat')->unsigned();
            $table->tinyInteger('profit_calc_subcontr_equip')->unsigned();
            $table->tinyInteger('profit_more_contr_mat')->unsigned();
            $table->tinyInteger('profit_more_contr_equip')->unsigned();
            $table->tinyInteger('profit_more_subcontr_mat')->unsigned();
            $table->tinyInteger('profit_more_subcontr_equip')->unsigned();
            $table->date('work_execution')->nullable();
            $table->date('work_completion')->nullable();
            $table->date('start_more')->nullable();
            $table->date('update_more')->nullable();
            $table->date('start_less')->nullable();
            $table->date('update_less')->nullable();
            $table->date('start_estimate')->nullable();
            $table->date('update_estimate')->nullable();
            $table->date('project_close')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('remoteapp_users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        Schema::drop('remoteapp_users');
        Schema::drop('remoteapp_projects');
    }
}
