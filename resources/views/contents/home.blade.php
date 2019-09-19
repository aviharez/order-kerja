@extends('layouts.master')
@section('title_site', 'Beranda')
@section('beranda', 'active')
    
@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-content">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
              <div class="pb-1">
                <div class="clearfix mb-1">
                  <i class="icon-clock font-large-1 blue-grey float-left mt-1"></i>
                  <span class="font-large-2 text-bold-300 info float-right">{{ count($waiting) }}</span>
                </div>
                <div class="clearfix">
                  <span class="text-muted">Waiting</span>
                </div>
              </div>
              <div class="progress mb-0" style="height: 7px;">
                <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="80"
                aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
              <div class="pb-1">
                <div class="clearfix mb-1">
                  <i class="icon-list font-large-1 blue-grey float-left mt-1"></i>
                  <span class="font-large-2 text-bold-300 warning float-right">{{ count($queue) }}</span>
                </div>
                <div class="clearfix">
                  <span class="text-muted">Queue</span>
                </div>
              </div>
              <div class="progress mb-0" style="height: 7px;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="60"
                aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
              <div class="pb-1">
                <div class="clearfix mb-1">
                  <i class="icon-speedometer font-large-1 blue-grey float-left mt-1"></i>
                  <span class="font-large-2 text-bold-300 primary float-right">{{ count($onprogress) }}</span>
                </div>
                <div class="clearfix">
                  <span class="text-muted">On Progress</span>
                </div>
              </div>
              <div class="progress mb-0" style="height: 7px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="45"
                aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-12">
              <div class="pb-1">
                <div class="clearfix mb-1">
                  <i class="icon-check font-large-1 blue-grey float-left mt-1"></i>
                  <span class="font-large-2 text-bold-300 success float-right">{{ count($finished) }}</span>
                </div>
                <div class="clearfix">
                  <span class="text-muted">Finished</span>
                </div>
              </div>
              <div class="progress mb-0" style="height: 7px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="75"
                aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row match-height">
  <div class="col-xl-6 col-lg-6">
    <div class="card">
      <div class="card-header no-border">
        <h4 class="card-title">Permintaan Terbaru</h4>
        <a class="heading-elements-toggle"><i class="ft-more-horizontal font-medium-3"></i></a>
      </div>
      <div class="card-content">
          <div id="deals-list-scroll" class="card-body height-450 position-relative">
              <table class="table table-middle" width="100%">
                  <tbody>
                    @foreach($orders as $item)
                    <tr>
                      <td class="media-left pr-2"><img class="media-object avatar avatar-md rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-4.png"
                        alt="Generic placeholder image"></td>
                      <td>{{ $item->description }}</td>
                      <td>{{ $item->created_at }}</td>
                      <td>
                        @if ($item->status == 'Waiting')
                          <span class="badge badge-info">{{ $item->status }}</span>
                        @endif
                        @if ($item->status == 'Queue')
                          <span class="badge badge-warning">{{ $item->status }}</span>
                        @endif
                        @if ($item->status == 'On Progress')
                          <span class="badge badge-primary">{{ $item->status }}</span>
                        @endif
                        @if ($item->status == 'Rejected')
                          <span class="badge badge-danger">{{ $item->status }}</span>
                        @endif
                        @if ($item->status == 'Finished')
                          <span class="badge badge-success">{{ $item->status }}</span>
                        @endif
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
          </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 col-lg-6">
    <div class="card">
      <div class="card-header no-border">
        <h4 class="card-title">Task Terbaru</h4>
        <a class="heading-elements-toggle"><i class="ft-more-horizontal font-medium-3"></i></a>
      </div>
      <div class="card-content">
        <div id="deals-list-scroll" class="card-body height-450 position-relative">
          @if (count($task) == 0)
            <span class="text-muted">Belum terdapat task baru</span>
          @else
          <table class="table table-middle" width="100%">
              <tbody>
                @foreach($task as $item)
                <tr>
                  <td class="media-left pr-2"><img class="media-object avatar avatar-md rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-4.png"
                    alt="Generic placeholder image"></td>
                  <td>{{ $item->description }}</td>
                  <td>{{ $item->unit }}</td>
                  <td>
                    @if ($item->priority == 'E')
                      <span class="badge badge-danger">{{ $item->priority }}</span>
                    @endif
                    @if ($item->priority == '1')
                      <span class="badge badge-warning">{{ $item->priority }}</span>
                    @endif
                    @if ($item->priority == '2')
                      <span class="badge badge-primary">{{ $item->priority }}</span>
                    @endif
                    @if ($item->priority == '3')
                      <span class="badge badge-info">{{ $item->priority }}</span>
                    @endif
                    @if ($item->priority == '4')
                      <span class="badge badge-success">{{ $item->priority }}</span>
                    @endif
                  </td>
                </tr>
                @endforeach
              </tbody>
          </table>
          @endif
            
        </div>
      </div>
    </div>
  </div>
</div>
    
@endsection