<?php $section = 'table'; ?>

@extends('layout.app')

@section('content')
  <div class="header">
    <h2>Application <strong>users</strong></h2>
    <div class="breadcrumb-wrapper">
      <ol class="breadcrumb">
        <li><a href="dashboard.html">Make</a>
        </li>
        <li><a href="tables.html">Tables</a>
        </li>
        <li class="active">Tables Dynamic</li>
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
                  Username
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 350px;">
                  Full name
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 322px;">
                  Email
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 241px;">
                  Gender
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 171px;">
                  Active
                </th>
              </tr>
            </thead>
            <tbody role="alert" aria-live="polite" aria-relevant="all">
              @foreach($all_users as $user)
              <tr class="gradeA odd">
                <td class="center "></td>
                <td class=" sorting_1">{{ $user->username }}</td>
                <td class=" ">{{ $user->firstname }} {{ $user->lastname }}</td>
                <td class=" ">{{ $user->email }}</td>
                <td class="center ">{{ $user->genderName() }}</td>
                <td class="center ">{{ $user->active ? 'Yes' : 'No' }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="copyright">
      <p class="pull-left sm-pull-reset">
        <span>Copyright <span class="copyright">©</span> 2015 </span>
        <span>THEMES LAB</span>.
        <span>All rights reserved. </span>
      </p>
      <p class="pull-right sm-pull-reset">
        <span><a href="#" class="m-r-10">Support</a> | <a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
      </p>
    </div>
  </div>
@endsection