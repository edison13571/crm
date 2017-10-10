@extends('layouts.home')
@section('content')
          <div class="row mt">
              <div class="col-md-12">
                  <div class="content-panel">
                      <table class="table table-striped table-advance table-hover">
                        <h4><i class="fa fa-angle-right"></i> 渠道列表</h4>
                        <hr>
                          <thead>
                          <tr>
                              <th><i class="fa fa-bullhorn"></i> 渠道名称</th>
                              <th class="hidden-phone"><i class="fa fa-question-circle"></i> 渠道公司</th>
                              <th><i class=" fa fa-edit"></i> 备注</th>
                              <th></th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach ($partners as $partner)
                          <tr>
                              <td><a href="#">{{$partner->name}}</a></td>
                              <td class="hidden-phone">{{$partner->company}}</td>
                              <td>{{$partner->remark}}</td>
                              <td>
                                  <button class="btn btn-success btn-xs">查看</button>
                                  <button class="btn btn-danger btn-xs">修改</button>
                              </td>
                          </tr>
                            @endforeach
                          </tbody>
                      </table>
                  </div><!-- /content-panel -->
              </div><!-- /col-md-12 -->
          </div><!-- /row -->
@endsection
