<?php



?>


<html>

  <head>
    <link rel='stylesheet' href="http://127.0.0.1/justinvos.github.io/lofty.css">
  </head>

  <body>
    <form>

      <h1>Initial Configuration</h1>

      <h2>General</h2>
      <input name="site_name" type="text" placeholder='Site name' required>
      <input name="site_name" type="text" placeholder='Short site name' required>

      <h2>Database</h2>
      <input name="db_host" type="text" placeholder='Host name' required>
      <input name="db_name" type="text" placeholder='Database name' required>
      <input name="db_username" type="text" placeholder='Username' required>
      <input name="db_password" type="text" placeholder='Password'>

      <h2>Security</h2>
      <input name="root_password" type="text" placeholder='Root password'>
      <input name="password_salt" type="text" placeholder='Password salt' required>

      <p class="note">NOTE: Initialising will drop all tables and the specified database if it exists.<br>It will also clear the log files and reset the root password to the password specified above.</p>

      <input type="submit" value="Initialise">
    </form>
  </body>

</html>
