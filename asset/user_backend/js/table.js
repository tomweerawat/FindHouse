function show_table(id) {
    if(id == 1) { // ถ้าเลือก radio button 1 ให้โชว์ table 1 และ ซ่อน table 2
        document.getElementById("table_1").style.display = "";
        document.getElementById("table_2").style.display = "none";
        document.getElementById("table_3").style.display = "none";
      }
    else if(id == 2) { // ถ้าเลือก radio button 2 ให้โชว์ table 2 และ ซ่อน table 1
        document.getElementById("table_1").style.display = "none";
        document.getElementById("table_2").style.display = "";
        document.getElementById("table_3").style.display = "none";
      }
    else if(id == 3) { // ถ้าเลือก radio button 2 ให้โชว์ table 2 และ ซ่อน table 1
        document.getElementById("table_1").style.display = "none";
        document.getElementById("table_2").style.display = "none";
        document.getElementById("table_3").style.display = "";
      }
}
