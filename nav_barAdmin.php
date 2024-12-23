<header class="header black-bg">
  <a href="viewAppointmentPatient.php" class="logo"><b>PSY</b></a>
  <div class="top-menu">
    <ul class="nav pull-right">
      <li><a class="logout" href="StaffRegister.php">Register Staff</a></li>
      <li><a class="logout" href="Doctor_Register.php">Register Doctor</a></li>
      <li><a class="logout" href="logout.php">Logout</a></li>
      <li style="display: inline-block;">
        <form class="form-inline" role="search" method="post" action="Staff_SearchDetails.php">
          <div style="font-family: 'Figtree', sans-serif;font-size: 14px;">
            <label for="">Search Staff:</label>
            <input type="text" name="staff_id" id="text" class="form-control" placeholder="User ID">
            <button type="submit" name="submit" id="search" value="Search" class="btn btn-info">CARI</button>
          </div>
        </form>
      </li>
    </ul>
  </div>
</header>


    <style>
      .top-menu ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.top-menu li {
  display: inline-block;
  margin-right: 10px;
}

.top-menu li:last-child {
  margin-right: 0;
}

.top-menu a.logout {
  background-color: #4FB9AF;
  color: #fff;
  border-radius: 5px;
  padding: 10px 20px;
  text-decoration: none;
  display: inline-block;
}

.top-menu a.logout:hover {
  background-color: #89B8CA;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.top-menu {
  display: flex;
  align-items: center;
}


      </style>
    <!--header end-->