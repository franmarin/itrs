<div id="menu">
<?php $menuItems = ITRS\Menu::getRawMenuItems(); ?>
<?php if (!empty($menuItems)): ?>
    <ul class="nav">
        <?php foreach ($menuItems as $index => $menuItem): ?>
            <li><a id="menu-<?php echo $menuItem->id; ?>" href="<?php echo $menuItem->href; ?>"><?php echo $menuItem->name; ?></a></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
</div>