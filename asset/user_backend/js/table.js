// function show_table(id) {
//     if(id == 1) {
//         document.getElementById("table_1").style.display = "";
//         document.getElementById("table_2").style.display = "none";
//         document.getElementById("table_3").style.display = "none";
//         document.getElementById("table_4").style.display = "none";
//       }
//     else if(id == 2) {
//         document.getElementById("table_1").style.display = "none";
//         document.getElementById("table_2").style.display = "";
//         document.getElementById("table_3").style.display = "none";
//         document.getElementById("table_4").style.display = "none";
//       }
//     else if(id == 3) {
//         document.getElementById("table_1").style.display = "none";
//         document.getElementById("table_2").style.display = "none";
//         document.getElementById("table_3").style.display = "";
//         document.getElementById("table_4").style.display = "none";
//       }
//     else if(id == 5) {
//         document.getElementById("table_1").style.display = "none";
//         document.getElementById("table_2").style.display = "none";
//         document.getElementById("table_3").style.display = "none";
//         document.getElementById("table_4").style.display = "";
//       }
// }

function show_table(id){
  switch(id){
    case id==1:
                document.getElementById("table_1").style.display = "";
                document.getElementById("table_2").style.display = "none";
                document.getElementById("table_3").style.display = "none";
      break;
    case id==2:
                document.getElementById("table_1").style.display = "none";
                document.getElementById("table_2").style.display = "";
                document.getElementById("table_3").style.display = "none";
      break;
    case id==3:
                document.getElementById("table_1").style.display = "none";
                document.getElementById("table_2").style.display = "none";
                document.getElementById("table_3").style.display = "";
      break;
      // case id==4:
      //           document.getElementById("table_1").style.display = "none";
      //           document.getElementById("table_2").style.display = "none";
      //           document.getElementById("table_3").style.display = "none";
      //           document.getElementById("table_4").style.display = "";
      //   break;
  }
}
