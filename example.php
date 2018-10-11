<html><head></head>
<body>



<script>
$(document).ready(function(){
  $('.dropdown-submenu button').on(\"click\", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

</body></html>
