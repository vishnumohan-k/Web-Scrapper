<div class="container" >
<head>
  <meta charset="utf-8">
  <script src="jquery-1.12.2.js"></script>
</head>
<body>
<div id="opy" style="width:500px; margin:0 auto; border: thin solid grey; border-radius: 25px;padding: 20px;">
  <?php
  include 'option_regx.php';
  ?>
<form method="POST" action="updateREGX.php">
<div id="listes"></div>
</form>
<script>
$( "select" )
  .change(function () {
    var str = "regx_table.php?regx_id=";
    $( "select option:selected" ).each(function() {
      str += $( this ).val() + " ";
    });
    $('#listes').load(str).fadeIn('slow');
  })
  .change();
</script>
</div>
</div>