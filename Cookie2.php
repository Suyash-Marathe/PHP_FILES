<?php

setcookie("user", "", time() - 36400);

echo "<p>Username = ". $user;