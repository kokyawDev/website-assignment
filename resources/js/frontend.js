import store from 'store2';
import Toastify from 'toastify-js'

window.store = store
window.Toastify = Toastify

const notiBg = {
    success: "linear-gradient(to right, #00b09b, #96c93d)"
}

// cart
window.decreaseQty = (id) => {
    let curProductTmp = document.querySelector(`.cart-product-${id}`)

    let curQtyValue = curProductTmp.querySelector('#qtyValue')

    let cart = store.get('cart')

    if(parseInt(curQtyValue.value) > 1) {
        cart = cart.map(product => {
            let prod_qty = parseInt(product.qty) - 1
            if(product.id == id) {
                return {
                    ...product,
                    qty: prod_qty
                }
            }

            return product
        })

        store.set('cart', cart)

        let curProductTmps = document.querySelectorAll(`.cart-product-${id}`)

        curProductTmps.forEach(el => {
            let elQty = el.querySelector('#qtyValue')

            elQty.value = parseInt(elQty.value) - 1
        })

        setCartQtyCountBadge(cart)

    }else {
        removeProductFromCartById(id)
    }
}

window.increaseQty = (id) => {
    let curProductTmp = document.querySelector(`.cart-product-${id}`)

    let curQtyValue = curProductTmp.querySelector('#qtyValue')

    let cart = store.get('cart')

    cart = cart.map(product => {
        if(product.id == id) {
            return {
                ...product,
                qty: parseInt(product.qty)+1
            }
        }

        return product
    })

    store.set('cart', cart)

    let curProductTmps = document.querySelectorAll(`.cart-product-${id}`)

    curProductTmps.forEach(el => {
        let elQty = el.querySelector('#qtyValue')

        elQty.value = parseInt(elQty.value) + 1
    })

    setCartQtyCountBadge(cart)
}

window.removeProductFromCartById = (id) => {
    let cart = store.get('cart')

    let curProductTmps = document.querySelectorAll(`.cart-product-${id}`)

    cart = cart.filter(product => product.id != id)

    store.set('cart', cart)

    curProductTmps.forEach(el => el.remove())

    setCartQtyCountBadge(cart)

    notify(`you have successfully removed product from your cart.`, notiBg.success)
}

window.addProductsToCart = (data) => {
    let cartContainers = document.querySelectorAll('.cartContainer')

    cartContainers.forEach(el => el.innerHTML = '')

    data.map((product) => {
        let cartProductTmp = getCartProductTmp(product)
        cartContainers.forEach(el => el.insertAdjacentHTML('beforeend', cartProductTmp))
    })

    setCartQtyCountBadge(data)
}

window.setProductToStore = (data) => {
    data.qty = 1
    let cart = store.get('cart');
    let is_product_existed = cart.some((product) => product.id == data.id)
    // console.log(data)
    if(!is_product_existed) {
        store.add('cart', data)
    }else {
        let cart_data = cart.map(product => {
            if(product.id == data.id) {
                data = {...product, qty: product.qty+1}
                return data
            }
            return product
        })

        store.set('cart', cart_data)
    }

    cart = store.get('cart')

    addProductsToCart(cart)

    notify(`${data.name} has been successfully added to your cart.`, notiBg.success)

    return data
}

window.setCartQtyCountBadge = (data) => {
    // cart product count with qty
    let qty_count = data.reduce((acc, cur) => { return acc + cur.qty}, 0)

    // total amount computation
    let total_amount = data.map(product => product.qty * (product.discounted_price ? product.discounted_price : product.price))
        .reduce((accumulator, currentValue) => accumulator + currentValue, 0)

    // badge and some text about product qty
    let yourCartQties = document.querySelectorAll('.yourCartQty')

    let cartQtyBadge = document.getElementById('cartQtyBadge')

    // total amount
    let total_amount_els = document.querySelectorAll('.totalAmount')

    yourCartQties.forEach(el => el.innerText = `${qty_count}  ${(qty_count > 1) ? 'items' : 'item'}`)

    cartQtyBadge.innerText = qty_count

    total_amount_els.forEach(el => el.innerText = `${formattedPrice(total_amount)} ${total_amount ? ' $' : ''}`)
}

window.getCartProductTmp = (data) => {
    return `
        <div class="d-sm-flex align-items-center pb-4 cart-product-${data.id}">
            <a
                class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-md-3 mb-2 mb-sm-0"
                href="/product-detail"
            ><img src="${data.thumbnail}" width="110" alt="Product"
                /></a>
            <div class="w-100 pt-1 ps-sm-4">
                <div class="d-flex">
                    <div class="me-3">
                        <h3 class="h5 mb-2">
                            <a href="shop-single.html">${data.name}</a>
                        </h3>
                        <div class="d-flex flex-wrap">
                            <div class="text-muted fs-sm me-3">
                                Color: <span class="text-dark fw-medium">Gray night</span>
                            </div>
                            <div class="text-muted fs-sm me-3">
                                Weight: <span class="text-dark fw-medium">140g</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-end ms-auto">
                        <div class="fs-5 mb-2">${'$'+ formattedPrice((data.discounted_price ? data.discounted_price : data.price))}</div>
                        <del class="text-muted ms-auto ${data.discounted_price ? '' : 'd-none'}">${'$'+ formattedPrice(data.price)}</del>
                    </div>
                </div>
                <div class="count-input ms-n3">
                    <button class="btn btn-icon fs-xl" type="button" onClick="decreaseQty(${data.id})">
                        -
                    </button>
                    <input class="form-control" type="number" id="qtyValue" value="${data.qty}" readonly />
                    <button class="btn btn-icon fs-xl" type="button" onClick="increaseQty(${data.id})">
                        +
                    </button>
                </div>
                <div class="nav justify-content-end mt-n5 mt-sm-n3">
                    <a
                        class="nav-link fs-xl p-2"
                        data-bs-toggle="tooltip"
                        title="Remove"
                        onClick='removeProductFromCartById(${data.id})'
                    >
                        <i class="ai-trash"></i>
                    </a>
                </div>
            </div>
        </div>
    `
}

// notify
function notify(text, notiBg) {
    Toastify({
        text: text,
        duration: 1000,
        // destination: "https://github.com/apvarun/toastify-js",
        newWindow: true,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            background: notiBg,
        },
        onClick: function(){},
        offset: {
            x: 50, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
            y: 10 // vertical axis - can be a number or a string indicating unity. eg: '2em'
        },
    }).showToast();
}

// change usd format
function formattedPrice(price) {
    return price.toLocaleString('en-US', {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2
    })
}

