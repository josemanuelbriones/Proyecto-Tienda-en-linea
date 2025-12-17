<section class="my-5 py-5">
    <div class="row container mx-auto">
        <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
            <h3 class="font-weight-bold">Account info</h3>
            <hr class="mx-auto">
            <div class="account-info">
                <p>Name<span>John</span></p>
                <p>Email<span>john@email.com</span></p>
                <p><a href="" id="order-btn">Your orders</a></p>
                <p><a href="" id="logout-btn">Logout</a></p>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 ">
            <form id="account-form">
                <h3>Change Password</h3>
                <hr class="mx-auto">
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="account-password" name="password"
                        placeholder="contrasena" required>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" id="account-password-confirm" name="firmpassword"
                        placeholder="confirmar contrasena" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Change Password" class="btn" id="change-pass-btn">
                </div>
            </form>
        </div>
    </div>
</section>

<section class="orders container my-5 py-5">
    <div class="container mt-5">
        <h2 class="font-weight-bolde text-center">Orden</h2>
        <hr class="mx-auto">
    </div>

    <table class="mt-5 pt-5">
        <tr>
            <th>Producto</th>
            <th>Fecha</th>
        </tr>
        <tr>
            <td>
                <div class="product-info">
                    <img src="<?php echo APP_URL?>views/assets/img/products/computadora01.webp" />
                    <div>
                        <p>White Shoes</p>
                        <small><span>$</span>1222</small>
                        <br>
                    </div>
                </div>
            </td>
            <td>
                <span>2025-04-03</span>
            </td>


        </tr>
    </table>
</section>