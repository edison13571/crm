@extends('layouts.home')
@section('content')
<div class="row mt">
  <div class="col-lg-12">
      <div class="form-panel">
          <h4 class="mb"><i class="fa fa-angle-right"></i> 创建渠道</h4>
          @include('shared.errors')
          <form class="form-horizontal style-form" method="POST"action="/partner">
            {{ csrf_field() }}
              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">渠道代码</label>
                  <div class="col-sm-4">
                      <input class="form-control" id="disabledInput" type="text" placeholder="系统自动生成" disabled>
                  </div>

                  <label class="col-sm-1 col-sm-1 control-label">渠道名称</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="请输入渠道名称"name="name" value="{{ old('name') }}">
                  </div>

              </div>

              <div class="form-group">
                <label class="col-sm-1 col-sm-1 control-label">渠道公司</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="请输入渠道公司" name="company" value="{{ old('company') }}">
                </div>

                  <label class="col-sm-1 col-sm-1 control-label">联系电话</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="请输入联系电话"name="phone" value="{{ old('phone') }}">
                  </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1 col-sm-1 control-label">E-mail</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="请输入E-mail"name="email" value="{{ old('email') }}">
                </div>

                  <label class="col-sm-1 col-sm-1 control-label">微信</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="请输入微信"name="wechat" value="{{ old('wechat') }}">
                  </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1 col-sm-1 control-label">QQ</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="请输入QQ"name="qq" value="{{ old('qq') }}">
                </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">备注</label>
                  <div class="col-sm-4">
                    <textarea name="remark" class="form-control"value="{{ old('remark') }}"></textarea>

                  </div>
              </div>


              <button type="submit" class="btn btn-theme02"><i class="fa fa-check"></i> 创建</button>
              <a href="/customer/create"><button type="button" class="btn btn-theme04"><i class="fa fa-heart"></i> 返回</button>
          </form>
      </div>
  </div><!-- col-lg-12-->
</div><!-- /row -->
@endsection
