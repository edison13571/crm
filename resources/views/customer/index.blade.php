@extends('layouts.home')
@section('content')
          <div class="row mt">
              <div class="col-md-12">
                  <div class="content-panel">
                      <table class="table table-striped table-advance table-hover">
                        <h4><i class="fa fa-angle-right"></i> 我的客户</h4>
                        <hr>
                          <thead>
                          <tr>
                              <th><i class="fa fa-bullhorn"></i> 姓名</th>
                              <th class="hidden-phone"><i class="fa fa-question-circle"></i> 专业</th>
                              <th><i class="fa fa-bookmark"></i> Profit</th>
                              <th><i class="fa fa-bookmark"></i> Profit</th>
                              <th><i class="fa fa-bookmark"></i> Profit</th>
                              <th><i class=" fa fa-edit"></i> 状态</th>
                              <th></th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach ($customers as $customer)
                          <tr>
                              <td><a href="/customer/{{$customer->id}}">{{$customer->name}}</a></td>
                              <td class="hidden-phone">Lorem Ipsum dolor</td>
                              <td>123</td>
                              <td>123</td>
                              <td>123</td>
                              <td><span class="label label-info label-mini">{{$customer->status_intention}}</span></td>
                              <td>
                                  <a href="/customer/{{$customer->id}}"><button class="btn btn-success btn-xs">查看</button></a>
                                  <button class="btn btn-primary btn-xs">跟进</button>
                                  <a href="/customer/{{$customer->id}}/edit"><button class="btn btn-danger btn-xs">修改</button></a>
                              </td>
                          </tr>
                            @endforeach
                          </tbody>
                      </table>
                        {{ $customers->links() }}
                  </div><!-- /content-panel -->
              </div><!-- /col-md-12 -->
          </div><!-- /row -->
@endsection
