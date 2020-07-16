<?
use yii\helpers\Url;
?>

<div>

<div>  
<H1>Посты БЛОГА</H1>
</div>

<?foreach($posts as $post):?>
<div style="  display: inline-block;max-width: 400px;margin-right: 30px;">
	<div >
<a class="btn bin-default" href="<?=Url::to(['posts/post','id' => $post->id])?>"><h2><?=$post->getFullTitle($post->title)?></h2></a>
<p><span>Автор: <?=$post->author_id?></span></p>
<p>Дата: <?=$post->data?> </p>
<p><?=$post->getShortText($post->text)?> </p>
<button style="  display: block;
  font-family: arial,sans-serif;
  font-size: 11px;
  font-weight: bold;
  color: rgb(68,68,68);
  text-decoration: none;
  user-select: none;
  padding: .2em 1.2em;
  margin: 20px 0;
  outline: none;
  border: 1px solid rgba(0,0,0,.1);
  border-radius: 2px;
  background: rgb(245,245,245) linear-gradient(#f4f4f4, #f1f1f1);
  transition: all .218s ease 0s;"><a class="btn bin-default" href="<?=Url::to(['posts/post','id' => $post->id])?>">Читать далее »</a></button>

<p>Просмотры: <?=$post->views?></p>

</div>	
	
</div>
<?endforeach;?>
</div>

