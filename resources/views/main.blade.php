<?php $section = 'board'; ?>

@extends('layout.app')

@section('content')
  <div class="row">
    <div class="col-xlg-6">
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
    </div>

      <div class="row">
        <div class="col-xlg-6">
          <div class="panel no-bd bd-3 panel-stat">
            <div class="panel-header">
              <h3><i class="icon-graph"></i> <strong>Last 5</strong> Users</h3>
            </div>
            <div class="panel-body p-15 p-b-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($top_users as $user)
                  <tr>
                    <td>{{ $user->firstname }}</td>
                    <td><span class="c-primary">{{ $user->username }}</span></td>
                    <td>
                      @if ($user->confirmed_mail)
                      <div class="badge badge-success">Active</div>
                      @else
                      <div class="badge badge-warning">Pending</div>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    <div class="col-xlg-3 col-lg-5">

      <div class="row">
        <div class="col-md-12">
          <div class="panel no-bd bd-3 panel-stat">
            <div class="panel-header">
              <h3><i class="icon-graph"></i> <strong>Active</strong> Users</h3>
              <div class="control-btn">
                <a href="#" class="panel-reload hidden"><i class="icon-reload"></i></a>
              </div>
            </div>
            <div class="panel-body p-15 p-b-0">
             <div class="row">
                <div class="col-md-6">
                  <canvas id="pie-chart"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xlg-3 col-lg-5">

      <div class="row">
        <div class="col-md-12">
          <div class="panel no-bd bd-3 panel-stat">
            <div class="panel-header">
              <h3><i class="icon-graph"></i> <strong>Continues</strong> Deployment</h3>
              <div class="control-btn">
                <a href="#" class="panel-reload hidden"><i class="icon-reload"></i></a>
              </div>
            </div>
            <div class="panel-body p-15 p-b-0">
              <div class="row">
                <div class="col-xs-12">
                  <small class="stat-title">Production environments</small>
                  <div class="f-right" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="23">
                    <div>
                      <h3 class="f-20 m-0 w-300"><img src="https://calctool.deploybot.com/badge/88313865850840/10989.svg" alt="Deployment status from DeployBot"></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <small class="stat-title">Staging environments</small>
                  <div class="f-right" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="23">
                    <div>
                      <h3 class="f-20 m-0 w-300"><img src="https://calctool.deploybot.com/badge/66802253877960/75686.svg" alt="Deployment status from DeployBot"></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <small class="stat-title">Development environments</small>
                  <div class="f-right" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="23">
                    <div>
                      <h3 class="f-20 m-0 w-300"><img src="https://calctool.deploybot.com/badge/45290641905080/14441.svg" alt="Deployment status from DeployBot" /></h3>
                    </div>
                  </div>
                </div>
              </div>
              <br/>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel no-bd bd-3 panel-stat">
            <div class="panel-header">
              <h3><i class="icon-graph"></i> <strong>Continues</strong> Intgration</h3>
              <div class="control-btn">
                <a href="#" class="panel-reload hidden"><i class="icon-reload"></i></a>
              </div>
            </div>
            <div class="panel-body p-15 p-b-0">
              <div class="row">
                <div class="col-xs-12">
                  <small class="stat-title">Master</small>
                  <div class="f-right" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="23">
                    <div>
                      <h3 class="f-20 m-0 w-300"><img src="https://codeship.com/projects/ffb6a140-26a5-0134-8351-0ee1950dc067/status?branch=master"></h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <small class="stat-title">Production</small>
                  <div class="f-right" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="23">
                    <div>
                      <h3 class="f-20 m-0 w-300"><img src="https://codeship.com/projects/ffb6a140-26a5-0134-8351-0ee1950dc067/status?branch=production"></h3>
                    </div>
                  </div>
                </div>
              </div>
              <br/>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel no-bd bd-3 panel-stat">
            <div class="panel-header">
              <h3><i class="icon-graph"></i> <strong>Last 5</strong> Users</h3>
            </div>
            <div class="panel-body p-15 p-b-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($top_users as $user)
                  <tr>
                    <td>{{ $user->firstname }}</td>
                    <td><span class="c-primary">{{ $user->username }}</span></td>
                    <td>
                      @if ($user->confirmed_mail)
                      <div class="badge badge-success">Active</div>
                      @else
                      <div class="badge badge-warning">Pending</div>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xlg-2 hidden-lg">
      <!--<div class="row">
        <div class="col-md-12">
          <ul class="jquery-clock small" data-jquery-clock="">
            <li class="jquery-clock-pin"></li>
            <li class="jquery-clock-sec"></li>
            <li class="jquery-clock-min"></li>
            <li class="jquery-clock-hour"></li>
          </ul>
        </div>
      </div>-->

      <div class="row">
        <div class="col-md-12">
          <div class="panel no-bd bd-3 panel-stat">
            <div class="panel-header">
              <h3><i class="icon-graph"></i> <strong>Application</strong> Statistics</h3>
              <div class="control-btn">
                <a href="#" class="panel-reload hidden"><i class="icon-reload"></i></a>
              </div>
            </div>
            <div class="panel-body p-15 p-b-0">
              <div class="row m-b-10">
                <div class="col-xs-3 big-icon">
                  <i class="icon-users"></i>
                </div>
                <div class="col-xs-9">
                  <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="60">
                    <div>
                      <small class="stat-title">Total users</small>
                      <h1 class="f-40 m-0 w-300">{{ $last_update->user_count }}</h1>
                    </div>
                    <div>
                      <small class="stat-title">Total projects</small>
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
                  <small class="stat-title">New Visitors</small>
                  <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="23">
                    <div>
                      <h3 class="f-20 m-0 w-300">37.5%</h3>
                    </div>
                    <div>
                      <h3 class="f-20 m-0 w-300">34.2%</h3>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6">
                  <small class="stat-title">Bounce Rate</small>
                  <div class="live-tile f-right" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="23">
                    <div>
                      <h3 class="f-20 t-right m-0 w-500">5.6%</h3>
                    </div>
                    <div>
                      <h3 class="f-20 t-right m-0 w-500">7.4%</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
  @if (0)
  <div class="row">
    <div class="col-md-4 col-sm-6 portlets">
      <div class="panel">
        <div class="panel-header panel-controls">
          <h3><i class="icon-list"></i> <strong>Todo</strong> List</h3>
        </div>
        <div class="panel-content">
          <ul class="todo-list ui-sortable">
            <li class="high">
              <span class="span-check">
              <input id="task-1" type="checkbox" data-checkbox="icheckbox_square-blue" />
              <label for="task-1"></label>
              </span>
              <span class="todo-task">Send email to Bob Linch</span>
              <div class="todo-date clearfix">
                <div class="completed-date"></div>
                <div class="due-date">Due on <span class="due-date-span">15 December 2014</span></div>
              </div>
              <span class="todo-options pull-right">
              <a href="javascript:;" class="todo-delete"><i class="icons-office-52"></i></a>
              </span>
              <div class="todo-tags pull-right">
                <div class="label label-success">Work</div>
              </div>
            </li>
            <li>
              <span class="span-check">
              <input id="task-2" type="checkbox" data-checkbox="icheckbox_square-blue"/>
              <label for="task-2"></label>
              </span>
              <span class="todo-task">Call datacenter for servers</span>
              <div class="todo-date clearfix">
                <div class="completed-date"></div>
                <div class="due-date">Due on <span class="due-date-span">7 January</span></div>
              </div>
              <span class="todo-options pull-right">
              <a href="javascript:;" class="todo-delete"><i class="icons-office-52"></i></a>
              </span>
            </li>
            <li class="low">
              <span class="span-check">
              <input id="task-3" type="checkbox" data-checkbox="icheckbox_square-blue"/>
              <label for="task-3"></label>
              </span>
              <span class="todo-task">Remove all unused icons</span>
              <div class="todo-date clearfix">
                <div class="completed-date"></div>
                <div class="due-date">Due on <span class="due-date-span">5 January</span></div>
              </div>
              <span class="todo-options pull-right">
              <a href="javascript:;" class="todo-delete"><i class="icons-office-52"></i></a>
              </span>
            </li>
            <li class="medium">
              <span class="span-check">
              <input id="task-4" type="checkbox" data-checkbox="icheckbox_square-blue"/>
              <label for="task-4"></label>
              </span>
              <span class="todo-task">Read my todo list</span>
              <div class="todo-date clearfix">
                <div class="completed-date"></div>
                <div class="due-date">Due on <span class="due-date-span">4 January</span></div>
              </div>
              <span class="todo-options pull-right">
              <a href="javascript:;" class="todo-delete"><i class="icons-office-52"></i></a>
              </span>
              <div class="todo-tags pull-right">
                <div class="label label-info">Tuesday</div>
              </div>
            </li>
            <li>
              <span class="span-check">
              <input id="task-6" type="checkbox" data-checkbox="icheckbox_square-blue"/>
              <label for="task-6"></label>
              </span>
              <span class="todo-task">Have a breakfeast before 12</span>
              <div class="todo-date clearfix">
                <div class="completed-date"></div>
                <div class="due-date">Due on <span class="due-date-span">1 January</span></div>
              </div>
              <span class="todo-options pull-right">
              <a href="javascript:;" class="todo-delete"><i class="icons-office-52"></i></a>
              </span>
            </li>
          </ul>
          <div class="clearfix m-t-10">
            <div class="pull-left">
              <button type="button" class="btn btn-sm btn-default check-all-tasks">Check All Done</button>
            </div>
            <div class="pull-right">
              <button type="button" class="btn btn-sm btn-dark add-task">Add Task</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 portlets">
      <!-- <div class="widget widget_calendar bg-dark">
        <div class="multidatepicker"></div>
      </div> -->
      <div class="panel m-t-0">
        <div class="panel-header panel-controls">
          <h3><i class="icon-basket"></i> <strong>Sales</strong> Volume Stats</h3>
        </div>
        <div class="panel-content p-t-0 p-b-0">
          <div id="bar-chart"></div>
        </div>
      </div>
    </div>
  </div>
  @endif
  @include('layout.footer')
@endsection