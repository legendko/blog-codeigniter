<?= form_open('users/login'); ?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1 class="text-center"><?= $title; ?></h1>
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
            </div>
            <button type="submit" style="background-color:#772953;" class="btn btn-default btn-block">Log in</button>
        </div>
        
    </div>
    
    
<?= form_close(); ?>

