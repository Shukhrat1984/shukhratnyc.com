<h1>Your email has been sent successfully</h1>



<?php if (isset($_GET['msg'])):?>
<div class="alert alert-success"><?=$_GET['msg'];?></div>
<?php endif;?>