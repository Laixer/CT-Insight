@extends('layout.app')

@section('title', 'Page Title')

@section('content')
  <div class="header">
    <h2><strong>Blank</strong> Page</h2>
    <div class="breadcrumb-wrapper">
      <ol class="breadcrumb">
        <li><a href="dashboard.html">Make</a>
        </li>
        <li><a href="#">Pages</a>
        </li>
        <li class="active">Dashboard</li>
      </ol>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12" style="height:720px">
      <!-- HERE COMES YOUR CONTENT -->
    </div>
  </div>
  <div class="footer">
    <div class="copyright">
      <p class="pull-left sm-pull-reset">
        <span>Copyright <span class="copyright">©</span> {{ date('Y') }} </span>
        <span>THEMES LAB</span>.
        <span>All rights reserved. </span>
      </p>
      <p class="pull-right sm-pull-reset">
        <span><a href="#" class="m-r-10">Support</a> | <a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
      </p>
    </div>
  </div>
@endsection