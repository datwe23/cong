<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('theme/adminlte/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree" data-api="tree">
        <li class="header">Danh mục</li>
        
        <!-- Danh mục Sản phẩm -->
        <li class="treeview {{ Request::is('admin/sanpham*') ? 'menu-open' : '' }}">
          <a href="#"><i class="fa fa-link"></i> <span>Danh mục sản phẩm</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu" style="display: {{ Request::is('admin/sanpham*') ? 'block' : 'none' }};">
            <li class="{{ Request::is('admin/sanpham') ? 'active' : '' }}"><a href="{{ route('admin.sanpham.index') }}">Danh sách sản phẩm</a></li>
            <li class="{{ Request::is('admin/sanpham/create') ? 'active' : '' }}"><a href="{{ route('admin.sanpham.create') }}">Thêm mới sản phẩm</a></li>
          </ul>
        </li>
        <!-- /.Danh mục Sản phẩm -->

        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>