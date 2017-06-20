<?php if ($js) { ?>
    <script>
        var ids = '<?= $ids ?>';
        $(document).ready(function () {
            $.post('/insales', {
                ids: ids
            }).done(function (data) {
                if (data !== 0 && data !== "0") {
                    $('.sales-input').val(data);
                } else {
                    $('.sales-checkbox').remove();
                }
            }).fail(function () {
                $('.sales-checkbox').remove();
            });
        });
    </script>
<?php } ?>
<div class="sales-checkbox checkbox">
    <label class="salesFilter">
        <input name="sales" type="checkbox" class="sales-input sales ids"  value="">Товары со скидкой
    </label>
</div>
