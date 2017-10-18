@extends('layouts.home')
@section('content')
          <div class="row mt">
              <div class="col-md-12">
                  <div class="content-panel">
                      <table class="table table-striped table-advance table-hover">
                        <h4><i class="fa fa-angle-right"></i>用户列表</h4>
                        <hr>
                          <thead>
                          <tr>
                              <th><i class="fa fa-bullhorn"></i> 用户名称</th>
                              <th class="hidden-phone"><i class="fa fa-question-circle"></i> 用户电话</th>
                              <th><i class=" fa fa-edit"></i>email</th>
                              <th></th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach ($users as $user)
                          <tr>
                              <td><a href="#">{{$user->name}}</a></td>
                              <td class="hidden-phone">{{$user->phone}}</td>
                              <td>{{$user->email}}</td>
                              <td>
                                  <button class="btn btn-success btn-xs">查看</button>
                                  <a href="/user/{{$user->id}}/edit"><button class="btn btn-danger btn-xs">修改</button></a>
                              </td>
                          </tr>
                            @endforeach
                          </tbody>
                      </table>
                  </div><!-- /content-panel -->
              </div><!-- /col-md-12 -->
          </div><!-- /row -->
@endsection
