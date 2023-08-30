const formattedPrice = document.getElementById('price').getAttribute('data-price');
const price = parseInt(formattedPrice.replace(/[Rp,.]/g, ""));
const amountInput = document.getElementById('amount');
let amount = parseInt(amountInput.value);
const increaseButton = document.getElementById('increase-button');
const decreaseButton = document.getElementById('decrease-button');
const brandNewRadio = document.getElementById("brandNew");
const secondRadio = document.getElementById("second");


const updateSubtotal = () => {
    let subtotal = price * amount;
    if (secondRadio.checked) {
      subtotal *= 0.7; // apply 10% discount if secondRadio is checked
    }
    if (subtotal < 0) {
      subtotal = price * 1;
    }
    subTotal.innerText = `Rp${subtotal.toLocaleString()}`;
  };

  brandNewRadio.addEventListener("change", updateSubtotal);
  secondRadio.addEventListener("change", updateSubtotal);

  amountInput.addEventListener("change",()=>{
    if(parseInt(amountInput.value) <= 0){
        amountInput.value = 1;
    }
    updateSubtotal();
})

amountInput.addEventListener("input", ()=>{
    amount = parseInt(amountInput.value);
    if(amount <= 0){
        amountInput.value = 1;
    }
    updateSubtotal();
  });


increaseButton.addEventListener("click",()=>{
    amount++;
    amountInput.value = amount;
    updateSubtotal();
})

decreaseButton.addEventListener("click",()=>{
    if(amount > 1){
        amount--;
        amountInput.value = amount;
    }
    updateSubtotal();
})

  updateSubtotal();