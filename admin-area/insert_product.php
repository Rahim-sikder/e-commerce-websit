<?php 
include('../includes/connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Insert Products-Admin Dashboard</title>
     <!-- Boostrap and css link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css file -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
   <div class="container mt-3">
      <h1 class="text-center">Insert Products</h1>
      <!-- form -->
      <form action="" method="post" entype="multipart/form-data">
         <!-- title -->
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_title" class="form-label">
               Product Title</label>
               <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product Title" autocomplete="off" required="required">
         </div>
         <!-- description -->
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="description" class="form-label">
               Product description</label>
               <input type="text" name="description" id="description" class="form-control" placeholder="Enter product description" autocomplete="off" required="required">
         </div>
         <!-- keywords -->
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_keywords" class="form-label">
               Product keywords</label>
               <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter product keywords" autocomplete="off" required="required">
         </div>
         <!-- categories -->
         <div class="form-outline mb-4 w-50 m-auto">
           <select name="product_categories" id="" class="form-select">
            <option value="">Select a Category</option>
            <?php 
            $select_query="Select * from `categories`";
            $result_query=mysqli_query($con,$select_query);
             while($row=mysqli_fetch_assoc($result_query)){
               $category_title=$row['category_title'];
               $category_id=$row['category_id'];
               echo "<option value='$category_id'>$category_title</option>";
             }
            
            ?>
           </select>
         </div>
         <!--Brands -->
         <div class="form-outline mb-4 w-50 m-auto">
           <select name="Product_Brands" id="" class="form-select">
            <option value="">Select a Brands</option>
            <?php 
            $select_query="Select * from `brands`";
            $result_query=mysqli_query($con,$select_query);
             while($row=mysqli_fetch_assoc($result_query)){
               $brand_title=$row['brand_title'];
               $brans_id=$row['brand_id'];
               echo "<option value='$brand_id'>$brand_title</option>";
             }
            
            ?>
           </select>
         </div>

          <!-- Image 1 -->
          <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image1" class="form-label">
               Product image1</label>
               <input type="file" name="product_image1" id="product_image1" class="form-control"  required="required">
         </div>
          <!-- Image 2 -->
          <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image2" class="form-label">
               Product image2</label>
               <input type="file" name="product_image2" id="product_image2" class="form-control"  required="required">
         </div>
          <!-- Image 3 -->
          <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image3" class="form-label">
               Product image3</label>
               <input type="file" name="product_image3" id="product_image3" class="form-control"  required="required">
         </div>
         <!-- price -->
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_price" class="form-label">
               Product price</label>
               <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">
         </div>
         <!-- price -->
         <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="insert_product" class="btn btn-info mb-3 p-3" value="Insert Products">
         </div>

      </form>
   </div>



   
</body>
</html>