<?php

include "config.php";
if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $payment = $_POST['payment'];

    $sql = "INSERT INTO `order`(`name`, `product`, `quantity`, `price`, `address`, `state`, `email`, `phone`, `payment`) VALUES (' $name',' $product',' $quantity',' $price',' $address',' $state',' $email',' $phone',' $payment')";
    $result = $link->query($sql);
    if($result)
    {
        header('Location:adminproduct.php');
    }  
    else
    {
        echo "Erorr".$sql."<br>".$conn->error;
    }
    $link->close(); 
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Brick Lane</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
  <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="adminproduct.css">
  <link rel="stylesheet" href="css/style.css">
 
</head>
  <body>
    
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow">
	  <div class="container-fluid">
		<a class="navbar-brand fs-2 fw-bold"style="color:#FFDE2E;">&nbsp<img src="images/logo.png"style="height:55px;">&nbspBrick Lane</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
		  <ul class="navbar-nav ">
			<li class="nav-item">
			  <a class="nav-link text-white fs-5"  href="index.php">Dashboard</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link text-white fs-5" href="adminproperty.php">View Property</a>
			</li>			
      <li class="nav-item">
			  <a class="nav-link text-white fs-5" href="adminproduct.php">Product Sale</a>
			</li>	
     
      <a href="adminlogout.php"><button type="button" class="btn btn-outline-warning fw-semibold">Logout</button></a>
		  </ul>		  
		</div>
	  </div>
	</nav>
    

    <div class="hero-image shadow">
        <div class="hero-text my-3">
            <h1 style="font-family: Georgia, serif;" class=" animate__animated animate__fadeInUp animate__delay-0.5s">Product Sales</h1>
            <h6 style=" font-size:18px;color: #FFDE2E; margin-bottom:25px;"class=" animate__animated animate__fadeInUp animate__delay-1s">Check all the datails related to brick lane</h6>
            <a href="adminproperty.php"><button type="button" class="btn btn-lg btn-outline-info  text-light  animate__animated animate__fadeInUp animate__delay-2s">Learn More</button></a>           
        </div>
    </div>
    

<div class="container">  
  <div class="row">
  <p class=" ms-5 my-5 fw-semibold text-start" data-aos="fade-up" style="font-family: Georgia, serif; font-size:35px;">Place Product Order..</p>

    <div class="col" data-aos="fade-up">    
      <div class="container">
      <form method="POST">
      <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fs-5">Name</label>
            <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fs-5">Product</label>
            <select class="form-select bg-light" aria-label="Default select example" name="product">
                <option selected>Select Product</option>
                <option >Century Accent Wooden Chair</option>
                <option >Pendant lights Fabric Design</option>
                <option >Century Accent Single Sofa</option>
                <option >Traditional Fancy Jhumar</option>
                <option >Floating wooden shelve</option>
                <option >Living room carpet</option>
                </select>
               </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fs-5">Quantity</label>
            <input type="number" class="form-control" name="quantity">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fs-5">Price</label>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fs-5">Address</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
        </div>  
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fs-5">State</label>
            <select class="form-select bg-light" aria-label="Default select example" name="state">
            <option selected>State</option>
            <option>Gujarat</option>
            <option>Delhi</option>
            <option>Rajasthan</option>
            <option>Maharashtra</option>
            <option>Karnataka</option>
            <option>Hariyana</option>
            </select>
        </div> 
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fs-5">Email</label>
            <input type="email" class="form-control" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
     
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fs-5">Phone</label>
            <input type="phone" class="form-control" name="phone">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fs-5">Payment method</label>
            <input type="text" class="form-control" name="payment" value="cash on delivery">
        </div>    
        <button type="submit" name="submit" class="btn btn-primary">Place order</button>
        </form>
      </div>
    </div>
    <div class="col" data-aos="fade-left" style="margin-top:0px;">
    <p class=" ms-5 my-4 fw-semibold text-center" data-aos="fade-up" style="font-family: Georgia, serif; font-size:35px;">View Sales..</p>
    &nbsp&nbsp&nbsp&nbsp&nbsp<img src="images/productsales.png" style="height:500px; width:600px; border-radius:15px;" class="shadow">
    </div>   
  </div>
</div>



<div class="container">
<p class="ms-4 my-5 fw-semibold text-start" data-aos="fade-up" style="font-family: Georgia, serif; font-size:35px;">Best Selling Products</p>
<img src="images/product.png" style="border-radius:15px;"  class="shadow"  data-aos="fade-right">  
</div>



<p class=" ms-5 my-5 fw-semibold text-start" data-aos="fade-up" style="font-family: Georgia, serif; font-size:35px;">View Placed Order..</p>
<?php
$sql ="SELECT `id`, `name`, `product`, `quantity`, `price`, `address`, `state`, `email`, `phone`, `payment` FROM `order` WHERE 1";
$result = $link->query($sql)
?>
 <div class="container my-5" data-aos="fade-up">
 <table class="table border border-1 table-striped fs-6 shadow">
       <thead class="bg-dark text-light">
           <tr>
               <th>Id</th>
               <th>Name</th>
               <th>Product</th>
               <th>Quantity</th>
               <th>Price</th>
               <th>Address</th>
               <th>State</th>
               <th>Email</th>
               <th>Phone</th>
               <th>Payment</th>
               <th>Manage</th>
               <th>Order</th>
           </tr>
       </thead>
       <tbody>
           <?php
           if($result->num_rows>0){
               while($row=$result->fetch_assoc()){  
           ?>
           <tr>
                   <td><?php echo $row['id'];?></td>
                   <td><?php echo $row['name'];?></td>
                   <td><?php echo $row['product'];?></td>
                   <td><?php echo $row['quantity'];?></td>
                   <td><?php echo $row['price'];?></td>
                   <td><?php echo $row['address'];?></td>
                   <td><?php echo $row['state'];?></td>
                   <td><?php echo $row['email'];?></td>
                   <td><?php echo $row['phone'];?></td>
                   <td><?php echo $row['payment'];?></td>
                   <td><a class="btn btn-info"  href="productupdate.php?id=<?php echo $row['id'];?>">Edit</a></td>                                  
                   <td><a class="btn btn-danger"  href="productdelete.php?id=<?php echo $row['id'];?>">Cancel</a></td>
               </tr>
               <?php
                       }
                   }
               ?>
               

       </tbody>
   </table>
   
   </div>







    <div class="container my-5">
    <footer class="footer-59391 shadow-sm" data-aos="fade-up">
        <div class="border-bottom pb-5 mb-3">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-3">
                <form action="#" class="subscribe mb-4 mb-lg-0">
                  <div class="form-group">
                  <input type="email" class="form-control" placeholder="Enter your email">
                  <button><span class="icon-keyboard_backspace"></span></button>
                  </div>
                </form>
              </div>
              <div class="col-lg-6 text-lg-center">
                <ul class="list-unstyled nav-links nav-left mb-4 mb-lg-0">
                  <li><a href="userhome.php">Home</a></li>
                  <li><a href="services.php">Services</a></li>
                  <li><a href="properties.php">Properties</a></li>
                  <li><a href="decor.php">Decor</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-3">
                <ul class="list-unstyled nav-links social nav-right text-lg-right">
                  <li><a href="#" class="text-primary fs-5"><span class="icon-twitter"></span></a></li>
                  <li><a href="#" class="text-white" style="background: linear-gradient(to bottom right, purple, red,orange);"><span class="icon-instagram"></span></a></li>
                  <li><a href="#" class="text-white bg-primary"><span class="icon-facebook"></span></a></li>                  
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="row align-items-center">
            <div class="col-lg-4 text-lg-center site-logo order-1 order-lg-2 mb-3 mb-lg-0">
              <a href="#" class="m-0 p-0 text-warning fs-1"><img src="images/logo.png"style="height:55px;">&nbspBrick Lane</a>
            </div>
            <div class="col-lg-4 order-2 order-lg-1 mb-3 mb-lg-0">
              <ul class="list-unstyled nav-links m-0 nav-left">
                <li><a href="#">Terms</a></li>
                <li><a href="#">Cookies</a></li>
                <li><a href="#">Privacy</a></li> 
              
              </ul>
            </div>
            
            <div class="col-lg-4 text-lg-right order-3 order-lg-3">
              <p class="m-0 text-muted"><small>&copy; 2022. Brick Lane All Rights Reserved.</small></p>
            </div>
          </div>
        </div>

    </footer>
</div>





<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 300,
      duration :1000,
    });
  </script>
   <script>
        const nav = document.querySelector('nav');

        window.addEventListener('scroll', () => {
            if (window.scrollY >= 50) {
                nav.classList.add('active_nav');
            } else {
                nav.classList.remove('active_nav');
            }
        })
    </script>
 
</body>
</html>