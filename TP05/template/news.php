<?php 
function output_article_list($articles) {

foreach($articles as $article) { ?>
    
    <article>
      <header>
        <h1><a href="article.php?id=<?=$article['id']?>"> <?=$article['title']?> </a></h1>
      </header>
        <img src="https://picsum.photos/600/300?<?=$article['id']?>" atl="">
        <p> <?=$article['introduction']?> </p>
        <p> <?=$article['fulltext']?> </p>
      <footer>
        <span class="author"><?=$article['name']?></span>
        <span class="tags">
        <?php foreach( explode(',', $article['tags']) as $tag) {?>
          <a href="index.html"> <?='#' . $tag?></a>
        <?php } ?>
        </span>
      <span class="date"><?=date('F j', $article['published'])?> </span>
        <a class="comments" href="item.html#comments"> <?=$article['comments']?> </a>
      </footer>
    </article>
  <?php } 
  }
  ?>