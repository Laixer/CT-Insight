<?php $section = 'projects'; ?>

@extends('layout.app')

@section('content')
  <div class="header">
    <h2>Application <strong>projects</strong></h2>
    <div class="breadcrumb-wrapper">
      <ol class="breadcrumb">
        <li>
          <a href="/board">Home</a>
        </li>
        <li class="active">Users</li>
      </ol>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 portlets">
      <div class="panel">
        <div class="panel-header">
          <h3><i class="fa fa-table"></i> <strong>Application </strong> users</h3>
        </div>
        <div class="panel-content">
          <table class="table dataTable" id="table2">
            <thead>
              <tr>
                <th class="no_sort" tabindex="0" rowspan="1" colspan="1" style="width: 42px;"></th>
                <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" style="width: 279px;">
                  Project name
                </th>
                <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" style="width: 279px;">
                  Username
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 350px;">
                  Hour rate
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 322px;">
                  Location
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 171px;">
                  Closed
                </th>
              </tr>
            </thead>
            <tbody role="alert" aria-live="polite" aria-relevant="all">
              @foreach($all_projects as $project)
              <tr class="gradeA odd">
                <td class="center "></td>
                <td class=" sorting_1">{{ $project->project_name }}</td>
                <td class=" sorting_1">{{ $project->user->username }}</td>
                <td class=" ">{{ $project->hourRateForHumans() }} {{-- $user->lastname --}}</td>
                <td class=" ">{{ $project->location() }}</td>
                <td class="center ">{{ $project->project_close ? 'Yes' : 'No' }}</td>
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