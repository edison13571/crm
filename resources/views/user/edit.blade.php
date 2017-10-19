@extends('layouts.home')
@section('content')
<div class="row mt">
  <div class="col-lg-12">
      <div class="form-panel">
          <h4 class="mb"><i class="fa fa-angle-right"></i> 修改客户</h4>
            @include('shared.errors')
          <form class="form-horizontal style-form" method="POST" action="{{ route('user.update',$user->id)}}">
              {{ method_field('PATCH')}}
              {{ csrf_field() }}
              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">客户代码</label>
                  <div class="col-sm-4">
                      <input class="form-control" id="disabledInput" type="text" value="{{ $user->id }}" disabled>
                  </div>

                  <label class="col-sm-1 col-sm-1 control-label">客户姓名</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="请输入客户姓名"name="name" value="{{ $user->name }}">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">E-Mail</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="请输入客户E-Mail"name="email" value="{{ $user->email }}">
                  </div>

                  <label class="col-sm-1 col-sm-1 control-label">手机</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="请输入客户手机"name="phone" value="{{ $user->phone }}">
                  </div>
                  <button class="btn btn-theme">查重</button>
              </div>

              <button type="submit" class="btn btn-theme02"><i class="fa fa-check"></i> 修改</button>
              <a href="/user"><button type="button" class="btn btn-theme04"><i class="fa fa-heart"></i> 返回</button></a>
          </form>
      </div>
  </div><!-- col-lg-12-->
</div><!-- /row -->
@endsection
