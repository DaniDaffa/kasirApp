<?php
$contact    = $this->menu_m->select_contact()->row();
$meta       = $this->menu_m->select_meta()->row();
$listSocial = $this->menu_m->select_social()->result();
?>
<footer id="colophon" class="site-footer footer-v1" >
    <div class="col-full">
        <div class="footer-social-icons">
            <span class="social-icon-text">Follow us</span>
            <ul class="social-icons list-unstyled">
                <?php 
                foreach($listSocial as $r) {
                ?>
                <li><a class="fa fa-<?=$r->social_class;?>" href="<?=$r->social_url;?>" target="_blank"></a></li>
                <?php } ?>
            </ul>
        </div>
        
        <div class="site-address">
            <ul class="address">
                <li><?=$contact->contact_name;?></li>
                <li><?=trim($contact->contact_address);?></li>
                <li>Telp. <?=$contact->contact_phone;?></li>
                <li><?=$contact->contact_email;?></li>
            </ul>
        </div>

        <div class="site-info">
            <p class="copyright">Copyright &copy; <?= date('Y'); ?> <?=$meta->meta_name;?></p>
        </div>

        <div class="pizzaro-handheld-footer-bar">
            <ul class="columns-3">
                <li class="cart" style="margin-left:35%;">
                    <a class="footer-cart-contents" href="<?=site_url('cart');?>" title="Tampilkan Cart Order Anda">
                        <?=$cart_count_footer;?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>