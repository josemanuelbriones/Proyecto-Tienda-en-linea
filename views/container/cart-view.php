<section class="cart container my-5 py-5">
    <div class="container mt-5">
        <h2 class="font-weight-bolde">Your Cart</h2>
        <hr>
    </div>

    <table class="mt-5 pt-5">
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <tr>
            <td>
                <div class="product-info">
                    <img src="<?php echo APP_URL?>views/assets/img/products/computadora01.webp"/>
                    <div>
                        <p>White Shoes</p>
                        <small><span>$</span>1222</small>
                        <br>
                        <a href="" class="remove-btn">eliminar</a>
                    </div>
                </div>
            </td>
            <td>
                <input type="number" value="1">
                <a href="" class="edit-btn">Editar</a>
            </td>
            <td>
                <span>$</span>
                <span class="product-price">155</span>
            </td>
        </tr>
    </table>
    <div class="cart-total">
    <table>
        <tr>
            <td>Subtotal</td>
            <td>$155</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>$155</td>
        </tr>
    </table>
</div>
<div class="checkout-container">
    <button class="btn checkout-btn">Comprar</button>
</div>
</section>