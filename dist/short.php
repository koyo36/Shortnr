<?php 

    require_once '../src/app/init.php';     

    $short = new Shorten();

    //$_POST['link'] = 'https://api.jquery.com/jquery.post/';

    if( isset( $_POST['link'] ) ) {
        $url = $short->setUrl($_POST['link']);

        $short->validateUrl();

        $short->saveLink();

        $short->setSlug();

        $link = $short->createLink();

    }

?>

<h1 class="lead-text">Copy your link</h1>

<div class="input-group">
    <input type="text" id="link-input" class="form-control link-input done" value="<?php echo $link; ?>" disabled>
</div>

<button id="btn-copy" class="btn btn-short">
    Copy Link
</button>

<p class="lead-p">All links on shortnr can be publicly acceessed by anyone.</p>
