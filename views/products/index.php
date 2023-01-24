<nav>
    <h1 class="h1">Product Add</h1>

    <div class="button-area">
        <button form="product" type="submit">Save</button>
        <button>Cancel</button>
    </div>
</nav>

<!--CUSTOM LINE-->
<div class="line"></div>

<main>
    <form method=" post" id="product" class="needs-validation">
        <div class="input-area">
            <label for="sku">SKU</label>
            <input required type="text" id="sku" name="sku" />
        </div>

        <div class="input-area">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" />
        </div>

        <div class="input-area">
            <label for="price">Price ($)</label>
            <input type="text" id="price" name="price" />
        </div>

        <div class="input-area">
            <label for="productType">Type Switcher</label>
            <select name="product-type" id="productType">
                <option value="" selected></option>
                <option value="dvd">DVD</option>
                <option value="furniture">Furniture</option>
                <option value="book">Book</option>
            </select>
        </div>

        <div class="select-output">
            <div class="option option-dvd">
                <div class="input-area">
                    <label for="size">Size (MB)</label>
                    <input type="number" id="size" name="size" />
                </div>
                <p class="description">Please, provide size</p>
            </div>

            <div class="option option-furniture">
                <div class="input-area">
                    <label for="height">Height (CM)</label>
                    <input type="number" id="height" name="height" />
                </div>

                <div class="input-area">
                    <label for="width">Width (CM)</label>
                    <input type="number" id="width" name="width" />
                </div>

                <div class="input-area">
                    <label for="length">Length (CM)</label>
                    <input type="number" id="length" name="length" />
                </div>
                <p class="description">Please, provide dimensions</p>
            </div>

            <div class="option input-area option-book">
                <div class="input-area">
                    <label for="weight">Weight (CM)</label>
                    <input type="number" id="weight" name="weight" />
                </div>
                <p class="description">Please, provide weight</p>
            </div>
        </div>
    </form>


</main>