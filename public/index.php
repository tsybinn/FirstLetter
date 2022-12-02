<?php
include_once 'src/init.php';

$obOrder = new App\Order\Order();
$arOrderList = $obOrder->getAll();
$obRequest = new App\Request\Request();

if ($obRequest->getMethod() == 'GET') {
    ?>


<?php } else { ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3>Добавления заказа</h3>
                <div class="alert alert-success js_alert" role="alert">
                    Это уведомление об успехе — check it out!
                </div>
                <form>
                    <div class="form-group">
                        <label for="name_order">имя заказа</label>
                        <input type="text" class="form-control" id="name_order" placeholder="Заказ №1" value=" Заказ №1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">USER_ID</label>
                        <select class="form-control" id="user_id">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">SUM</label>
                        <select class="form-control" id="sum">
                            <option>100</option>
                            <option>200</option>
                            <option>300</option>
                            <option>400</option>
                            <option>500</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-dark js_submit">Dark</button>
                </form>
            </div>
            <div class="col">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col-lg-">#</th>
                        <th scope="col-lg-">Название заказа</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($arOrderList as $arOrder) { ?>
                        <tr>
                            <td> <?= $arOrder['ID'] ?></td>
                            <td><a href="?<?= $arOrder['ID'] ?>"><?= $arOrder['NAME'] ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php } ?>


<script>
    $(".js_alert").css("display", "none");
    $(".js_submit").on('click', function() {
        let name_order = $('#name_order').val();
        let user_id = $('#user_id').val();
        let sum = $('#sum').val();

        if ($('#name_order').val().length === 0) {
            alert('Enter order name!');
            return false;
        }

        let obData = {
            NAME_ORDER: name_order,
            USER_ORDER: user_id,
            SUM: sum,
        };
        let url = '/ajax/order.php';

        $.ajax({
            type: "POST",
            url: url,
            data: obData,
            dataType: 'json',
            success: function(result) {
                console.log(result);
                if (result.length === 0) {
                    $(".js_alert").css("display", "block");
                }
            }
        });
    });

    $('.js_alert').click(function() {
        $(".js_alert").css("display", "none");
    });

    function pass_gen(len) {
        chrs = 'abdehkmnpswxzABDEFGHKMNPQRSTWXZ123456789';
        var str = '';
        for (var i = 0; i < len; i++) {
            var pos = Math.floor(Math.random() * chrs.length);
            str += chrs.substring(pos, pos + 1);
        }
        console.log(str);
    }
</script>


