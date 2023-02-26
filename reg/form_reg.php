<?php session_start(); ?>
<div class="form_container">
            <div>
            <h3>Регистрация</h3>
                <?php echo $_SESSION['error']; ?>
                <form action="<?php $_SERVER['SERVER_NAME']; ?>user_create_info.php" method="post">
                    <div class="form-group">
                        <label for="">Эл. адрес</label>
                        <input type="text" name="email">
                    </div>
                    <div class="form-group">
                        <label for="">Пароль</label>
                        <input type="password" name="password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn">Создать</button>
                    </div>
                </form>
            </div>
</div>