<?php
    require 'parts/header.php';

?>
<div class="container my-5 mx-auto" style="max-width: 700px;">
    <h1 class="h1 mb-4 text-center">Customer Service Feedback Form</h1>
        <?php if(isset( $_SESSION['warning'])):?>
            <div class="card p-4 mb-3">
                <div class="text-center">
                    <p class="fs-4 "><?= $_SESSION['warning']; ?></p>
                    <a href="/login" type="button" class="btn btn-primary ">Login</a>
                    <a href="/signup" type="button" class="btn btn-primary ">Sign Up</a>
                </div>
                <?php unset ($_SESSION['warning']); ?>
            </div>
        <?php else :?>
            <div class="card p-4">
                <?php require dirname(__DIR__) .  '/parts/message_error.php'; ?>
                <?php require dirname(__DIR__) .  '/parts/message_success.php'; ?>
                <?php require dirname(__DIR__) .  '/parts/questions.php'; ?>
            </div> 
        <?php endif ;?>
    <?php if(isUser()):?>
        <div class="text-center mt-4">
            <a href="/results" class="btn btn-inverse">View Results</a>
            <a href="/logout" class="btn btn-inverse">Logout</a>
        </div>    
    <?php endif;?>
</div>
<?php

    require 'parts/footer.php';