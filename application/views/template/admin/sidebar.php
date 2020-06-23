<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">VillaFarma</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard 
      <li class="nav-item active">
        <a class="nav-link" href="<?php //echo base_url(); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>-->

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Personas
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#optEstudiantes" aria-expanded="true" aria-controls="optEstudiantes">
          <i class="fas fa-user"></i>
          <span>Estudiantes</span>
        </a>
        <div id="optEstudiantes" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones: </h6>
            <a class="collapse-item" href="<?php echo base_url();?>estudiante">Lista Estudiantes</a>
            <a class="collapse-item" href="<?php echo base_url();?>estudiante/add">Nuevo Estudiante</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#optDocentes" aria-expanded="true" aria-controls="optDocentes">
          <i class="fas fa-user-tie"></i>
          <span>Docentes</span>
        </a>
        <div id="optDocentes" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones</h6>
            <a class="collapse-item" href="<?php echo base_url();?>docente">Lista Docentes</a>
            <a class="collapse-item" href="<?php echo base_url();?>docente/add">Nuevo Docente</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Procedimientos
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#optMatriculas" aria-expanded="true" aria-controls="optMatriculas">
          <i class="fas fa-fw fa-atlas"></i>
          <span>Matriculas</span>
        </a>
        <div id="optMatriculas" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones</h6>
            <a class="collapse-item" href="<?php echo base_url();?>matricula/regular">Matricula Regular</a>
            <a class="collapse-item" href="<?php echo base_url();?>matricula/recuperacion">Matricula Recuperacion</a>
            <a class="collapse-item" href="<?php echo base_url();?>matricula/extraordinaria">Matricula Extraordinaria</a>
        </div>
      </li>




      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
