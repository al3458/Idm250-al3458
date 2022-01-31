var x = document.getElementById("two");
x.addEventListener("mouseover", myFunction);
// x.addEventListener("click", mySecondFunction);
x.addEventListener("mouseout", myThirdFunction);



  function myFunction() {
    document.getElementById("two").style.animation="hovering 0.5s linear";
    document.getElementById("two").style.width="130%";
    document.getElementById("three").style.backgroundColor="#333333";
  }

  function myFunction2() {
    document.getElementById("three").style.animation="hovering 0.5s linear";
    document.getElementById("three").style.width="130%";
    document.getElementById("three").style.backgroundColor="#333333";
  }

  function myFunction3() {
    document.getElementById("four").style.animation="hovering 0.5s linear";
    document.getElementById("four").style.width="130%";
    document.getElementById("three").style.backgroundColor="#333333";
    }




// function mySecondFunction() {
//   document.getElementById("demo").innerHTML += "Clicked!<br>";
// }

function myThirdFunction() {
    document.getElementById("two").style.animation="hoveringOff 0.5s linear";
    document.getElementById("two").style.width="100%";
    document.getElementById("three").style.backgroundColor="#d34335";
}



  
  // function mySecondFunction() {
  //   document.getElementById("demo").innerHTML += "Clicked!<br>";
  // }
  
  function myThirdFunction2() {
      document.getElementById("three").style.animation="hoveringOff 0.5s linear";
      document.getElementById("three").style.width="100%";
      document.getElementById("three").style.backgroundColor="#66a338";

  }




// function mySecondFunction() {
//   document.getElementById("demo").innerHTML += "Clicked!<br>";
// }

function myThirdFunction3() {
    document.getElementById("four").style.animation="hoveringOff 0.5s linear";
    document.getElementById("four").style.width="100%";
    document.getElementById("three").style.backgroundColor="#8a4297";
}