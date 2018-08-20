 <?php
  ?><!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel ->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/userincon.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <h3><p>Admin</p></h3>
          <!--a href="#"><i class="fa fa-circle text-success"></i> Online</a->
        </div>
      </div>
      <!-- search form ->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form-->
      <ul class="sidebar-menu" data-widget="tree">
      <li><a href="<?= BASE_URL ?>dashboard"><i class="fa fa-dashboard"></i>  <span>Dashboard</span></a></li>
      <li><a href="<?= BASE_URL ?>users"><i class="fa fa-users"></i>  <span>Users</span></a></li>
      <li><a href="<?= BASE_URL ?>admin"><i class="fa fa-user"></i>  <span>Manage Admin</span></a></li>
       <li><a href="<?= BASE_URL ?>signout"><i class="fa fa-lock"></i>  <span>Sign Out</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <?= $this->Flash->render() ?>