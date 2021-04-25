  <!-- Sidebar -->
  <div class=" border-right shadow-lg  bg-gradient" id="sidebar-wrapper">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center text-decoration-none justify-content-center pt-5"
      href="index.php">
      <div class="sidebar-brand-icon">
          <i class="fas fa-laugh-wink fa-5x"></i>
      </div>
      <div class="sidebar-brand-text mx-3 font-weight-bold"  style=" color: Dodgerblue;">My Contact App</div>
  </a>
   <!-- Divider -->
   <div>
    <hr>
</div>
    <div class="list-group list-group-flush">
      <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
      <a href="{{route('viewBooks')}}" class="list-group-item list-group-item-action bg-light">Manage Books</a>
      <a href="{{route('addBook')}}" class="list-group-item list-group-item-action bg-light">Add Books</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
    </div>
  </div>
  <!-- /#sidebar-wrapper -->