<?php
setcookie("authkey", "", time() - 3600);
echo "Вы вышли из системы.";

