<?php
\OCP\Util::addScript('breakout', 'game');
\OCP\Util::addScript('breakout', 'breakout');
\OCP\Util::addScript('breakout', 'levels');
\OCP\Util::addScript('breakout', 'start');
\OCP\Util::addScript('breakout', 'soundmanager2-nodebug');

\OCP\Util::addStyle('breakout', 'breakout');
?>

<div id="app">

	<div id="app-content">
		<div id="app-content-wrapper">
			<?php print_unescaped($this->inc('part.content')); ?>
		</div>
	</div>
</div>
