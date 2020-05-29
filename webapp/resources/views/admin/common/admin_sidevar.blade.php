<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('dashboard')}}" class="brand-link">
     <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> 
      <span class="brand-text font-weight-light">G plant Basket</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>-->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{url('dashboard')}}" class="nav-link actie">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard<!-- 
                <i class="left fas fa-angle-right"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{url('add-parent-category')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                 Add Category
                <i class="fas fa-angle-right right"></i> 
              </p>
            </a>
          </li> 
          <li class="nav-item has-treeview">
            <a href="{{url('add-sub-category')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                 Add Sub Category
                <i class="fas fa-angle-right right"></i> 
              </p>
            </a>
          </li> 
          <li class="nav-item has-treeview">
            <a href="{{url('add-product')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                 Add Product
                <i class="fas fa-angle-right right"></i> 
              </p>
            </a>
          </li> 
          <li class="nav-item has-treeview">
            <a href="{{url('add-header-menu')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                 Add Header Menu
                <i class="fas fa-angle-right right"></i> 
              </p>
            </a>
          </li> 
          <li class="nav-item has-treeview">
            <a href="{{url('home-layout')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                 Add Home Layout Image
                <i class="fas fa-angle-right right"></i> 
              </p>
            </a>
          </li> 
          <li class="nav-item has-treeview">
            <a href="{{url('home-section-layout')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                 Add Home Section Layout
                <i class="fas fa-angle-right right"></i> 
              </p>
            </a>
          </li> 
          <li class="nav-item has-treeview">
            <a href="{{url('add-policy')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>Manage Content
                 <i class="fas fa-angle-right right"></i> 
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{url('show-order')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>View Order
                 <i class="fas fa-angle-right right"></i> 
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
             <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('edit-footer')}}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('edit-contact-us')}}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact Details</p>
                </a>
              </li> 
               <li class="nav-item">
                <a href="{{url('edit-about-us')}}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('add-mobile-category')}}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mobile View Home</p>
                </a>
              </li>  
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
             <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Faq
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('add-faq')}}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Faq</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('view-faq')}}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Faq</p>
                </a>
              </li> 
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
             <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Contact Details
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('view-contact-details')}}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Contact Form Detail</p>
                </a>
              </li> 
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>