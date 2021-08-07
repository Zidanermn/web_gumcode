
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ (Request::path() == 'admin/beranda') ? 'active' : '' }}">
          <a href="{{url('admin/beranda')}}">
            <i class="fa fa-th"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="{{ (Request::path() == 'admin/header') ? 'active' : '' }}">
          <a href="{{url('admin/header')}}">
            <i class="fa fa-clone"></i> <span>Header</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="{{ (Request::path() == 'admin/video') ? 'active' : '' }}">
          <a href="{{url('admin/video')}}">
            <i class="fa fa-youtube-play"></i> <span>Video</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="{{ (Request::path() == 'admin/layanan') ? 'active' : '' }}">
          <a href="{{url('admin/layanan')}}">
            <i class="fa  fa-code"></i> <span>Layanan</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="{{ (Request::path() == 'admin/about') ? 'active' : '' }}">
          <a href="{{url('admin/about')}}">
            <i class="fa fa-check"></i> <span>About</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="{{ (Request::path() == 'admin/portofolio') ? 'active' : '' }}">
          <a href="{{url('admin/portofolio')}}">
            <i class="fa fa-picture-o"></i> <span>Manage Portofolio</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="{{ (Request::path() == 'admin/mail') ? 'active' : '' }}">
          <a href="{{url('admin/mail')}}">
            <i class="fa fa-mail-forward"></i> <span>Pesan yg Masuk</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="{{ (Request::path() == 'admin/sosmed') ? 'active' : '' }}">
          <a href="{{url('admin/sosmed')}}">
            <i class="fa fa-facebook-square"></i> <span>Link Sosmed</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="{{ (Request::path() == 'admin/subscribe') ? 'active' : '' }}">
          <a href="{{url('admin/subscribe')}}">
            <i class="fa fa-heart"></i> <span>Subscribe</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="{{ (Request::path() == 'keluar') ? 'active' : '' }}">
          <a href="{{url('keluar')}}">
            <i class="fa fa-trash"></i> <span>Logout</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        
        
        
        <!--<li>-->
        <!--  <a href="{{ url('agenda') }}">-->
        <!--    <i class="fa fa-th"></i> <span>Agenda Bulan Ini</span>-->
        <!--    <span class="pull-right-container">-->
        <!--      <small class="label pull-right bg-green">new</small>-->
        <!--    </span>-->
        <!--  </a>-->
        <!--</li>-->
        
       
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>