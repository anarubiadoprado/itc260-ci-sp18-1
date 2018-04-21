<?php
//application/views/news/index.php
 $this->load->view($this->config->item('theme'), 'header');

?>
<h2><?=$this->config->item('banner')?></h2>

<?php foreach ($new as $new_item): ?>

    <h3><?php echo $news_itwm['title']; ?></h3>
    <div class="main">
        <?php echo $news_item['text';]?>
        
    </div>
    <p>
        <a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a>
    </p>

<?php

endforeach;
?>
<div><?=anchor('news/create','Create News')?></div>
<?php
    
 $this->load->view($this->config->item('theme'), 'footer');

?>