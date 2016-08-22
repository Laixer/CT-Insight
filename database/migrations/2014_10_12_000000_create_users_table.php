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
            $table->integer('id')->unsigned();
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

        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('type')->unique();
            $table->string('message', 30);
            $table->timestamps();
        });

        Schema::create('remoteapp_users', function (Blueprint $table) {
            $table->integer('id')->unsigned();
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
            $table->decimal('administration_cost', 6, 2)->nullable();
            $table->string('referral_url', 180)->nullable();
            $table->timestamps();
            $table->primary('id');
        });

        Schema::create('remoteapp_relations', function(Blueprint $table)
        {
            $table->integer('id');
            $table->string('company_name', 50)->nullable();
            $table->string('address_street', 50);
            $table->string('address_number', 5);
            $table->string('address_postal', 6);
            $table->string('address_city', 35);
            $table->string('phone', 12)->nullable();
            $table->string('email', 80)->nullable();
            $table->string('website', 180)->nullable();
            $table->boolean('active');
            $table->nullableTimestamps();
            $table->string('province_name', 25);
            $table->string('country_name', 80);
            $table->string('type_name', 50);
            $table->string('kind_name', 11);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('remoteapp_users')->onUpdate('cascade')->onDelete('cascade');            
            $table->primary('id');
        });

        Schema::create('remoteapp_projects', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->string('project_name', 50);
            $table->string('address_street', 60);
            $table->string('address_number', 5);
            $table->string('address_postal', 6);
            $table->string('address_city', 35);
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
            $table->string('province_name', 25);
            $table->string('country_name', 80);
            $table->string('type_name', 25);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('remoteapp_users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            $table->primary('id');
        });

        Schema::create('remoteapp_chapters', function(Blueprint $table)
        {
            $table->integer('id');
            $table->string('chapter_name', 100);
            $table->boolean('more');
            $table->nullableTimestamps();
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('remoteapp_projects')->onUpdate('cascade')->onDelete('cascade');
            $table->primary('id');
        });

        Schema::create('remoteapp_activities', function(Blueprint $table)
        {
            $table->integer('id');
            $table->string('activity_name', 100);
            $table->boolean('use_timesheet');
            $table->tinyInteger('tax_labor')->unsigned();
            $table->tinyInteger('tax_material')->unsigned();
            $table->tinyInteger('tax_equipment')->unsigned();
            $table->string('part_name', 15);
            $table->string('type_name', 15);
            $table->string('detail_name', 15);
            $table->nullableTimestamps();
            $table->integer('chapter_id')->unsigned();
            $table->foreign('chapter_id')->references('id')->on('remoteapp_chapters')->onUpdate('cascade')->onDelete('cascade');
            $table->primary('id');
        });

        Schema::create('remoteapp_offers', function(Blueprint $table)
        {
            $table->integer('id');
            $table->boolean('downpayment');
            $table->decimal('downpayment_amount', 9, 3)->unsigned()->nullable();
            $table->nullableTimestamps();
            $table->decimal('offer_total', 9, 3)->unsigned();
            $table->date('offer_finish')->nullable();
            $table->date('offer_make');
            $table->string('offer_code', 50);
            $table->string('delivertime_name', 10);
            $table->string('valid_name', 10);
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('remoteapp_projects')->onUpdate('cascade')->onDelete('cascade');
            $table->primary('id');
        });

        Schema::create('remoteapp_invoices', function(Blueprint $table)
        {
            $table->integer('id');
            $table->boolean('invoice_close');
            $table->boolean('isclose');
            $table->string('invoice_code', 50);
            $table->decimal('amount', 9, 3)->nullable();
            $table->integer('payment_condition')->unsigned();
            $table->nullableTimestamps();
            $table->date('bill_date')->nullable();
            $table->date('payment_date')->nullable();
            $table->date('invoice_make');
            $table->integer('offer_id')->unsigned();
            $table->foreign('offer_id')->references('id')->on('remoteapp_offers')->onUpdate('cascade')->onDelete('cascade');
            $table->primary('id');
        });

        Schema::create('stat_counter', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_count')->unsigned();
            $table->integer('project_count')->unsigned();
            $table->integer('relation_count')->unsigned();
            $table->integer('chapter_count')->unsigned();
            $table->integer('activity_count')->unsigned();
            $table->integer('offer_count')->unsigned();
            $table->integer('invoice_count')->unsigned();
            $table->timestamps();
        });

        DB::statement("CREATE OR REPLACE VIEW user_gross_totals AS
            WITH RECURSIVE user_totals(id, username, project_count, chapter_count, activity_count, offer_count, invoice_count) AS (
                SELECT
                    remoteapp_users.id,
                    remoteapp_users.username,
                    COUNT(remoteapp_projects.id) AS project_count,
                    (SELECT
                        COUNT(remoteapp_chapters.id)
                    FROM remoteapp_chapters
                    JOIN remoteapp_projects ON remoteapp_chapters.project_id=remoteapp_projects.id
                    WHERE remoteapp_projects.user_id=remoteapp_users.id) AS chapter_count,
                    (SELECT
                        COUNT(remoteapp_activities.id)
                    FROM remoteapp_activities
                    JOIN remoteapp_chapters ON remoteapp_activities.chapter_id=remoteapp_chapters.id
                    JOIN remoteapp_projects ON remoteapp_chapters.project_id=remoteapp_projects.id
                    WHERE remoteapp_projects.user_id=remoteapp_users.id) AS activity_count,
                    (SELECT
                        COUNT(remoteapp_offers.id)
                    FROM remoteapp_offers
                    JOIN remoteapp_projects ON remoteapp_offers.project_id=remoteapp_projects.id
                    WHERE remoteapp_projects.user_id=remoteapp_users.id) AS offer_count,
                    (SELECT
                        COUNT(remoteapp_invoices.id)
                    FROM remoteapp_invoices
                    JOIN remoteapp_offers ON remoteapp_invoices.offer_id=remoteapp_offers.id
                    JOIN remoteapp_projects ON remoteapp_offers.project_id=remoteapp_projects.id
                    WHERE remoteapp_projects.user_id=remoteapp_users.id) AS invoice_count
                FROM remoteapp_users
                LEFT JOIN remoteapp_projects ON remoteapp_users.id=remoteapp_projects.user_id
                GROUP BY remoteapp_users.id)
            SELECT
                id,
                username,
                project_count,
                ROUND(100.0 * (project_count::NUMERIC / (SELECT project_count FROM stat_counter ORDER BY created_at DESC LIMIT 1)), 2) AS project_gross,
                chapter_count,
                ROUND(100.0 * (chapter_count::NUMERIC / (SELECT chapter_count FROM stat_counter ORDER BY created_at DESC LIMIT 1)), 2) AS chapter_gross,
                activity_count,
                ROUND(100.0 * (activity_count::NUMERIC / (SELECT activity_count FROM stat_counter ORDER BY created_at DESC LIMIT 1)), 2) AS activity_gross,
                offer_count,
                ROUND(100.0 * (offer_count::NUMERIC / (SELECT offer_count FROM stat_counter ORDER BY created_at DESC LIMIT 1)), 2) AS offer_gross,
                invoice_count,
                ROUND(100.0 * (invoice_count::NUMERIC / (SELECT invoice_count FROM stat_counter ORDER BY created_at DESC LIMIT 1)), 2) AS invoice_gross
            FROM user_totals;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // DB::statement("DROP VIEW user_gross_totals");
        Schema::drop('stat_counter');
        Schema::drop('remoteapp_invoices');
        Schema::drop('remoteapp_offers');
        Schema::drop('remoteapp_activities');
        Schema::drop('remoteapp_chapters');
        Schema::drop('remoteapp_projects');
        Schema::drop('remoteapp_relations');
        Schema::drop('remoteapp_users');
        Schema::drop('notifications');
        Schema::drop('users');
    }
}
