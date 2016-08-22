<?php

namespace App\Console\Commands;

use App\Stats;
use App\RemoteappUser;
use App\RemoteappRelation;
use App\RemoteappProject;
use App\RemoteappChapter;
use App\RemoteappActivity;
use App\RemoteappOffer;
use App\RemoteappInvoice;
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
        $statistics = new Stats;

        $this->info('Importing users');

        \InternalMaintenance::request()->get('user', function ($user) use ($statistics) {
            $remoteapp_user = RemoteappUser::find($user['id']);
            if (!$remoteapp_user)
                $remoteapp_user = new RemoteappUser;

            $statistics->user_count++;

            $remoteapp_user->id = $user['id'];
            $remoteapp_user->username = $user['username'];
            $remoteapp_user->gender = $user['gender'];
            $remoteapp_user->firstname = $user['firstname'];
            $remoteapp_user->lastname = $user['lastname'];
            $remoteapp_user->active = $user['active'];
            $remoteapp_user->banned = $user['banned'];
            $remoteapp_user->confirmed_mail = $user['confirmed_mail'];
            $remoteapp_user->registration_date = $user['registration_date'];
            $remoteapp_user->expiration_date = $user['expiration_date'];
            $remoteapp_user->website = $user['website'];
            $remoteapp_user->mobile = $user['mobile'];
            $remoteapp_user->phone = $user['phone'];
            $remoteapp_user->email = $user['email'];
            $remoteapp_user->administration_cost = $user['administration_cost'];
            $remoteapp_user->referral_url = $user['referral_url'];
            $remoteapp_user->created_at = $user['created_at'];
            $remoteapp_user->updated_at = $user['updated_at'];
            $remoteapp_user->save();
        });

        $this->info('Importing relations');

        \InternalMaintenance::request()->get('relation', function ($relation) use ($statistics) {
            $remoteapp_relation = RemoteappRelation::find($relation['id']);
            if (!$remoteapp_relation)
                $remoteapp_relation = new RemoteappRelation;

            $statistics->relation_count++;

            $remoteapp_relation->id = $relation['id'];
            $remoteapp_relation->company_name = $relation['company_name'];
            $remoteapp_relation->address_street = $relation['address_street'];
            $remoteapp_relation->address_number = $relation['address_number'];
            $remoteapp_relation->address_postal = $relation['address_postal'];
            $remoteapp_relation->address_city = $relation['address_city'];
            $remoteapp_relation->phone = $relation['phone'];
            $remoteapp_relation->email = $relation['email'];
            $remoteapp_relation->website = $relation['website'];
            $remoteapp_relation->active = $relation['active'];
            $remoteapp_relation->province_name = $relation['province_name'];
            $remoteapp_relation->country_name = $relation['country_name'];
            $remoteapp_relation->type_name = $relation['type_name'];
            $remoteapp_relation->kind_name = $relation['kind_name'];
            $remoteapp_relation->created_at = $relation['created_at'];
            $remoteapp_relation->updated_at = $relation['updated_at'];
            $remoteapp_relation->user_id = $relation['user_id'];
            $remoteapp_relation->save();
        });

        $this->info('Importing projects');

        \InternalMaintenance::request()->get('project', function ($project) use ($statistics) {
            $remoteapp_project = RemoteappProject::find($project['id']);
            if (!$remoteapp_project)
                $remoteapp_project = new RemoteappProject;

            $statistics->project_count++;

            $remoteapp_project->id = $project['id'];
            $remoteapp_project->project_name = $project['project_name'];
            $remoteapp_project->address_street = $project['address_street'];
            $remoteapp_project->address_number = $project['address_number'];
            $remoteapp_project->address_postal = $project['address_postal'];
            $remoteapp_project->address_city = $project['address_city'];
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
            $remoteapp_project->province_name = $project['province_name'];
            $remoteapp_project->country_name = $project['country_name'];
            $remoteapp_project->type_name = $project['type_name'];
            $remoteapp_project->created_at = $project['created_at'];
            $remoteapp_project->updated_at = $project['updated_at'];
            $remoteapp_project->user_id = $project['user_id'];
            $remoteapp_project->save();
        });

        $this->info('Importing chapters');

        \InternalMaintenance::request()->get('chapter', function ($chapter) use ($statistics) {
            $remoteapp_chapter = RemoteappChapter::find($chapter['id']);
            if (!$remoteapp_chapter)
                $remoteapp_chapter = new RemoteappChapter;

            $statistics->chapter_count++;

            $remoteapp_chapter->id = $chapter['id'];
            $remoteapp_chapter->chapter_name = $chapter['chapter_name'];
            $remoteapp_chapter->more = $chapter['more'];
            $remoteapp_chapter->created_at = $chapter['created_at'];
            $remoteapp_chapter->updated_at = $chapter['updated_at'];
            $remoteapp_chapter->project_id = $chapter['project_id'];
            $remoteapp_chapter->save();
        });

        $this->info('Importing activities');

        \InternalMaintenance::request()->get('activity', function ($activity) use ($statistics) {
            $remoteapp_activity = RemoteappActivity::find($activity['id']);
            if (!$remoteapp_activity)
                $remoteapp_activity = new RemoteappActivity;

            $statistics->activity_count++;

            $remoteapp_activity->id = $activity['id'];
            $remoteapp_activity->activity_name = $activity['activity_name'];
            $remoteapp_activity->use_timesheet = $activity['use_timesheet'];
            $remoteapp_activity->tax_labor = $activity['tax_labor'];
            $remoteapp_activity->tax_material = $activity['tax_material'];
            $remoteapp_activity->tax_equipment = $activity['tax_equipment'];
            $remoteapp_activity->part_name = $activity['part_name'];
            $remoteapp_activity->type_name = $activity['type_name'];
            $remoteapp_activity->detail_name = $activity['detail_name'];
            $remoteapp_activity->created_at = $activity['created_at'];
            $remoteapp_activity->updated_at = $activity['updated_at'];
            $remoteapp_activity->chapter_id = $activity['chapter_id'];
            $remoteapp_activity->save();
        });

        $this->info('Importing offers');

        \InternalMaintenance::request()->get('offer', function ($offer) use ($statistics) {
            $remoteapp_offer = RemoteappOffer::find($offer['id']);
            if (!$remoteapp_offer)
                $remoteapp_offer = new RemoteappOffer;

            $statistics->offer_count++;

            $remoteapp_offer->id = $offer['id'];
            $remoteapp_offer->downpayment = $offer['downpayment'];
            $remoteapp_offer->downpayment_amount = $offer['downpayment_amount'];
            $remoteapp_offer->offer_total = $offer['offer_total'];
            $remoteapp_offer->offer_finish = $offer['offer_finish'];
            $remoteapp_offer->offer_make = $offer['offer_make'];
            $remoteapp_offer->offer_code = $offer['offer_code'];
            $remoteapp_offer->delivertime_name = $offer['delivertime_name'];
            $remoteapp_offer->valid_name = $offer['valid_name'];
            $remoteapp_offer->created_at = $offer['created_at'];
            $remoteapp_offer->updated_at = $offer['updated_at'];
            $remoteapp_offer->project_id = $offer['project_id'];
            $remoteapp_offer->save();
        });

        $this->info('Importing invoices');

        \InternalMaintenance::request()->get('invoice', function ($invoice) use ($statistics) {
            $remoteapp_invoice = RemoteappInvoice::find($invoice['id']);
            if (!$remoteapp_invoice)
                $remoteapp_invoice = new RemoteappInvoice;

            $statistics->invoice_count++;

            $remoteapp_invoice->id = $invoice['id'];
            $remoteapp_invoice->invoice_close = $invoice['invoice_close'];
            $remoteapp_invoice->isclose = $invoice['isclose'];
            $remoteapp_invoice->invoice_code = $invoice['invoice_code'];
            $remoteapp_invoice->amount = $invoice['amount'];
            $remoteapp_invoice->payment_condition = $invoice['payment_condition'];
            $remoteapp_invoice->bill_date = $invoice['bill_date'];
            $remoteapp_invoice->payment_date = $invoice['payment_date'];
            $remoteapp_invoice->invoice_make = $invoice['invoice_make'];
            $remoteapp_invoice->created_at = $invoice['created_at'];
            $remoteapp_invoice->updated_at = $invoice['updated_at'];
            $remoteapp_invoice->offer_id = $invoice['offer_id'];
            $remoteapp_invoice->save();
        });

        $statistics->save();

        $this->info("Import stats");
        $this->info("  user count: " . $statistics->user_count);
        $this->info("  relation count: " . $statistics->relation_count);
        $this->info("  project count: " . $statistics->project_count);
        $this->info("  chapter count: " . $statistics->chapter_count);
        $this->info("  activity count: " . $statistics->activity_count);
        $this->info("  offer count: " . $statistics->offer_count);
        $this->info("  invoice count: " . $statistics->invoice_count);
    }
}
