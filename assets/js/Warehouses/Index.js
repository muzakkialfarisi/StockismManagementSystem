$('#btn-modal-create').on('click', function () {
    $("input[name='id_warehouse']").val("AutoGenerated");
    $("input[name='name']").val("");
    $("textarea[name='address']").html("");
    $(".picture_preview").attr('src', window.location.origin + '/stockism/assets/img/warehouses/default-warehouse.png');
});

$('.btn-edit').on('click', function () {
    $.ajax({
        type: 'POST',
        url: '/stockism/Warehouses/GetWarehouseById/',
        data: {
            id_warehouse: $(this).data("id"),
        },
        dataType: 'json',
        success: function (data) {
            $("input[name='id_warehouse']").val(data.id_warehouse);
            $("input[name='name']").val(data.name);
            $("textarea[name='address']").html(data.address);
            $(".picture_preview").attr('src', window.location.origin + '/stockism/assets/img/warehouses/' + data.picture);
        },
        error: function (response) {
            console.log(response.responseText);
        }
    });
});

$("input[name='picture']").change(function () {
    console.log("masuk");
    if (this.files && this.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (event) {
            $('.picture_preview').attr('src', event.target.result);
        };
        fileReader.readAsDataURL(this.files[0]);
    }
});