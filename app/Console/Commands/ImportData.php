<?php

namespace App\Console\Commands;

use App\RemoteappUser;
use App\RemoteappProject;
use Illuminate\Console\Command;

class ImportData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import remote data';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        \InternalMaintenance::request()->get('user', function ($user) {
            $remoteapp_user = RemoteappUser::find($user['id']);
            if (!$remoteapp_user)
                $remoteapp_user = new RemoteappUser;

            $remoteapp_user->id = $user['id'];
            $remoteapp_user->gender = $user['gender'];
            $remoteapp_user->username = $user['username'];
            $remoteapp_user->firstname = $user['firstname'];
            $remoteapp_user->lastname = $user['lastname'];
            $remoteapp_user->active = $user['active'];
            $remoteapp_user->banned = $user['banned'];
            $remoteapp_user->banned = $user['banned'];
            $remoteapp_user->confirmed_mail = $user['confirmed_mail'];
            $remoteapp_user->registration_date = $user['registration_date'];
            $remoteapp_user->expiration_date = $user['expiration_date'];
            $remoteapp_user->website = $user['website'];
            $remoteapp_user->mobile = $user['mobile'];
            $remoteapp_user->phone = $user['phone'];
            $remoteapp_user->email = $user['email'];
            $remoteapp_user->pref_use_ct_numbering = $user['pref_use_ct_numbering'];
            $remoteapp_user->pref_hourrate_calc = $user['pref_hourrate_calc'];
            $remoteapp_user->pref_hourrate_more = $user['pref_hourrate_more'];
            $remoteapp_user->pref_profit_calc_contr_mat = $user['pref_profit_calc_contr_mat'];
            $remoteapp_user->pref_profit_calc_contr_equip = $user['pref_profit_calc_contr_equip'];
            $remoteapp_user->pref_profit_calc_subcontr_mat = $user['pref_profit_calc_subcontr_mat'];
            $remoteapp_user->pref_profit_calc_subcontr_equip = $user['pref_profit_calc_subcontr_equip'];
            $remoteapp_user->pref_profit_more_contr_mat = $user['pref_profit_more_contr_mat'];
            $remoteapp_user->pref_profit_more_contr_equip = $user['pref_profit_more_contr_equip'];
            $remoteapp_user->pref_profit_more_subcontr_mat = $user['pref_profit_more_subcontr_mat'];
            $remoteapp_user->pref_profit_more_subcontr_equip = $user['pref_profit_more_subcontr_equip'];
            $remoteapp_user->administration_cost = $user['administration_cost'];
            $remoteapp_user->save();
        });

        \InternalMaintenance::request()->get('project', function ($project) {
            $remoteapp_project = RemoteappProject::find($project['id']);
            if (!$remoteapp_project)
                $remoteapp_project = new RemoteappProject;

            $remoteapp_project->id = $project['id'];
            $remoteapp_project->project_name = $project['project_name'];
            $remoteapp_project->address_street = $project['address_street'];
            $remoteapp_project->address_number = $project['address_number'];
            $remoteapp_project->address_postal = $project['address_postal'];
            $remoteapp_project->address_city = $project['address_city'];
            $remoteapp_project->pref_email_reminder = $project['pref_email_reminder'];
            $remoteapp_project->tax_reverse = $project['tax_reverse'];
            $remoteapp_project->use_estimate = $project['use_estimate'];
            $remoteapp_project->use_more = $project['use_more'];
            $remoteapp_project->use_less = $project['use_less'];
            $remoteapp_project->hour_rate = $project['hour_rate'];
            $remoteapp_project->hour_rate_more = $project['hour_rate_more'];
            $remoteapp_project->profit_calc_contr_mat = $project['profit_calc_contr_mat'];
            $remoteapp_project->profit_calc_contr_equip = $project['profit_calc_contr_equip'];
            $remoteapp_project->profit_calc_subcontr_mat = $project['profit_calc_subcontr_mat'];
            $remoteapp_project->profit_calc_subcontr_equip = $project['profit_calc_subcontr_equip'];
            $remoteapp_project->profit_more_contr_mat = $project['profit_more_contr_mat'];
            $remoteapp_project->profit_more_contr_equip = $project['profit_more_contr_equip'];
            $remoteapp_project->profit_more_subcontr_mat = $project['profit_more_subcontr_mat'];
            $remoteapp_project->profit_more_subcontr_equip = $project['profit_more_subcontr_equip'];
            $remoteapp_project->work_execution = $project['work_execution'];
            $remoteapp_project->work_completion = $project['work_completion'];
            $remoteapp_project->start_more = $project['start_more'];
            $remoteapp_project->update_more = $project['update_more'];
            $remoteapp_project->start_less = $project['start_less'];
            $remoteapp_project->update_less = $project['update_less'];
            $remoteapp_project->start_estimate = $project['start_estimate'];
            $remoteapp_project->update_estimate = $project['update_estimate'];
            $remoteapp_project->project_close = $project['project_close'];
            $remoteapp_project->user_id = $project['user_id'];
            $remoteapp_project->save();
        });
    }
}
