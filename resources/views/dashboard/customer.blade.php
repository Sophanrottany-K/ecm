<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>E-commerce Home with CRUD</title>
    <style>
        /* Reset and basics */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background: #f0f2f5;
            color: #333;
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 18px 25px;
            font-size: 1.9rem;
            text-align: center;
            font-weight: 700;
        }

        main.container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        /* Add product form */
        form#addProductForm {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            background: white;
            padding: 20px 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 35px;
            align-items: center;
        }

        form#addProductForm input[type="text"],
        form#addProductForm input[type="number"] {
            flex: 1 1 180px;
            padding: 12px 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 1.1rem;
        }

        form#addProductForm button {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 12px 25px;
            border-radius: 6px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            flex: 0 0 140px;
            transition: background-color 0.3s ease;
        }

        form#addProductForm button:hover {
            background-color: #0056b3;
        }

        /* Product grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 25px;
        }

        .product-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            padding: 18px 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.2s ease;
        }

        .product-card:hover {
            transform: translateY(-4px);
        }

        .product-name {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 10px;
            min-height: 52px;
            color: #222;
        }

        .product-price {
            font-size: 1.15rem;
            font-weight: 600;
            color: #28a745;
            margin-bottom: 20px;
        }

        .product-actions {
            display: flex;
            gap: 12px;
        }

        .product-actions button {
            flex: 1;
            padding: 10px 0;
            font-weight: 600;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            color: white;
            transition: background-color 0.3s ease;
        }

        .btn-edit {
            background-color: #ffc107;
            color: #212529;
        }

        .btn-edit:hover {
            background-color: #e0a800;
        }

        .btn-delete {
            background-color: #dc3545;
        }

        .btn-delete:hover {
            background-color: #b02a37;
        }

        /* Edit modal */
        #editOverlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            justify-content: center;
            align-items: center;
            z-index: 1100;
        }

        #editOverlay.active {
            display: flex;
        }

        #editForm {
            background: white;
            border-radius: 10px;
            width: 350px;
            max-width: 90vw;
            padding: 30px 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.25);
        }

        #editForm h2 {
            margin-top: 0;
            margin-bottom: 25px;
            font-size: 1.8rem;
            font-weight: 700;
            color: #222;
            text-align: center;
        }

        #editForm input[type="text"],
        #editForm input[type="number"] {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 25px;
            font-size: 1.1rem;
            border-radius: 7px;
            border: 1px solid #ccc;
        }

        #editForm .btn-group {
            display: flex;
            justify-content: space-between;
        }

        #editForm button {
            flex: 1;
            font-weight: 700;
            padding: 12px 0;
            border-radius: 7px;
            font-size: 1.1rem;
            border: none;
            cursor: pointer;
            color: white;
            transition: background-color 0.3s ease;
        }

        #editForm button.update-btn {
            background-color: #28a745;
            margin-right: 10px;
        }

        #editForm button.update-btn:hover {
            background-color: #218838;
        }

        #editForm button.cancel-btn {
            background-color: #6c757d;
        }

        #editForm button.cancel-btn:hover {
            background-color: #5a6268;
        }

        /* Responsive */
        @media (max-width: 480px) {
            form#addProductForm {
                flex-direction: column;
            }

            form#addProductForm button {
                width: 100%;
            }

            .product-actions {
                flex-direction: column;
            }

            .product-actions button {
                width: 100%;
            }

            #editForm {
                width: 90vw;
            }
        }
    </style>
</head>

<body>

    <header>
        E-Commerce User Home
    </header>

    <main class="container">
        <form id="addProductForm">
            <input type="text" id="productName" placeholder="Product Name" required />
            <input type="number" id="productPrice" placeholder="Price ($)" min="0" step="0.01" required />
            <button type="submit">Add Product</button>
        </form>

        <div class="products-grid" id="productsGrid">
            <!-- Product cards go here -->
        </div>
    </main>

    <!-- Edit modal -->
    <div id="editOverlay">
        <form id="editForm">
            <h2>Edit Product</h2>
            <input type="text" id="editProductName" required />
            <input type="number" id="editProductPrice" min="0" step="0.01" required />
            <div class="btn-group">
                <button type="button" class="cancel-btn">Cancel</button>
                <button type="submit" class="update-btn">Update</button>
            </div>
        </form>
    </div>

    <script>
        const products = [];

        const addProductForm = document.getElementById('addProductForm');
        const productsGrid = document.getElementById('productsGrid');

        const editOverlay = document.getElementById('editOverlay');
        const editForm = document.getElementById('editForm');
        const editProductName = document.getElementById('editProductName');
        const editProductPrice = document.getElementById('editProductPrice');
        const cancelBtn = editForm.querySelector('.cancel-btn');

        let currentEditIndex = null;

        function renderProducts() {
            productsGrid.innerHTML = '';
            if (products.length === 0) {
                productsGrid.innerHTML =
                    `<p style="text-align:center; font-style: italic; color: #555;">No products added yet.</p>`;
                return;
            }

            products.forEach((product, index) => {
                const card = document.createElement('div');
                card.classList.add('product-card');
                card.innerHTML = `
        <div class="product-name">${product.name}</div>
        <div class="product-price">$${product.price.toFixed(2)}</div>
        <div class="product-actions">
          <button class="btn-edit" onclick="startEdit(${index})">Edit</button>
          <button class="btn-delete" onclick="deleteProduct(${index})">Delete</button>
        </div>
      `;
                productsGrid.appendChild(card);
            });
        }

        addProductForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const name = document.getElementById('productName').value.trim();
            const price = parseFloat(document.getElementById('productPrice').value);
            if (name && !isNaN(price) && price >= 0) {
                products.push({
                    name,
                    price
                });
                addProductForm.reset();
                renderProducts();
            }
        });

        function deleteProduct(index) {
            if (confirm('Delete this product?')) {
                products.splice(index, 1);
                renderProducts();
            }
        }

        function startEdit(index) {
            currentEditIndex = index;
            editProductName.value = products[index].name;
            editProductPrice.value = products[index].price;
            editOverlay.classList.add('active');
        }

        cancelBtn.addEventListener('click', () => {
            editOverlay.classList.remove('active');
            currentEditIndex = null;
        });

        editForm.addEventListener('submit', (e) => {
            e.preventDefault();
            if (currentEditIndex !== null) {
                const newName = editProductName.value.trim();
                const newPrice = parseFloat(editProductPrice.value);
                if (newName && !isNaN(newPrice) && newPrice >= 0) {
                    products[currentEditIndex] = {
                        name: newName,
                        price: newPrice
                    };
                    editOverlay.classList.remove('active');
                    currentEditIndex = null;
                    renderProducts();
                }
            }
        });

        // Initial render
        renderProducts();

        // Expose these to window to be accessible from inline onclick
        window.startEdit = startEdit;
        window.deleteProduct = deleteProduct;
    </script>

</body>

</html>
