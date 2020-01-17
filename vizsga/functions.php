<?php

function login()
{
    if(!isset($_SESSION['user_id']))
    {
        echo '
                <div id="login-div">
                    <li class="nav-item">
                        <a id="btn_belep" class="btn" href="#">Belépés</a>
                        <img id="kep_belep" src="img/icons/login.png" width="25px" height="25px">
                    </li>
                    <li>
                        <a id="btn_reg" class="btn" href="#">Regisztráció</a>
                        <img src="img/icons/regist.png" width="25px" height="25px">
                    </li>
                </div>

                <div id="login-form">
					<div id="close-login">
						<img id="close_login_button" src="img/close_icon.png" alt="closeButton" height="20" width="20">
					</div>
                    <form action="" method="post">
                        <input type="text" id="uname" name="login_uname" placeholder="Felhasználónév">
                        <input type="password" id="pw" name="login_pw" placeholder="Jelszó">
                        <br>
                        <input type="submit" value="Belépés">
                        <a id="elf_jel" href="elfelejtett_jelszo.php">Elfelejtett jelszó?</a>
                    </form>
                </div>
            ';
    }
    else
    {
        echo '
                <a class="nav-link" href="profilom.php">
                Profilom
                </a>
             ';  
    }
    
}
?>