<img src="<?= BasePath ?>assets/Images/OTLogo.png" alt="OpenTube logo">
<h1><?= isset($step) ? $step : Name . ' ' . OTVer ?> setup</h1>
<div>
	<ol class="steps">
		<?php
			function addStep ($step) {
				$actual = false;
				if (isset($GLOBALS['step']) && $GLOBALS['step'] == $step) {
					$actual = true;
				}
				echo '<li>';
				echo $actual ? '<b><u><i>' : '';
				echo $step;
				echo $actual ? '</i></u></b>' : '';
				echo '</li>';
			}
			addStep('General');
			addStep('Database server');
		?>
	</ol>
</div>
