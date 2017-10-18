<!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <h5 class="centered">{{ Auth::user()->name }}</h5>

            <li class="mt">
                <a class="active" href="/index">
                    <i class="fa fa-dashboard"></i>
                    <span>我的首页</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-desktop"></i>
                    <span>客户管理</span>
                </a>
                <ul class="sub">
                    <li><a  href="/customer">我的客户</a></li>
                    <li><a  href="/customer/create">创建客户</a></li>
                    <li><a  href="#">管理客户</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-th"></i>
                    <span>日程管理</span>
                </a>
                <ul class="sub">
                    <li><a  href="#">我的日程</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-tasks"></i>
                    <span>员工管理</span>
                </a>
                <ul class="sub">
                    <li><a  href="/user">员工列表</a></li>
                    <li><a  href="/user/create">创建员工</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>统计数据</span>
                </a>
                <ul class="sub">
                    <li><a  href="#">客户统计</a></li>
                    <li><a  href="#">签约统计</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-cogs"></i>
                    <span>系统设置</span>
                </a>
                <ul class="sub">
                    <li><a  href="#">修改密码</a></li>
                    <li><a  href="#">退出系统</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
