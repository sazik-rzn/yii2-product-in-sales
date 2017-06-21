<?php if ($js) { ?>
    <?php sazik\product\InSales\widgets\SalesWidget\Asset::register($this);?>
    <script>
        var sales_ids = '<?= $ids ?>';        
    </script>
<?php } ?>
<div class="sales-checkbox checkbox">
    <label class="salesFilter">
        <input name="sales" type="checkbox" class="sales-input sales ids"  value="">Товары со скидкой
    </label>
</div>
