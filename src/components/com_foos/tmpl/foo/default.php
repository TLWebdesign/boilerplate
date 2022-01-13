<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_foos
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
\defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Helper\ContentHelper;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use FooNamespace\Component\Foos\Administrator\Service\Direction\Map as DirectionMap;
use FooNamespace\Component\Foos\Administrator\Service\Direction\Text as DirectionText;
use FooNamespace\Component\Foos\Administrator\Service\Direction\Image as DirectionImage;

<<<<<<< HEAD
$canDo   = ContentHelper::getActions('com_foos', 'category', $this->item->catid);
$canEdit = $canDo->get('core.edit') || ($canDo->get('core.edit.own') && $this->item->created_by == Factory::getUser()->id);
$tparams = $this->item->params;

if ($tparams->get('show_name')) {
	if ($this->Params->get('show_foo_name_label')) {
=======
if ($this->item->params->get('show_name')) {
	if ($this->params->get('show_foo_name_label')) {
>>>>>>> origin/t24b
		echo Text::_('COM_FOOS_NAME');
	}

	echo $this->item->name;
}
?>

<?php if ($canEdit) : ?>
	<div class="icons">
		<div class="float-end">
			<div>
				<?php echo HTMLHelper::_('fooicon.edit', $this->item, $tparams); ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php
	$fooComponent = Factory::getApplication()->bootComponent('com_foos');
?>
<hr>
<?php
	$fooComponent->setDirectionExtension(new DirectionMap);
	echo $fooComponent->getDirectionExtension()->findDirection();
?>
<hr>
<?php
	$fooComponent->setDirectionExtension(new DirectionText);
	echo $fooComponent->getDirectionExtension()->findDirection();
?>
<hr>
<?php
	$fooComponent->setDirectionExtension(new DirectionImage);
	echo $fooComponent->getDirectionExtension()->findDirection();
?>
<hr>

<?php
echo $this->item->event->afterDisplayTitle;
echo $this->item->event->beforeDisplayContent;
echo $this->item->event->afterDisplayContent;
