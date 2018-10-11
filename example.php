<header class="fixed-top bg-dark shadow">
  <a id="logo" href="/" rel="home"><img src="/logo.png" alt="Site Title"></a>
  <nav class="navbar navbar-expand-xl navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="menu"><ul class="navbar-nav mx-auto">
      <li class="nav-item dropdown"><a class="nav-link" href="link.php">Clickable Link</a>
        <button id="sub1" class="navbar-toggler-icon icon-angle-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
        <ul class="dropdown-menu" aria-labelledby="sub1">
          <li class="dropdown-item dropdown-submenu"><a href="link.php">Clickable Second Level</a>
            <button id="sub2" class="navbar-toggler-icon icon-angle-down"></button>
            <ul class="dropdown-menu" aria-labelledby="sub2">
              <li class="dropdown-item"><a href="link.php">Third Level</a></li>
            </ul>
          </li>
        </ul>
      </li>
      </ul>
    </div>
  </nav>
</header>

<style>
  @media screen and (min-width: 1200px){
    .navbar-toggler,
    .navbar-toggler-icon,
    .dropdown:hover .dropdown-menu .dropdown-menu { display: none }
    .dropdown:hover .dropdown-menu { display: block }
  }
</style>

<script>
  $(document).ready(function(){
    $('.dropdown-submenu button').on("click", function(e){
      $(this).next('ul').toggle();
      e.stopPropagation();
      e.preventDefault();
    });
  });
</script>
