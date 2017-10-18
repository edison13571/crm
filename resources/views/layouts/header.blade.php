<!-- **********************************************************************************************************************************************************
TOP BAR CONTENT & NOTIFICATIONS
*********************************************************************************************************************************************************** -->
<!--header start-->
<header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="打开/收起侧边栏"></div>
        </div>
      <!--logo start-->
      <a href="/" class="logo"><b>知艺 crm</b></a>
      <!--logo end-->
      <!--艾特include('layouts.notify')-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
              <li><form action="/logout" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-theme btn-block " type="submit" name="button">退出登录</button>
              </form></li>
        </ul>
      </div>
  </header>
<!--header end-->
