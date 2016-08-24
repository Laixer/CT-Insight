<?php $section = 'board'; ?>

@extends('layout.app')

@section('content')
  <div class="row">

    <div class="col-xlg-6">

    <!-- panel left -->
    <!-- <div class="col-xlg-6"> -->
      <div class="panel">
        <div class="panel-content widget-full widget-stock stock2">
          <div class="tab_right">
            <ul class="nav nav-tabs">

              <li class="lines-3">
                <a href="#project-tab" id="project" data-toggle="tab" data-line="#C9625F" data-color="red" data-value="-8.425%">
                  <div class="clearfix">
                    <span class="pull-right">Projects</span>
                  </div>
                  <div class="clearfix">
                    <span class="c-gray pull-left"><strong>{{ $last_update->project_count }}</strong></span>
                    <span class="c-red pull-right">-8.425%</span>
                  </div>
                </a>
              </li>

              <li class="lines-3 active">
                <a href="#user-tab" id="user" data-toggle="tab" data-line="#18A689" data-color="green" data-value="+6.214%">
                  <div class="clearfix">
                    <span class="pull-right">Users</span>
                  </div>
                  <div class="clearfix">
                    <span class="c-gray pull-left"><strong>{{ $last_update->user_count }}</strong></span>
                    <span class="c-green pull-right">+6.214%</span>
                  </div>
                </a>
              </li>
              <li class="lines-3">
                <a href="#offer-tab" id="offer" data-toggle="tab"  data-line="#90ed7d" data-color="green" data-value="+2.035%">
                  <div class="clearfix">
                    <span class="pull-right">Offers</span>
                  </div>
                  <div class="clearfix">
                    <span class="c-gray pull-left"><strong>{{ $last_update->offer_count }}</strong></span>
                    <span class="c-green pull-right">+2.035%</span>
                  </div>
                </a>
              </li>
              <li class="lines-3">
                <a href="#invoice-tab" id="invoice" data-toggle="tab"  data-line="#f7a35c" data-color="red" data-value="-1.052%">
                  <div class="clearfix">
                    <span class="pull-right">Invoices</span>
                  </div>
                  <div class="clearfix">
                    <span class="c-gray pull-left"><strong>{{ $last_update->invoice_count }}</strong></span>
                    <span class="c-red pull-right">-1.052%</span>
                  </div>
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="title-stock">
                <h1>User inclination</h1>
                <span class="c-green">+6.214%</span>
              </div>
              
              <div class="tab-pane" id="project-tab" style="display:none">
                <div id="stock-project"></div>
                <!-- <div class="company-info">Yahoo! Inc. is an American multinational Internet corporation headquartered in Sunnyvale, California. It is globally known for its Web portal, search engine Yahoo Search, and related services.</div> -->
              </div>
              <div class="tab-pane active" id="user-tab">
                <div id="stock-user"></div>
                <!-- <div class="company-info">Google is a United States-headquartered, multinational corporation specializing in Internet-related services and products. These include online advertising technologies, search, cloud computing, and software.</div> -->
              </div>
              <div class="tab-pane" id="offer-tab" style="display:none">
                <div id="stock-offer"></div>
                <!-- <div class="company-info">Nokia is a Finnish multinational communications and information technology company. Nokia employed 90,000 people across 120 countries, conducts sales in more than 150 countries and reported annual revenues of around €12.7 billion.</div> -->
              </div>
              <div class="tab-pane" id="invoice-tab" style="display:none">
                <div id="stock-invoice"></div>
                <!-- <div class="company-info">HTC Corporation is a Taiwanese manufacturer of smartphones and tablets. Founded in 1997, HTC began designing and manufacturing devices such as mobile phones, touchscreen phones, and PDAs based on Windows Mobile OS.</div> -->
              </div>

            </div>
          </div>
        </div>
      </div>
    <!-- </div> -->
    <!--/ panel left -->
    
    <!-- pie chart -->
    <div class="col-xlg-4 col-lg-5 p-0">
      <div class="row">
        <div class="col-md-12">
          <div class="panel no-bd bd-3 panel-stat">
            <div class="panel-header">
              <h3><i class="icon-graph"></i> <strong>Active</strong> Users</h3>
            </div>
            <div class="panel-body p-15 p-b-0">
             <div class="row">
                <div class="col-md-6">
                  <canvas id="pie-chart"></canvas>
                </div>
                <br />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ pie chart -->

    <!-- pie chart -->
    <div class="col-xlg-4 col-lg-5">
      <div class="row">
        <div class="col-md-12">
          <div class="panel no-bd bd-3 panel-stat">
            <div class="panel-header">
              <h3><i class="icon-graph"></i> <strong>Closed</strong> Projects</h3>
            </div>
            <div class="panel-body p-15 p-b-0">
             <div class="row">
                <div class="col-md-6">
                  <canvas id="pie-chart2"></canvas>
                </div>
                <br />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ pie chart -->

    <!-- quick stats -->
    <div class="col-xlg-4 col-lg-5 p-0">
      <div class="row">
        <div class="col-md-12">
          <div class="panel no-bd bd-3 panel-stat">
            <div class="panel-header">
              <h3><i class="icon-graph"></i> <strong>Quick</strong> Totals</h3>
            </div>
            <div class="panel-body p-15 p-b-0">
              <div class="row m-b-10">
                <div class="col-xs-3 big-icon">
                  <i class="icon-users"></i>
                </div>
                <div class="col-xs-9">
                  <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="60">
                    <div>
                      <small class="stat-title">Total Users</small>
                      <h1 class="f-40 m-0 w-300">{{ $last_update->user_count }}</h1>
                    </div>
                    <div>
                      <small class="stat-title">Total Relations</small>
                      <h1 class="f-40 m-0 w-300">{{ $last_update->relation_count }}</h1>
                    </div>
                    <div>
                      <small class="stat-title">Total Projects</small>
                      <h1 class="f-40 m-0 w-300">{{ $last_update->project_count }}</h1>
                    </div>
                    <div>
                      <small class="stat-title">Total Offers</small>
                      <h1 class="f-40 m-0 w-300">{{ $last_update->offer_count }}</h1>
                    </div>
                    <div>
                      <small class="stat-title">Total Invoices</small>
                      <h1 class="f-40 m-0 w-300">{{ $last_update->invoice_count }}</h1>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="60">
                    <div>
                      <small class="stat-title">Average hour rate</small>
                      <h3 class="f-20 m-0 w-300">&euro; {{ $avg_hour }}</h3>
                    </div>
                    <div>
                    <small class="stat-title">Average additional</small>
                      <h3 class="f-20 m-0 w-300">&euro; {{ $avg_hour_more }}</h3>
                    </div>
                    <div>
                    <small class="stat-title">Average administr</small>
                      <h3 class="f-20 m-0 w-300">&euro; {{ $avg_hour_administration }}</h3>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="live-tile f-right" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="60">
                    <div class="t-right">
                      <small class="stat-title">Chapters</small>
                      <h3 class="f-20 t-right m-0 w-500">{{ $last_update->chapter_count }}</h3>
                    </div>
                    <div class="t-right">
                      <small class="stat-title">Activities</small>
                      <h3 class="f-20 t-right m-0 w-500">{{ $last_update->activity_count }}</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ quick stats -->


    </div>
    <div class="col-xlg-6">
      
    <!-- panel right -->
      <div class="panel">
        <div class="panel-header">
          <h3><i class="icon-graph"></i> <strong>Last</strong> Users to Signup</h3>
        </div>
        <div class="panel-body p-15 p-b-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Signup</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach($last_users as $user)
              <tr>
                <td>{{ $user->firstname }}</td>
                <td><span class="c-primary">{{ $user->username }}</span></td>
                <td><span class="c-primary">{{ $user->created_at->diffForHumans() }}</span></td>
                <td>
                  @if ($user->confirmed_mail)
                  <div class="badge badge-success">Active</div>
                  @else
                  <div class="badge badge-warning">Activation awaiting</div>
                  @endif
                </td>
              </tr>
              @endforeach
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    <!--/ panel right -->

    <div class="panel widget-member2">
      <div class="row">
        <div class="col-lg-6 col-xs-9">
          <div class="clearfix">
            <h3 class="m-t-0 member-name"><strong>Most active users by assets</strong></h3>
          </div>
          <div class="row">
            @foreach($top_users as $user)
            <div class="col-sm-12">
              <p><i class="fa fa-user-md c-gray-light p-r-10"></i> {{ $user->username }} [ {{ $user->project_gross }}% ]</p>
            </div>
            @endforeach
          </div>
        </div>
        <div class="col-lg-6 col-xs-9">
          <div class="clearfix">
            <h3 class="m-t-0 member-name"><strong>Most recent logins</strong></h3>
          </div>
          <div class="row">
            @foreach($recent_users as $user)
            <div class="col-sm-12">
              <p><i class="fa fa-user-md c-gray-light p-r-10"></i> {{ $user->username }}</p>
            </div>
            @endforeach
          </div>
        </div>        
      </div>
    </div>

    <!-- spider right -->
      <div class="panel">
        <div class="panel-header">
          <h3><i class="icon-graph"></i> <strong>Module</strong> Usage Ratio</h3>
        </div>
        <div class="panel-body p-15 p-b-0">
          <canvas id="radar-chart" class="full" height="75"></canvas>
        </div>
      </div>
    <!--/ spider right -->

  </div>
  <!-- </div> -->

    <!--<div class="col-md-4 col-sm-6 portlets">
      <div class="panel widget-member clearfix">
        <div class="col-xs-9">
          <h3 class="m-t-0 member-name"><strong>John Snow</strong></h3>
          <p class="member-job">Software Engineer</p>
          <div class="row">
            <div class="col-xlg-6">
              <p><i class="icon-envelope c-gray-light p-r-10"></i> cameso@it.com</p>
              <p><i class="fa fa-facebook c-gray-light p-r-10"></i> fb.com/jsnow</p>
            </div>
            <div class="col-xlg-6 align-right">
              <p><i class="icon-calendar c-gray-light p-r-10"></i> 6 may 2014</p>
              <p><i class="icon-target c-gray-light p-r-10"></i> New York</p>
            </div>
          </div>
        </div>
      </div>
    </div> -->

  <!-- <div class="row"> -->



  </div>

      <!--<div class="row">
        <div class="col-md-12">
          <div class="widget-progress-bar">
            <div class="clearfix">
              <div class="title">Profil Complete</div>
              <div class="number">82%</div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-primary stat1" data-transitiongoal="82"></div>
            </div>
            <div class="clearfix">
              <div class="title">Answer Emails</div>
              <div class="number">43%</div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-primary stat2" data-transitiongoal="43"></div>
            </div>
            <div class="clearfix">
              <div class="title">Server availability</div>
              <div class="number">93%</div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-primary stat3" data-transitiongoal="93"></div>
            </div>
            <div class="clearfix">
              <div class="title">CPU Usage</div>
              <div class="number">76%</div>
            </div>
            <div class="progress m-b-0">
              <div class="progress-bar progress-bar-primary stat4" data-transitiongoal="76"></div>
            </div>
          </div>
        </div>
      </div>-->
    </div>
  </div>
  @include('layout.footer')
@endsection