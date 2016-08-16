<?php $section = 'servers'; ?>

@extends('layout.app')

@section('content')
  <div class="header">
    <h2>Application <strong>environments</strong></h2>
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
    
    <div class="col-lg-6">
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

    <div class="col-lg-6">
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
  @include('layout.footer')
@endsection