@extends('layouts.home')
@section('content')
<div class="row mt">
  <div class="col-lg-12">
      <div class="form-panel">
          <h4 class="mb"><i class="fa fa-angle-right"></i> 创建客户</h4>
          <form class="form-horizontal style-form" method="POST" action="{{ route('customer.update',$customer->id)}}">
              {{ method_field('PATCH')}}
              {{ csrf_field() }}
              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">客户代码</label>
                  <div class="col-sm-4">
                      <input class="form-control" id="disabledInput" type="text" value="{{ $customer->id }}" disabled>
                  </div>

                  <label class="col-sm-1 col-sm-1 control-label">客户姓名</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="name" value="{{ $customer->name }}"disabled>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">英文名/昵称</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="en_name" value="{{ $customer->en_name }}"disabled>
                  </div>

                  <label class="col-sm-1 col-sm-1 control-label">客户性别</label>
                  <div class="col-sm-4">
                    <input class="form-control"name="sex" value="{{ $customer->sex }}"disabled>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">身份证</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="id_number" value="{{ $customer->id_number }}"disabled>
                  </div>

                  <label class="col-sm-1 col-sm-1 control-label">出生年月</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="birthday" value="{{ $customer->birthday }}"disabled>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">目前所在学校</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="school" value="{{ $customer->school }}"disabled>
                  </div>

                  <label class="col-sm-1 col-sm-1 control-label">年级</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="grade" value="{{ $customer->grade }}"disabled>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">现在专业</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="major_now" value="{{ $customer->major_now }}"disabled>
                  </div>

                  <label class="col-sm-1 col-sm-1 control-label">意向专业</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="major_intention" value="{{ $customer->major_intention }}"disabled>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">意向国家</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="country_intention" value="{{ $customer->country_intention }}"disabled>
                  </div>

                  <label class="col-sm-1 col-sm-1 control-label">意向学校</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="school_intention" value="{{ $customer->school_intention }}"disabled>
                  </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1 col-sm-1 control-label">意向状态</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="status_intention" value="{{ $customer->status_intention }}"disabled>
                </div>

                  <label class="col-sm-1 col-sm-1 control-label">来源渠道</label>
                  <div class="col-sm-4">
                    <input class="form-control"name="partner" value="{{ $customer->partner }}"disabled>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">E-Mail</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="email" value="{{ $customer->email }}"disabled>
                  </div>

                  <label class="col-sm-1 col-sm-1 control-label">QQ</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="qq" value="{{ $customer->qq }}"disabled>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">微信</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="wechat" value="{{ $customer->wechat }}"disabled>
                  </div>

                  <label class="col-sm-1 col-sm-1 control-label">手机</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="phone" value="{{ $customer->phone }}"disabled>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">省市</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="city" value="{{ $customer->city }}"disabled>
                  </div>

                  <label class="col-sm-1 col-sm-1 control-label">邮编</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" name="postcode" value="{{ $customer->postcode }}"disabled>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">地址</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" name="address" value="{{ $customer->address }}"disabled>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label" >备注</label>
                  <div class="col-sm-9">
                      <textarea name="remark" class="form-control"name="remark" value="{{ $customer->remark }}"disabled></textarea>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">创建人</label>
                  <div class="col-sm-4">
                      <input class="form-control" id="disabledInput" type="text"  name="creater_id" value="{{ $customer->creater_id }}"disabled>
                  </div>

                  <label class="col-sm-1 col-sm-1 control-label">负责销售人员</label>
                  <div class="col-sm-4">
                    <input class="form-control"name="saler"value="{{ $customer->saler }}"disabled>
                  </div>
              </div>
              <a href="/customer/{{$customer->id}}/edit"><button type="button" class="btn btn-theme02"><i class="fa fa-check"></i> 修改</button></a>
              <a href="/customer"><button type="button" class="btn btn-theme04"><i class="fa fa-heart"></i> 返回</button></a>
          </form>
      </div>
  </div><!-- col-lg-12-->
</div><!-- /row -->
@endsection
