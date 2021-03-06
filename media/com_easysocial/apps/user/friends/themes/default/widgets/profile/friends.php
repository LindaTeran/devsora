<?php
/**
* @package		EasySocial
* @copyright	Copyright (C) 2010 - 2013 Stack Ideas Sdn Bhd. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* EasySocial is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/
defined( '_JEXEC' ) or die( 'Unauthorized Access' );
?>
<div class="es-widget">
	<div class="es-widget-head">
		<div class="pull-left widget-title">
			<?php echo JText::_( 'APP_FRIENDS_USER_FRIENDS' ); ?>
		</div>
		<span class="widget-label">( <?php echo $total; ?> )</span>
	</div>
	<div class="es-widget-body">
		<ul class="widget-list-grid">
			<?php if( $friends ){ ?>
				<?php foreach( $friends as $friend ){ ?>
				<li>
					<a class="es-avatar es-avatar-small es-borderless" href="javascript:void(0);<?php //echo $friend->getPermalink();?>" 
						data-popbox="module://easysocial/profile/popbox"
						data-user-id="<?php echo $friend->id;?>"
					>
						<img src="<?php echo $friend->getAvatar();?>" alt="<?php echo $this->html( 'string.escape' , $friend->getName() );?>" />
					</a>
				</li>
				<?php } ?>
			<?php } else { ?>
				<li class="empty small">
					<?php echo JText::_( 'APP_FRIENDS_WIDGET_PROFILE_USER_NO_FRIENDS_CURRENTLY' );?>
				</li>
			<?php } ?>
		</ul>

		<?php if( $total > 0 ){ ?>
		<div>
			<a href="<?php echo FRoute::friends( array( 'userid' => $activeUser->getAlias() ) );?>" class="small"><?php echo JText::_( 'APP_FRIENDS_VIEW_ALL' );?></a>
		</div>
		<?php } ?>
	</div>
</div>
