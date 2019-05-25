<?php
/**
 * Template for displaying search forms
 *
 * @package WordPress
 */
?>
<form method="get" id="searchform" class="navbar-form" role="search" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Wyszukaj..." name="s" id="s">
        <div class="input-group-btn">
            <button class="btn btn-default btn-search" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </div>
</form>