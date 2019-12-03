//For the shopping cart

  var prodValue;
  var unitCount;
  var cart = 0;


  function addCart(){
    
    var xmlhttp;
    if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
      }
    else
      {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
        cart= xmlhttp.responseText;
        localStorage.setItem("Cart", cart);
        
        }
      }
    xmlhttp.open("POST","getTotalCost.php",true);
    xmlhttp.send();

  }//end addCart

  function updatePrice(product){
    var idx = product.selectedIndex;
    temp = product.options[idx].value;
    console.log("SQL_SUM:" + cart);
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
        document.getElementById("totalprice").innerHTML = prodValue*parseFloat(unitCount);
        
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
