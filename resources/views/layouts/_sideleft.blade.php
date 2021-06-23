
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li class="active"><a href="{{ route('membros') }}"><i class="fa fa-calendar"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ route('membros') }}"><i class="fa fa-search"></i> <span>Solicitões</span></a></li>
        <li><a href="{{ route('membros') }}"><i class="fa fa-list"></i> <span>Membros</span></a></li>
        <li><a href="{{ route('membros') }}"><i class="fa fa-list"></i> <span>Empresas</span></a></li>

        <li class="header">User</li>
        <li class="active"><a href="{{ route('membros') }}"><i class="fa fa-calendar"></i> <span>Alterar dados</span></a></li>
        <li><a href="{{ route('membros') }}"><i class="fa fa-search"></i> <span>Certificado</span></a></li>

        <li><a href="{{ route('membros') }}"><i class="fa fa-search"></i> <span>Carterinha</span></a></li>
        <li><a href="{{ route('membros') }}"><i class="fa fa-list"></i> <span>Emitir QrCode</span></a></li>
        <li><a href="{{ route('membros') }}"><i class="fa fa-list"></i> <span>Pagamento</span></a></li>



        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i><span class="nav-label">Sair</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->




