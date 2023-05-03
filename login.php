<?php 
    include_once 'header.php';
    include_once './helpers/session_helper.php';
?>
    <h1 class="header">Please Login</h1>

    <?php flash('login') ?>

    <form id="login-form" method="post" action="./controllers/Users.php" style="height: 180px;">
        <input type="hidden" name="type" value="login">
        <input type="text" name="name/email"  
            placeholder="Username/Email..." 
            required
            minlength="3"
            maxlength="50"
        >
        <input type="password" name="usersPwd" 
            placeholder="Password..."
            required
            minlength="6"
            maxlength="20"
        >
        <button type="submit" name="submit" id="login-button">Log In</button>
        
    </form>

    <div class="forme-sub-msg"style="padding-bottom: 200px;"><a href="./reset-password.php">Forgotten Password?</a></div>
    
    <script>
        const loginForm = document.getElementById('login-form');
        const loginButton = document.getElementById('login-button');

        loginForm.addEventListener('submit', (e) => {
            // Prevent form submission if validation fails
            if (!loginForm.checkValidity()) {
                e.preventDefault();
            }
        });

        loginButton.addEventListener('click', (e) => {
            // Validate form fields on button click
            loginForm.reportValidity();
        });
    </script>

<?php 
    include_once 'footer.php'
?>
