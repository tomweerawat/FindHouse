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
function show_slot(id) {
    if(id == 1) { // ถ้าเลือก radio button 1 ให้โชว์ table 1 และ ซ่อน table 2
        document.getElementById("slot_1").style.display = "";
      }
    else if(id == 2) {
      document.getElementById("slot_2").style.display = "";
      }
    else if(id == 3) {
      document.getElementById("slot_3").style.display = "";
      }
    else if(id == 4) {
      document.getElementById("slot_4").style.display = "";
      }
    else if(id == 5) {
      document.getElementById("slot_5").style.display = "";
      document.getElementById("slot_5_1").style.display = "";
      }
      else if(id == 6) {
        document.getElementById("slot_6").style.display = "";
        }
      else if(id == 7) {
        document.getElementById("slot_7").style.display = "";
        }
      else if(id == 8) {
        document.getElementById("slot_8").style.display = "";
        }
      else if(id == 9) {
        document.getElementById("slot_9").style.display = "";
        }

}
