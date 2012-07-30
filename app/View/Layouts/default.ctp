<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html> 
<html> 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    <link rel="stylesheet" href="/css/jquery.mobile-1.1.0.min.css" />
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="/js/jquery.mobile-1.1.0.min.js"></script>
</head>
<body>
	<div id="container" data-role="page">
		<div id="header"  data-role="header">
			<h1><?php echo $this->Html->link('Home', '/'); ?></h1>
		</div>
		<div id="content" data-role="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
    <script>
    $(function(){
      setTimeout(function(){
        $('#flashMessage').fadeOut('slow');       
      }, 800);
    });
    </script>
</body>
</html>
