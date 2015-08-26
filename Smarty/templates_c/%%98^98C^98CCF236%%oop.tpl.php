<?php /* Smarty version 2.6.28, created on 2015-08-25 15:06:42
         compiled from oop.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'oop.tpl', 28, false),array('function', 'html_options', 'oop.tpl', 52, false),)), $this); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <title>dz16-GetJSON jQuery</title>

    <!-- Bootstrap -->
   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

    <script src="js/jquery.min.js" ></script>
    <script src="js/main.js" ></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>     
    <form id="advertForm" class="form-horizontal" method="POST" role="form">
    <h2 class="sub-header">Add advert</h2>
  <div class="form-group">
    <label for="inputTitle" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
      <input type="text" name="title" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['title'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" class="form-control" id="inputTitle" placeholder="Title">
    </div>
  </div>
  <div class="form-group">
    <label for="inputDescription" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
     <textarea name="description" class="form-control" id="inputDescription" rows="3"><?php echo ((is_array($_tmp=@$this->_tpl_vars['description'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
</textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
     <input type="text" name="name" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['name'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" class="form-control" id="inputName" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
     <input type="email" name="email" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['email'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" class="form-control" id="inputEmail" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputCity" class="col-sm-2 control-label">City</label>
    <div class="col-sm-10">
     <?php echo smarty_function_html_options(array('class' => "form-control",'name' => 'city','options' => $this->_tpl_vars['citys'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['city'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, ''))), $this);?>

    </div>
  </div>
  <div class="form-group">
    <label for="inputCity" class="col-sm-2 control-label">Metro</label>
    <div class="col-sm-10">
     <?php echo smarty_function_html_options(array('class' => "form-control",'name' => 'metro','options' => $this->_tpl_vars['metro1'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['metro'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, ''))), $this);?>

    </div>
  </div>
  <div class="form-group">
    <label for="inputCity" class="col-sm-2 control-label">Category</label>
    <div class="col-sm-10">
     <?php echo smarty_function_html_options(array('class' => "form-control",'name' => 'category_id','options' => $this->_tpl_vars['categorys'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['category_id'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, ''))), $this);?>

    </div>
  </div>
  <div class="form-group">
    <label for="inputPhone" class="col-sm-2 control-label">Phone</label>
    <div class="col-sm-10">
     <input type="phone" name="phone" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['phone'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" class="form-control" id="inputPhone" placeholder="0001234567">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPrice" class="col-sm-2 control-label">Price</label>
    <div class="col-sm-10">
     <input type="text" name="price" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['price'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" class="form-control" id="inputPrice" placeholder="0">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <label>
        <input value="1" name="allow_mails" <?php if (((is_array($_tmp=@$this->_tpl_vars['allow_mails'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')) == 1): ?> <?php echo 'checked'; ?>
 <?php endif; ?> type="checkbox"> Mail me!
      </label>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="radio">
        <label>  <input type="radio" <?php if (((is_array($_tmp=@$this->_tpl_vars['type'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')) == 'private'): ?> <?php echo 'checked'; ?>
 <?php endif; ?> name="type" id="optionsRadios1" value="private" checked> Private advert </label>
      </div>
      <div class="radio">
        <label>  <input type="radio" <?php if (((is_array($_tmp=@$this->_tpl_vars['type'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')) == 'company'): ?> <?php echo 'checked'; ?>
 <?php endif; ?> name="type" id="optionsRadios2" value="company">Company advert  </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input id="send" type="submit" value="Send" name="formSubmit" class="btn btn-default">
    </div>
  </div>
</form>
<div  class="right-side">
  <div id="info" class="alert alert-warning" role="alert">
  <button type="button" class="close" onclick="$('.alert').fadeOut('slow')"><span aria-hidden="true">&times;</span></button>
  <div id="infoText"></div>
  <p id="emptyDb"></p>
</div>  
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'table.tpl.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

 
   
  </body>
</html>