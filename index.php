<!DOCTYPE html>
<html>

  <head>
    <script type="text/javascript" src="jquery-3.5.1.min.js">
    </script>
  </head>


  <body>

      <p>Howdy - Lets get some JSON</p>
      <p id="back">Original static text</p>

      <p>
      <a href="syntax.php" target="_new">JSON Syntax</a> |
      <a href="json.php" target="_new">json.php</a>
      </p>

      <script type="text/javascript">

          $(document).ready(function() {

            $.getJSON('json.php', function(data) {
                  $('#back').html(data.first);
                  console.log(data);
            });
            
          });


      </script>

  </body>
</html>
