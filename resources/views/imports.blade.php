<?php $section = 'imports'; ?>

@extends('layout.app')

@section('content')
  <div class="header">
    <h2>WebJob <strong>imports</strong></h2>
    <div class="breadcrumb-wrapper">
      <ol class="breadcrumb">
        <li>
          <a href="/">Home</a>
        </li>
        <li class="active">Imports</li>
      </ol>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 portlets">
      <div class="panel">
        <div class="panel-header">
          <h3><i class="fa fa-table"></i> <strong>WebJob </strong> imports</h3>
        </div>
        <div class="panel-content">
          <table class="table dataTable" id="table2">
            <thead>
              <tr>
                <th class="no_sort" tabindex="0" rowspan="1" colspan="1" style="width: 42px;"></th>
                <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" style="width: 279px;">
                  ID
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 350px;">
                  Users
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 322px;">
                  Projects
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 241px;">
                  Chapters
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 241px;">
                  Activities
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 241px;">
                  Offers
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 241px;">
                  Invoices
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 171px;">
                  Run
                </th>
              </tr>
            </thead>
            <tbody role="alert" aria-live="polite" aria-relevant="all">
              @foreach($all_imports as $import)
              <tr class="gradeA odd">
                <td class=""></td>
                <td class="sorting_1">{{ $import->id }}</td>
                <td class="">{{ $import->user_count }}</td>
                <td class="">{{ $import->project_count }}</td>
                <td class="">{{ $import->chapter_count }}</td>
                <td class="">{{ $import->activity_count }}</td>
                <td class="">{{ $import->offer_count }}</td>
                <td class="">{{ $import->invoice_count }}</td>
                <td class="">{{ $import->created_at }}</td>
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