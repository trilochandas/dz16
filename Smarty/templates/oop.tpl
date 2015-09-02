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
    <div class="menu">
      <a class="btn btn-default" href="{$smarty.server.SCRIPT_NAME}">HOME</a>  
      
    </div>
    <form id="advertForm" class="form-horizontal" method="POST" role="form">
    <h2 class="sub-header">Add advert</h2>
    <input type="text" name="id" value="{$id|default:''}" hidden>
  <div class="form-group">
    <label for="inputTitle" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
      <input type="text" name="title" value="{$title|default:''}" class="form-control" id="inputTitle" placeholder="Title">
    </div>
  </div>
  <div class="form-group">
    <label for="inputDescription" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
     <textarea name="description" class="form-control" id="inputDescription" rows="3">{$description|default:''}</textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
     <input type="text" name="name" value="{$name|default:''}" class="form-control" id="inputName" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
     <input type="email" name="email" value="{$email|default:''}" class="form-control" id="inputEmail" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputCity" class="col-sm-2 control-label">City</label>
    <div class="col-sm-10">
     {html_options class="form-control" id="city" name=city options=$citys selected=$city|default:'' }
    </div>
  </div>
  <div class="form-group">
    <label for="inputCity" class="col-sm-2 control-label">Metro</label>
    <div class="col-sm-10">
     {html_options class="form-control" name=metro options=$metro1 selected=$metro|default:'' }
    </div>
  </div>
  <div class="form-group">
    <label for="inputCity" class="col-sm-2 control-label">Category</label>
    <div class="col-sm-10">
     {html_options class="form-control" name=category_id options=$categorys selected=$category_id|default:'' }
    </div>
  </div>
  <div class="form-group">
    <label for="inputPhone" class="col-sm-2 control-label">Phone</label>
    <div class="col-sm-10">
     <input type="phone" name="phone" value="{$phone|default:''}" class="form-control" id="inputPhone" placeholder="0001234567">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPrice" class="col-sm-2 control-label">Price</label>
    <div class="col-sm-10">
     <input type="text" name="price" value="{$price|default:''}" class="form-control" id="inputPrice" placeholder="0">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <label>
        <input value="1" name="allow_mails" {if $allow_mails|default:'' == 1} {'checked'} {/if} type="checkbox"> Mail me!
      </label>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="radio">
        <label>  <input type="radio" {if $type|default:'' == 'private'} {'checked'} {/if} name="type" id="optionsRadios1" value="private" checked> Private advert </label>
      </div>
      <div class="radio">
        <label>  <input type="radio" {if $type|default:'' == 'company'} {'checked'} {/if} name="type" id="optionsRadios2" value="company">Company advert  </label>
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
  {include file='table.tpl.html'}
</div>

 
   
  </body>
</html>