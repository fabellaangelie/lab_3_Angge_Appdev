<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Add Product</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css')?>">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css')?>">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo base_url('css/responsive.css')?>">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo base_url('images/fevicon.png')?>" type="image/gif">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo base_url('css/jquery.mCustomScrollbar.min.css')?>">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="<?php echo base_url('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')?>">
      <!-- fonts -->
      <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:400,700&display=swap&subset=latin-ext')?>" rel="stylesheet">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="<?php echo base_url('css/owl.carousel.min.css')?>">
      <link rel="stylesheet" href="<?php echo base_url('css/owl.theme.default.min.css')?>">
      <link rel="stylesheet" href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')?>" media="screen">
      <link href="<?php echo base_url('https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css')?>" rel="stylesheet" type="text/css" />

      <style >
      .con{
        width: 50%;
        margin-left: 25%;
      }

      </style>
   </head>
<!-- header section start -->
<div class="header_section">
   <div class="container-fluid">
      <nav class="navbar navbar-light bg-light justify-content-between">
         <a class="logo" href="index.html"><img src="images/logo.png"></a></a>
      </nav>
   </div>
</div>

<body>
    <div  class="con">
        <h1 class="text-center mb-4">Add Product</h1>
        <form onsubmit="return insertOrUpdateProduct()" class="form">
            <!-- Remove the action attribute from the form -->
            <div class="form-group">
                <label for="prodname">Product Name:</label>
                <input type="text" class="form-control" id="prodname" name="prodname" required>
            </div>

            <div class="form-group">
                <label for="prodDescrip">Product Description:</label>
                <textarea class="form-control" id="prodDescrip" name="prodDescrip"></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image_url" name="image">
            </div>

            <div class="form-group">
                <label for="prodPrice">Product Price:</label>
                <input type="text" class="form-control" id="prodPrice" name="prodPrice" required>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>

            <!-- Add an input field to store the index of the product being edited -->
            <input type="hidden" id="productIndex" value="-1">

            <!-- Change the button type to "button" and add an onclick event to trigger the form submission -->
            <button type="button" class="btn btn-primary" onclick="insertOrUpdateProduct()">Add Product</button>
            <!-- Add a button to cancel editing -->
            <button type="button" class="btn btn-secondary" onclick="cancelEdit()">Cancel</button>
        </form>
    </div>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Table of Beauty Products</h1>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product Image</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="productTableBody">
                <!-- Products will be dynamically added here -->
            </tbody>
        </table>
    </div>

    <!-- Add Bootstrap JS and jQuery scripts (at the end of the body for better performance) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Initialize an array to store product data
        let products = [];

        // Function to insert or update a product
        function insertOrUpdateProduct() {
            const prodname = document.getElementById("prodname").value;
            const prodDescrip = document.getElementById("prodDescrip").value;
            const image_url = document.getElementById("image_url").value;
            const prodPrice = parseFloat(document.getElementById("prodPrice").value);
            const quantity = parseInt(document.getElementById("quantity").value);
            const productIndex = parseInt(document.getElementById("productIndex").value);

            if (productIndex === -1) {
                // Insert a new product
                const product = { prodname, prodDescrip, image_url, prodPrice, quantity };
                products.push(product);
            } else {
                // Update an existing product
                products[productIndex].prodname = prodname;
                products[productIndex].prodDescrip = prodDescrip;
                products[productIndex].image_url = image_url;
                products[productIndex].prodPrice = prodPrice;
                products[productIndex].quantity = quantity;
                // Reset the product index to -1 after updating
                document.getElementById("productIndex").value = -1;
            }

            // Clear the form fields
            document.getElementById("prodname").value = "";
            document.getElementById("prodDescrip").value = "";
            document.getElementById("image_url").value = "";
            document.getElementById("prodPrice").value = "";
            document.getElementById("quantity").value = "";

            // Update the product table
            updateProductTable();

            // Prevent the form from submitting
            return false;
        }

        // Function to populate the form fields for editing
        function editProduct(index) {
            document.getElementById("prodname").value = products[index].prodname;
            document.getElementById("prodDescrip").value = products[index].prodDescrip;
            document.getElementById("image_url").value = products[index].image_url;
            document.getElementById("prodPrice").value = products[index].prodPrice;
            document.getElementById("quantity").value = products[index].quantity;
            document.getElementById("productIndex").value = index;

            // Change the button text to "Update Product"
            document.querySelector('button[type="button"]').textContent = "Update Product";
        }

        // Function to cancel editing and clear the form
        function cancelEdit() {
            document.getElementById("prodname").value = "";
            document.getElementById("prodDescrip").value = "";
            document.getElementById("image_url").value = "";
            document.getElementById("prodPrice").value = "";
            document.getElementById("quantity").value = "";
            document.getElementById("productIndex").value = -1;

            // Change the button text back to "Add Product"
            document.querySelector('button[type="button"]').textContent = "Add Product";
        }

        // Function to delete a product
        function deleteProduct(index) {
            if (confirm("Are you sure you want to delete this product?")) {
                // Remove the product from the array
                products.splice(index, 1);
                // Update the product table
                updateProductTable();
                // Clear the form after deletion
                cancelEdit();
            }
        }

        // Function to update the product table
        function updateProductTable() {
            const tableBody = document.getElementById("productTableBody");
            tableBody.innerHTML = "";

            for (let i = 0; i < products.length; i++) {
                const product = products[i];
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${product.prodname}</td>
                    <td>${product.prodDescrip}</td>
                    <td>${product.image_url}</td>
                    <td>${product.prodPrice}</td>
                    <td>${product.quantity}</td>
                    <td>
                        <button class="btn btn-primary" onclick="editProduct(${i})">Edit</button>
                        <button class="btn btn-danger" onclick="deleteProduct(${i})">Delete</button>
                    </td>
                `;
                tableBody.appendChild(row);
            }
        }

        // Initial product table update
        updateProductTable();
    </script>
</body>
</html>
