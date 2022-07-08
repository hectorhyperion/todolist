<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/qwerty.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/style-starter.css');?>">

    <title>Todolist</title>
</head>
<body class="container">
    <h1 class="text"> this is a simple todolist</h1>

   <div class="card flo align top" style="width: 18rem; background-color: aliceblue;">
   <div class="card-body ">
   
   <?php echo validation_errors(); ?>

    <?php echo form_open('index/form'); ?>
    <div class="container rre">
        <div class="form-group ">
         <label for="additem" name="Add" >Add a New item</label>
            <input type="text" name="add" class="form-control-sm" id="additem" >
        </div>
            <button class="btn btn-success" type="submit">Add</button>
    </div>
     </form>
   </div>

     </div>
     <br>
     
   <div class="clear"></div>
   <br>
   <div class="card ww" style="width: 18rem;" >
    <div class="card-header">
        On To do list
         </div>
         
         <?php
		 
                foreach ($do as $todo) 
                {
                    ?>
                    <ul class="list-group list-group-flush" >
                       <li class="list-group-item" style="text-align: center;">     
                
            <a href="<?php echo site_url('index/edit/'.$todo->id);?>" s role="status">  <span class="fa fa-edit" style="float: left;"> </span>   </a>
                
        

            <?php echo $todo->additem; ?>

            
            
            <a href="<?php echo site_url('index/delete/'.$todo->id);?>"><span class="fa fa-eraser justify-content-end" style="float: right;">   </span> </a>
         
                    </li> 
                    
                </ul>
             <?php

                   }
                ?> 

             

   </div>
   <div class="clear"></div>
   <div> <a href="<?php echo site_url('index/logout');?>" class="btn btn-primary center" >Logout</a>  </div>

</body>
</html> 
