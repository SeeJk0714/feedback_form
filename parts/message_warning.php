<?php 
if(isset( $_SESSION['warning'])):?>
    <div class="card p-4 mb-3">
        <div class="text-center">
            <p class="fs-4 "><?= $_SESSION['warning']; ?></p>
            <a href="/login" type="button" class="btn btn-primary ">Login</a>
            <a href="/signup" type="button" class="btn btn-primary ">Sign Up</a>
        </div>
        <?php unset ($_SESSION['warning']); ?>
    </div>
<?php endif; ?>
