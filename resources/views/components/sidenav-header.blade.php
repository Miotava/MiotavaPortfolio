<!-- Sidebar Header    -->
<div class="sidenav-header d-flex align-items-center justify-content-center">
  <!-- User Info-->
  <div class="sidenav-header-inner text-center"><img src="images/avatar-1.jpg" alt="person" class="img-fluid rounded-circle">
    <h2 class="h5">{{(\Auth::user())->name}}</h2>
  </div>
  <!-- Small Brand information, appears on minimized sidebar-->
  <div class="sidenav-header-logo">
    <a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a>
  </div>
</div>