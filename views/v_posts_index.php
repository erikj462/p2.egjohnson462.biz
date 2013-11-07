

<p> welcome postsers</p>

<body>
	<article>
<?php foreach($posts as $post): ?>
	
		<div id="pageMiddle1">&nbsp;
		<h1><?=$post['first_name']?><?=$post['last_name']?> posted:</h1>  
		
		<p><?=$post['content']?></p>

		<time datetime="<?Time::display($post['created'],'Y-m-d G:i')?>"
			<?Time:: display($post['created'])?>
		</time>

<?php endforeach; ?>
	</article>
	
</body>


