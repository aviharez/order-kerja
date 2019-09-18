@extends('layouts.master')
@section('title_site', 'Profile')
@section('profile', 'active')
@section('title_page', 'Profile')

{{-- @section('breadcumb_nav')
    <li class="breadcrumb-item"><a href="/category">Data Barang</a>
    </li>
    <li class="breadcrumb-item active">Daftar Stok Barang</li>
@endsection --}}

@section('content')
<div class="page-content container-fluid">
  <div class="page-profile">
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <div class="card-header no-border text-xs-center">
          <div class="card-block">
            <h4 class="profile-user">Fulan bin Fulan</h4>
            <p class="profile-job">fulan</p>
            <p class="profile-job">abc@xyz.com</p>
            <p class="profile-job">General</p>          
            <p class="profile-job">PKC</p>        
          </div>
        </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="card">
            <div class="card-header no-border">
                <h4 class="card-title">Profile</h4>
                <a class="heading-elements-toggle"><i class="ft-more-horizontal font-medium-3"></i></a>
                <div class="heading-elements">
                </div>
            </div>
              <div class="card-content">
                <div class="card-body position-relative">
                    <form class="form-horizontal" method="POST">
                        <div class="form-group row">
                          <label class="col-xs-12 col-md-2 form-control-label">Name</label>
                          <div class="col-md-10 col-xs-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" autocomplete="off">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-xs-12 col-md-2 form-control-label">Username</label>
                          <div class="col-md-10 col-xs-12">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-xs-12 col-md-2 form-control-label">Email</label>
                          <div class="col-md-10 col-xs-12">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off">
                          </div>
                        </div>
                          <div class="form-group row">
                          <div class="col-xs-12 col-md-10 offset-md-2">
                            <input type="hidden" id="pic" name="pic" value="user6.png" checked="checked">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-default btn-outline">Reset</button>
                          </div>
                        </div>
                    </form>
                </div>
              </div>
        </div>
              
        <div class="card">
            <div class="card-header no-border">
                <h4 class="card-title">Password</h4>
                <a class="heading-elements-toggle"><i class="ft-more-horizontal font-medium-3"></i></a>
                <div class="heading-elements">
                </div>
            </div>
          <div class="card-content">
            <div class="card-body position-relative">
                <form class="form-horizontal" method="POST">
                    <div class="form-group row">
                      <label class="col-xs-12 col-md-2 form-control-label">Old Password</label>
                      <div class="col-md-10 col-xs-12">
                        <input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="Old Password" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-xs-12 col-md-2 form-control-label">New Password</label>
                      <div class="col-md-10 col-xs-12">
                        <input type="password" class="form-control" id="password" name="password" placeholder="New Password" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-xs-12 col-md-2 form-control-label">Confirm Password</label>
                      <div class="col-md-10 col-xs-12">
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" autocomplete="off">
                      </div>
                    </div>
                      
                    <div class="form-group row">
                      <div class="col-xs-12 col-md-10 offset-md-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-default btn-outline">Reset</button>
                      </div>
                    </div>
                     
                  </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection