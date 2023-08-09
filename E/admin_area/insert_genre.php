<?php include('../includes/connect.php');?>
<?php if(isset($_POST['insert_genre'])){

    // $_POST fetches value stored in variable, EX:
    $genre_title=$_POST['genre_title']; 
    
    $genre_description=$_POST['genre_description'];
    $genre_keywords=$_POST['genre_keywords'];
    $genre_category=$_POST['genre_category'];
    $product=$_POST['product'];
    $genre_price=$_POST['genre_price'];
    $genre_status='true';
   
//    access images

    $genre_image1=$_FILES['genre_image1']['name'];
    $genre_image2=$_FILES['genre_image2']['name'];
//      access image temporary name
    $temp_image1=$_FILES['genre_image1']['tmp_name'];
    $temp_image2=$_FILES['genre_image2']['tmp_name'];

//  check empty condition, neglect product 'required' validation
if($genre_title=='' or $genre_description=='' or $genre_keywords=='' 
    or $genre_category=='' or $genre_price=='' or $genre_image1=='' or $genre_image2==''){
        echo "<script>alert('Fill In The Required Fields')</script>";
        exit();
} else{
    move_uploaded_file($temp_image1, "./genre_images/$genre_image1");
    move_uploaded_file($temp_image2, "./genre_images/$genre_image2");
// insert query.in order from db
    $insert_genres="INSERT into genres (genre_title,genre_description,genre_keywords,
    category_title,product_title,genre_image1,genre_image2,genre_price,date,status)
    values ('$genre_title','$genre_description','$genre_keywords','$genre_category','$product'
    ,'$genre_image1','$genre_image2','$genre_price',NOW(),'$genre_status')";
    $result_query=mysqli_query($con,$insert_genres );
    if($result_query){
        echo "<script>alert('Genre Added!')</script>";
    }

}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Genre.</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../style.css">
    <!-- fa -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">
    <div class="container mt-2">
        <h1 class="text-center">Insert Genre</h1>
<!-- form.. enctpe to add images.-->
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="genre_title">Genre Title</label>
        <input type="text" name="genre_title" id="genre_title" class="form-control" placeholder="Add Title" autocomplete="off" required>


    </div>
<!-- descibe genre -->
<div class="form-outline mb-4 w-50 m-auto">
        <label for="genre_description">Genre Description</label>
        <input type="text" name="genre_description" id="genre_description" class="form-control" 
        placeholder="Add Description" autocomplete="off" required>
        

    </div>
    <!-- genre keywords -->
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="genre_keywords">Genre Keywords</label>
        <input type="text" name="genre_keywords" id="genre_keywords" class="form-control" 
        placeholder="Add Keywords" autocomplete="off" required>
        

    </div>
    <!-- categories -->
    <div class="form-outline mb-4 w-50 m-auto">
        <select name="genre_category" id=""
        class="form-select">
            <option value="">Select a Category</option>
            <!-- connect to database -->
            <?php 
            $select_query="SELECT * from categories";
            $result_query=mysqli_query($con, $select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $category_title=$row['category_title'];
                $category_id=$row['category_id'];
                echo "<option value=' $category_id'> $category_title</option>";
            }
            ?>
            
            <!-- <option value="">Category 2</option> -->
    </select>
    </div>
    <!-- products -->
    <div class="form-outline mb-4 w-50 m-auto">
        <select name="product" id=""
        class="form-select">
            <option value="">Select a Product</option>

            <?php 
            $select_query="SELECT * from products";
            $result_query=mysqli_query($con, $select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $product_title=$row['product_title'];
                $product_id=$row['product_id'];
                echo "<option value='$product_id'> $product_title</option>";
            }
            ?>

    </select>
    </div>
<!-- images -->
<div class="form-outline mb-4 w-50 m-auto">
        <label for="genre_image1">Image 1</label>
        <input type="file" name="genre_image1" id="genre_image1" class="form-control" 
        placeholder="Add Image" required>
        

    </div>
<!-- image 2 -->
<div class="form-outline mb-4 w-50 m-auto">
        <label for="genre_image2">Image 2</label>
        <input type="file" name="genre_image2" id="genre_image2" class="form-control" 
        placeholder="Add Image" required>
        
    </div>

    <!-- image 3-->

    <!-- price -->
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="genre_price">Price</label>
        <input type="text" name="genre_price" id="genre_price" class="form-control" 
        placeholder="Add Price" autocomplete="off" required>

    </div>

    <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="insert_genre" class="btn btn-dark mb-2 px-3" value="Add Genre">
    </div>
</form>
    </div>
    
</body>
</html>