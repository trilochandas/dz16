<?php /* Smarty version 2.6.28, created on 2015-12-13 14:27:28
         compiled from table_row.tpl.html */ ?>
<tr>
	<td><?php echo $this->_tpl_vars['ad']->getId(); ?>
</td>
	<td><?php echo $this->_tpl_vars['ad']->getTitle(); ?>
</td>
	<td><?php echo $this->_tpl_vars['ad']->getDesc(); ?>
</td>
	<td><?php echo $this->_tpl_vars['ad']->getPrice(); ?>
</td>
	<td><?php echo $this->_tpl_vars['ad']->getName(); ?>
</td>
	<td><a class="btn btn-info showAdvert" data-id="<?php echo $this->_tpl_vars['ad']->getId(); ?>
" href="?id=<?php echo $this->_tpl_vars['ad']->getId(); ?>
">Show</a><a href="?del=<?php echo $this->_tpl_vars['ad']->getId(); ?>
" class="btn btn-danger delete">Delete</a></td>
</tr>