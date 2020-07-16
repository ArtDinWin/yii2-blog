<?
use yii\helpers\Url;
?>

<div>

<div>  
<H1><?=$post->getFullTitle('')?></H1>
</div>

<div>
	<H2><?=$post->title?></H2>
	<p><?=$post->text?> </p>
	<span>Автор статьи: <?=$post->author_id?><br>Дата: <?=$post->data?><br>Просмотры: <?=$post->views?></span>
</div>
	<button style="  display: block;
  font-family: arial,sans-serif;
  font-size: 11px;
  font-weight: bold;
  color: rgb(68,68,68);
  text-decoration: none;
  user-select: none;
  padding: .2em 1.2em;
  margin-top: 20px;
  outline: none;
  border: 1px solid rgba(0,0,0,.1);
  border-radius: 2px;
  background: rgb(245,245,245) linear-gradient(#f4f4f4, #f1f1f1);
  transition: all .218s ease 0s;"><a class="btn bin-default" href="<?=Url::to('/posts/index')?>">Все посты »</a></button>
<!--  -->
</div>




