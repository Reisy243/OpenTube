<img src="<?= BasePath ?>assets/Images/OTLogo.png" alt="OpenTube logo">
<h1><?= isset($step) ? $step : Name . ' ' . OTVer ?> setup</h1>
<div>
	<ol class="steps">
		<?php
			$addStep = fn($step) => print '<li>' . (isset($GLOBALS['step']) && $GLOBALS['step'] == $step ? '<b><u><i>' . $step . '</i></u></b>' : $step) . '</li>';
			$isAvalible = fn($avalible, $text) => print '<span style="color: #' . ($avalible ? '32CD32' : 'FF6347') . ';"><b><u><i>' . $text . '</i></u></b></span>';
			$addStep('General');
			$addStep('Database server');
		?>
	</ol>
</div>
