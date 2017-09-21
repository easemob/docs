<?php
/**
 * DokuWiki Bootstrap3 Template: Tools Menu
 *
 * @link     http://dokuwiki.org/template:bootstrap3
 * @author   Giuseppe Di Terlizzi <giuseppe.diterlizzi@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

if (bootstrap3_conf('showTools')):

$all_tools = bootstrap3_tools_menu();

foreach (bootstrap3_conf('showIndividualTool') as $tool) {
  if ($dropdown = bootstrap3_toolsevent($tool.'tools', $all_tools[$tool]['menu'], 'main', true)) {
    $tools[$tool] = $all_tools[$tool];
    $tools[$tool]['dropdown'] = $dropdown;
  }
}

?>

<ul class="nav navbar-nav" id="dw__tools">

<?php if (bootstrap3_conf('individualTools')): foreach($tools as $id => $menu): ?>

  <li class="dropdown">

    <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="<?php echo $lang[$id.'_tools'] ?>">
      <i class="<?php echo $menu['icon'] ?>"></i> <span class="hidden-lg hidden-md hidden-sm"><?php echo $lang[$id.'_tools'] ?></span> <span class="caret"></span>
    </a>

    <ul class="dropdown-menu tools" role="menu">

      <li class="dropdown-header hidden-xs hidden-sm">
        <i class="<?php echo $menu['icon'] ?>"></i> <?php echo $lang[$id.'_tools'] ?>
      </li>
      <?php echo $menu['dropdown'] ?>

    </ul>
  </li>

<?php endforeach; else: ?>

  <li class="dropdown">

    <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="<?php $lang['tools'] ?>">
      <i class="fa fa-fw fa-wrench"></i> <span class="hidden-lg hidden-md hidden-sm"><?php echo $lang['tools'] ?></span> <span class="caret"></span>
    </a>

    <ul class="dropdown-menu tools" role="menu">
    <?php $i = 1; $max = count(array_keys($tools)); foreach($tools as $id => $menu): ?>

      <li class="dropdown-header">
        <i class="<?php echo $menu['icon'] ?>"></i> <?php echo $lang[$id.'_tools'] ?>
      </li>
      <?php echo $menu['dropdown'] ?>

      <?php if ($max > $i): ?>
      <li class="divider" role="separator"></li>
      <?php endif; ?>

    <?php $i++; endforeach; ?>
    </ul>
  </li>

<?php endif; ?>

</ul>

<?php endif; ?>
