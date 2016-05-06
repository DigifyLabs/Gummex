<?php if(!isset($active)) $active = ""; ?>
        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">

            <li class="@if($active == "orders") active @endif">
                <a href="{{route('listOrders')}}">
                    <i class="fa fa-calendar"></i> <span>Orders</span>
                </a>
            </li>
            <!-- Extras -->
            <li class="treeview @if($active == "extras") active @endif">
                <a href="#">
                    <i class="fa fa-plus"></i> <span>Extras</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('listExtras')}}"><i class="fa fa-circle-o"></i> List</a></li>
                    <li><a href="{{route('createExtra')}}"><i class="fa fa-circle-o"></i> Add New Extra</a></li>
                </ul>
            </li>
            <li class="treeview @if($active == "postcodes") active @endif" >
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Post Codes</span>
                    <span class="label label-primary pull-right"></span>
                </a>
                <ul class="treeview-menu">

                    <li><a href="{{route('bookingall')}}"><i class="fa fa-circle-o"></i> Show All Codes</a></li>
                    <li><a href="{{route('bookingadd')}}"><i class="fa fa-circle-o"></i> Add New Codes</a></li>
                    <li><a href="{{route('bookingimport')}}"><i class="fa fa-circle-o"></i> Import codes from Excel</a></li>
                </ul>
            </li>

            <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Content</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

        <!-- =============================================== -->