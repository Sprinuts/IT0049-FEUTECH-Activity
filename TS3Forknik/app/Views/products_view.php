<link rel="stylesheet" href="<?= base_url("public/style/background_cs.css")?>">
<link rel="stylesheet" href="<?= base_url("public/style/productsview_cs.css")?>">
<script src="<?= base_url("public/javascript/background_js.js")?>"></script>

<div>
    <h3 class="text-center">List of Products</h3>
    <div class="text-center"></div>
        <a href="<?= base_url('products/add'); ?>" class="adjust btn btn-lg btn-danger">Add New Product</a>
        <div class="row justify-content-center">
            <?php foreach($products as $index => $product): ?>
            <?php if ($index % 3 == 0 && $index != 0): ?>
            </div><div class="row justify-content-center">
            <?php endif; ?>
            <div class="col-md-3 mb-3">
            <div class="card h-100">
                <div class="card-body text-center bg-dark text-white">
                <h5 class="card-title"><?= $product->productname; ?></h5>
                <p class="card-text"><strong>Price:</strong> <?= $product->purchaseprice; ?></p>
                <p class="card-text"><strong>Barcode:</strong> <?= $product->barcode; ?></p>
                <p class="card-text"><strong>Unit:</strong> <?= $product->unit; ?></p>
                <div class="btn-group" role="group">
                    <a href="<?= base_url('products/view/'.$product->id); ?>" class="btn btn-sm btn-warning">View</a>
                    <a href="<?= base_url('products/edit/'.$product->id); ?>" class="btn btn-sm btn-secondary">Edit</a>
                    <a href="<?= base_url('products/delete/'.$product->id); ?>" class="btn btn-sm btn-danger">Delete</a>
                </div>
                </div>
            </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>