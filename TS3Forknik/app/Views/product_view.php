<link rel="stylesheet" href="<?= base_url("public/style/background_cs.css")?>">
<script src="<?= base_url("public/javascript/background_js.js")?>"></script>

<div class="d-flex align-items-center justify-content-center">
    <div class="col col-md-6">
        <form action="" method="post" class="adjust">
            <div class="form-group mb-2">
                <label for="id" class=" form-label">id</label>
                <input type="text" name="id" id="id" class="form-control" value="<?= $product['id']; ?>" readonly>
            </div>
            <div class="form-group mb-2">
                <label for="barcode" class="form-label">Barcode</label>
                <input type="text" name="barcode" id="barcode" class="form-control" value="<?= $product['barcode']; ?>" readonly>
            </div>
            <div class="form-group mb-2">
                <label for="productname" class="form-label">Name</label>
                <input type="text" name="productname" id="productname" class="form-control" value="<?= $product['productname']; ?>" readonly>
            </div>
            <div class="form-group mb-2">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control" value="<?= $product['description']; ?>" readonly>
            </div>
            <div class="form-group mb-2">
                <label for="purchaseprice" class="form-label">Price</label>
                <input type="text" name="purchaseprice" id="purchaseprice" class="form-control" value="<?= $product['purchaseprice']; ?>" readonly>
            </div>
            <div class="form-group mb-2">
                <label for="deliverydate" class="form-label">Delivery Date</label>
                <input type="text" name="deliverydate" id="deliverydate" class="form-control" value="<?= $product['deliverydate']; ?>" readonly>
            </div>
            <div class="form-group mb-2">
                <label for="supplier" class="form-label">Supplier</label>
                <input type="text" name="supplier" id="supplier" class="form-control" value="<?= $product['supplier']; ?>" readonly>
            </div>
            <div class="form-group mb-2">
                <label for="dateencoded" class="form-label">Date Encoded</label>
                <input type="text" name="dateencoded" id="dateencoded" class="form-control" value="<?= $product['dateencoded']; ?>" readonly>
            </div>
            <div class="form-group">
                <!-- <button type="submit" class="btn btn-success">Sign Up</button> -->
                <a href="<?= base_url('products'); ?>" class="btn btn-danger">Go Back</a>
            </div>
        </form>
    </div>
</div>