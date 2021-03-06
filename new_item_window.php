<?php require_once '/php/verify_session.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add New Item</title>
        <meta charset="utf-8">

        <!--        Importing style sheets-->
        <?php include './includes/bootstrap_import_style.php'; ?>
        <link rel="stylesheet" type="text/css" href="css/navigation_style.css">


        <!--        Importing script files-->
        <?php include './includes/bootstrap_import_script.php' ?>

    </head>
    <body>
        <div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
        </div>
        <div class="modal-body">

            <form action="/php/add_new_item.php" method="post" enctype="multipart/form-data">                
                <div class="form-group">                
                    <label >Select the item category</label>
                    <select class="form-control" name="category" >
                        <option>Arts and Crafts</option>
                        <option>Gem and Jewellary </option>
                        <option>Clothes and Fabrics</option>
                        <option>Lether and Ceramics</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label >Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="LKR">
                </div>
                <div class="form-group">
                    <label >Warrenty</label>
                    <input type="number" class="form-control" id="warrenty" name="warrenty" placeholder="MONTHS">
                </div>
                <div class="form-group">
                    <label >Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="No of Products">
                </div>
                <div class="form-group">                    
                    <label for="exampleInputPassword1">Item Description</label>
                    <textarea class="form-control" name="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label >Item Image</label>                
                    Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">                    
                </div> 
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>                            
            </form>

        </div>



    </body>
</html>
