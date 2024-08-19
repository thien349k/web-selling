<div id="productModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <img id="modalImage" src="" alt="Product Image" />
    <p id="modalName"></p>
    <span id="modalDescription"></span>
    <div class="price">
      <p id="modalPrice"></p>
      <span id="modalOldPrice"></span>
    </div>
    <div class="quantity">
      <label for="modalQuantity">Choose quantity:</label>
      <input
        type="number"
        id="modalQuantity"
        name="quantity"
        min="1"
        value="1"
      />
    </div>
    <div class="buy">
      <button
        style="padding: 25px; background-color: black; color: white"
        class="add-to-cart"
      >
        Thêm vào giỏ hàng
      </button>
    </div>
  </div>
</div>