<?php session_start(); ?>

            <div>
                <h3>Авторизация</h3>
                <?php echo $_SESSION['error']; ?>
                <form action="<?php $_SERVER['SERVER_NAME']; ?>/reg/user_auth_info.php" method="post">
                    <div>
                        <label for="">Эл. адрес</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div>
                        <label for="">Пароль</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div>
                        <button type="submit" class="btn">Войти</button>
                    </div>
                </form>
            </div>
