//For the shopping cart

  var prodValue;
  var unitCount;
  var total;
  var cart = 0;


  function addCart(){

    cart = cart + total
    console.log("Cart Total:" + cart);
    localStorage.setItem("Cart", cart);
    console.log(localStorage);

  }//end addCart

  function updatePrice(product){
    var idx = product.selectedIndex;
    temp = product.options[idx].value;
    console.log(temp);
    if (temp != "null" && !isNaN(temp)) {
      document.getElementById("unitprice").innerHTML = temp;
      prodValue = parseFloat(temp);
      if (!isNaN(unitCount)) {
        updateTotal();
      }
    }else{
      document.getElementById("unitprice").innerHTML = "";
      document.getElementById("totalprice").innerHTML = "";
    }
  }
  function updateTotal(){
    unitCount = document.getElementById("units").value;
    console.log(prodValue);
    console.log(parseFloat(unitCount));
    if (!isNaN(parseFloat(unitCount)) && !isNaN(prodValue)) {
        total = document.getElementById("totalprice").innerHTML = prodValue*parseFloat(unitCount);
        
    }else{
      document.getElementById("totalprice").innerHTML = "";
    }
  }

//For checkout

function getTotal(){

  var totalAmt = localStorage.getItem("Cart");
  var totalTax = (totalAmt * .08).toFixed(2);
  var totalShipping = (totalAmt *.03).toFixed(2);
  var due = (parseFloat(totalAmt) + parseFloat(totalTax) + parseFloat(totalShipping)).toFixed(2);

  document.getElementById("shopAmnt").innerHTML = totalAmt;
  document.getElementById("totalTax").innerHTML = totalTax;
  document.getElementById("shipAmnt").innerHTML = totalShipping;
  document.getElementById("totalAmnt").innerHTML = due;

}//end getTotal


function validateCard(){

  var cardNum = document.getElementById("ccnumber").value;

  console.log(cardNum);

  if(isNaN(parseInt(cardNum))){
    console.log("Invalid card number");
    alert("Invalid card number")
    return false;
  }

  if(cardNum.length < 16){
    console.log("Invalid length");
    alert("Invalid length")
    return false
  }

  console.log("valid");
  return true;

}//end validateCard

function validateDate(){

  ccdate = document.getElementById("cexperation").value;
  console.log(ccdate);
  
  var format = false;

  //check if it has a /
  for(var i = 0; i < ccdate.length; i++){

    if(ccdate[i] == "/"){

      format = true;
    }

  }//end for
  
  if(format == true){

    var parts = ccdate.split("/");
    
    var month = parts[0];
    var year = parts[1];

    //check if date is valid
    if(month == 0 || month > 12 || year < 2018){

      //date is wrong

      return false;

    }
      //date is correct

      return true;

  
  }//end if

  return format;


}//end validateDate

function confirmPage(){

  var ConfirmTotal = localStorage.getItem("Cart");
  var address;

  console.log("Confirm Page");

  confirm("Order Summary:\n\n" +
          "Products: \n" +
          "Total: $" + ConfirmTotal +
          "\nAddress: ");

}//end confirmPage