const products = [
  {
    id: 1,
    name: "beans",
    description: "Heinz beans",
    price: 1.4,
    imageURL: "assets/beans.avif",
  },
  {
    id: 2,
    name: "Totatoes",
    description: "Tesco tomatoes",
    price: 0.39,
    imageURL: "assets/tomatoes.avif",
  },
  {
    id: 3,
    name: "peas",
    description: "Tesco peas",
    price: 0.5,
    imageURL: "assets/peas.avif",
  },
  {
    id: 4,
    name: "chicken soup",
    description: "Tesco chicken soup",
    price: 0.62,
    imageURL: "assets/chicken-soup.avif",
  },
  {
    id: 5,
    name: "peaches",
    description: "Tesco Peaches",
    price: 1.1,
    imageURL: "assets/peaches.avif",
  },
  {
    id: 6,
    name: "custard",
    description: "Ambrosia Custard",
    price: 1.6,
    imageURL: "assets/custard.avif",
  },
];

const productTable = document.querySelector(".product-list-table-body");

productTable.addEventListener("click", (e) => {
  const selectedRow = e.target.closest("tr");
  if (!selectedRow) return;

  // check if the current row has been clicked
  if (selectedRow.classList.contains("is-selected")) return;

  const rowId = selectedRow.getAttribute("data-tab");

  // highlight the selected row and render the product image
  highlightRow(rowId);
  renderProductImage(products[Number(rowId) - 1]);
});

// Render product data to the table
const renderProductTable = (data) => {
  let html = "";
  data.forEach((entry) => {
    html += `<tr data-tab="${entry.id}">
                <td>${entry.id}</td>
                <td>${entry.name.toUpperCase()}</td>
                <td class="is-capitalized">${entry.description}</td>
                <td class="is-italic">£${entry.price.toFixed(2)}</td>
                <td><figure class="image is-64x64">
                        <img src="${entry.imageURL}" />
                    </figure>
                </td>
            </tr>`;
  });
  return html;
};

// Highlight selected row in table
const highlightRow = (selected) => {
  const productRows = document.querySelectorAll(".table--products-body > tr");
  productRows.forEach((row) => {
    row.classList.remove("is-selected");
    if (row.getAttribute("data-tab") === selected) {
      row.classList.add("is-selected");
    }
  });
};

// Render the product image
const renderProductImage = (product) => {
  const imageElement = document.querySelector(".product-image");
  imageElement.setAttribute("src", product.imageURL);
};

productTable.innerHTML = renderProductTable(products);
