<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/qwerty.css');?>">
    <title>Todolist-edit</title>
</head>
<body>

<div class="card ed" style="width: 18rem; background-color: aliceblue;">
   <div class="card-body ">
   
   <?php echo validation_errors(); ?>

    <?php echo form_open('index/update/'.$do->id); ?>
    <div class="container rre">
        <div class="form-group ">
         <label for="additem" name="Add" >Edit todolist</label>
            <input type="text" name="add" value="<?php echo $do->additem; ?>" class="form-control-sm" id="additem" >
        </div>
            <button class="btn btn-info" type="submit" value="Save data">Edit</button>
    </div>
     </form>
   </div>


</body>
</html>