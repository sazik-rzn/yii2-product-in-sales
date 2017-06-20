<script>
    var ids = '<?= $ids ?>';
    $(document).ready(function () {
        $.post('/insales', {
            ids: ids
        }).done(function (data) {
            if (data !== 0 && data !== "0") {
                $('#sales-input').val(data);
            } else {
                $('#sales-checkbox').remove();
            }
        }).fail(function () {
            $('#sales-checkbox').remove();
        });
    });
</script>
<div id="sales-checkbox" class="checkbox">
    <label class="salesFilter">
        <input id="sales-input" name="sales" type="checkbox" class="sales ids"  value="">Товары со скидкой
    </label>
</div>
