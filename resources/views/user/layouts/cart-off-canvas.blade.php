<!-- Cart offcanvas-->
<div
    class="offcanvas offcanvas-end py-2 p-sm-4 p-md-5"
    id="cartOffcanvas"
    style="width: 680px">
    <!-- Title-->
    <div class="px-4 pt-3">
        <div
            class="d-flex justify-content-between align-items-center border-bottom pb-3 pb-sm-4">
            <h2 class="offcanvas-title d-flex align-items-center mb-1">
                Your cart
                <span class="fs-base fw-normal text-muted ms-3">(<span class="yourCartQty">3 items</span>)</span>
            </h2>
            <button
                class="btn-close mb-1 me-n1"
                type="button"
                data-bs-dismiss="offcanvas"
                data-bs-target="#cartOffcanvas"></button>
        </div>
    </div>
    <div class="offcanvas-body cartContainer"></div>
    <!-- Coupon input + total-->
    <div class="px-4 pb-3 pb-sm-4 pb-sm-5">
        <div class="d-sm-flex align-items-center justify-content-end border-top pt-4">
            <div class="d-flex align-items-center justify-content-center">
              <span class="fs-xl me-3">Total:</span
              ><span class="h3 mb-0 totalAmount">0</span>
            </div>
        </div>
    </div>
    <!-- Action buttons-->
    <div
        class="d-flex align-items-center justify-content-between px-4 pb-3">
        <div class="nav d-none d-sm-block">
            <a
                class="nav-link fw-semibold px-0"
                href="shop-single.html#cartOffcanvas"
                data-bs-dismiss="offcanvas"
            ><i class="ai-chevron-left fs-xl me-2"></i>Back to shop</a
            >
        </div>
        <a
            class="btn btn-lg btn-primary w-100 w-sm-auto"
            href="{{ route('checkout') }}"
        >Proceed to checkout<i class="ai-chevron-right ms-2 me-n1"></i
            ></a>
    </div>
</div>
