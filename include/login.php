<?php
if (isset($_POST['fullname']) && isset($_POST['password']))
{ echo '<p style="text-align:center; color:#ff234d; font-weight: 700; font-family:sans-serif;">You have successfully Logged in</p>';}
else echo 'ERROR!!';