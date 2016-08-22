<?php $section = 'users'; ?>

@extends('layout.app')

@section('content')
  <div class="header">
    <h2>Gross <strong>share</strong></h2>
    <div class="breadcrumb-wrapper">
      <ol class="breadcrumb">
        <li>
          <a href="/">Home</a>
        </li>
        <li class="active">Users</li>
      </ol>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel">
        <div class="panel-header">
          <h3><i class="fa fa-table"></i> <strong>Gross </strong> share</h3>
        </div>
        <div class="panel-content">
          <table class="table dataTable" id="table2">
            <thead>
              <tr>
                <th class="no_sort" tabindex="0" rowspan="1" colspan="1"></th>
                <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1">
                  Username
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                  Projects
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                  Of total
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                  Chapters
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                  Of total
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                  Activities
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                  Of total
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                  Offers
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                  Of total
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                  Invoices
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                  Of total
                </th>                
              </tr>
            </thead>
            <tbody role="alert" aria-live="polite" aria-relevant="all">
              @foreach ($all_users as $user)
              <tr class="gradeA odd">
                <td class="center "></td>
                <td class=" sorting_1">{{ $user->username }}</td>
                <td class=" ">{{ $user->project_count }}</td>
                <td class=" ">{{ $user->project_gross }}%</td>
                <td class=" ">{{ $user->chapter_count }}</td>
                <td class=" ">{{ $user->chapter_gross }}%</td>
                <td class=" ">{{ $user->activity_count }}</td>
                <td class=" ">{{ $user->activity_gross }}%</td>
                <td class=" ">{{ $user->offer_count }}</td>
                <td class=" ">{{ $user->offer_gross }}%</td>
                <td class=" ">{{ $user->invoice_count }}</td>
                <td class=" ">{{ $user->invoice_gross }}%</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @include('layout.footer')
@endsection