@extends('layouts.home')
@section('content')
<div class="row mt">
  <div class="col-lg-12">
      <div class="form-panel">
          <h4 class="mb"><i class="fa fa-angle-right"></i> 创建客户</h4>
          <form class="form-horizontal style-form" method="POST"action="/customer">
              {{ csrf_field() }}
              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">客户代码</label>
                  <div class="col-sm-4">
                      <input class="form-control" id="disabledInput" type="text" placeholder="系统自动生成" disabled>
                  </div>

                  <label class="col-sm-1 col-sm-1 control-label">来源渠道</label>
                  <div class="col-sm-4">
                    <select class="form-control"name="partner" value="{{ old('partner') }}">
                      <option>请选择来源渠道</option>
                      @foreach ($partners as $partner)
                        <option>{{$partner->name}}</option>
                      @endforeach
                    </select>
                  </div>

                  <a href="/partner/create"><button type="button"class="btn btn-theme" >创建渠道</button></a>

              </div>

              <div class="form-group">
                <label class="col-sm-1 col-sm-1 control-label">客户姓名</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="请输入客户姓名"name="name" value="{{ old('name') }}">
                </div>

                  <label class="col-sm-1 col-sm-1 control-label">英文名/昵称</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="请输入英文名/昵称"name="en_name" value="{{ old('en_name') }}">
                  </div>

              </div>

              <div class="form-group">

                <label class="col-sm-1 col-sm-1 control-label">客户性别</label>
                <div class="col-sm-4">
                  <select class="form-control"name="sex" value="{{ old('sex') }}">
                    <option>女</option>
                    <option>男</option>
                  </select>
                </div>

                  <label class="col-sm-1 col-sm-1 control-label">身份证</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="请输入身份证"name="id_number" value="{{ old('id_number') }}">
                  </div>

              </div>

              <div class="form-group">
                <label class="col-sm-1 col-sm-1 control-label">出生年月</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="请输入出生年月"name="birthday" value="{{ old('birthday') }}">
                </div>

                  <label class="col-sm-1 col-sm-1 control-label">目前所在学校</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="请输入目前所在学校"name="school" value="{{ old('school') }}">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">现在专业</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="请输入现在专业"name="major_now" value="{{ old('major_now') }}">
                  </div>

                  <label class="col-sm-1 col-sm-1 control-label">意向专业</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="请输入意向专业"name="major_intention" value="{{ old('major_intention') }}">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">意向国家</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="请输入意向国家"name="country_intention" value="{{ old('country_intention') }}">
                  </div>

                  <label class="col-sm-1 col-sm-1 control-label">意向学校</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="请输入意向学校"name="school_intention" value="{{ old('school_intention') }}">
                  </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1 col-sm-1 control-label">意向状态</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="请输入意向状态"name="status_intention" value="{{ old('status_intention') }}">
                </div>

                <label class="col-sm-1 col-sm-1 control-label">年级</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="请输入年级"name="grade" value="{{ old('grade') }}">
                </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">E-Mail</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="请输入客户E-Mail"name="email" value="{{ old('email') }}">
                  </div>

                  <label class="col-sm-1 col-sm-1 control-label">QQ</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="请输入客户QQ"name="qq" value="{{ old('qq') }}">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">微信</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="请输入客户微信"name="wechat" value="{{ old('wechat') }}">
                  </div>

                  <label class="col-sm-1 col-sm-1 control-label">手机</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="请输入客户手机"name="phone" value="{{ old('phone') }}">
                  </div>
                  <button class="btn btn-theme">查重</button>
              </div>

              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">省市</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="请输入省市"name="city" value="{{ old('city') }}">
                  </div>

                  <label class="col-sm-1 col-sm-1 control-label">邮编</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="请输入邮编"name="postcode" value="{{ old('postcode') }}">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">地址</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="请输入地址"name="address" value="{{ old('address') }}">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label" >备注</label>
                  <div class="col-sm-9">
                      <textarea name="remark" class="form-control"name="remark" value="{{ old('remark') }}"></textarea>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-1 col-sm-1 control-label">创建人</label>
                  <div class="col-sm-4">
                      <input class="form-control" id="disabledInput" type="text"  name="creater_id" value="1">
                  </div>

                  <label class="col-sm-1 col-sm-1 control-label">负责销售人员</label>
                  <div class="col-sm-4">
                    <select class="form-control"name="saler">
                      <option>请选择销售人员</option>
                      <option>销售1</option>
                      <option>销售2</option>
                    </select>
                  </div>
              </div>
              <button type="button" class="btn btn-theme"><i class="fa fa-cog"></i> 查重</button>
              <button type="submit" class="btn btn-theme02"><i class="fa fa-check"></i> 创建</button>
              <a href="/customer"><button type="button" class="btn btn-theme04"><i class="fa fa-heart"></i> 返回</button></a>
          </form>
      </div>
  </div><!-- col-lg-12-->
</div><!-- /row -->
@endsection
