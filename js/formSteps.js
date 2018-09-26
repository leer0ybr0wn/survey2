var currentTab = 0;
showTab(currentTab); // Display the current tab

function nextBtnActive() {
  document.getElementById("nextBtn").style.opacity = "1";
}

function showTab(n) {
  // This function will display the specified tab of the form
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.visibility = "hidden";
  } else {
    document.getElementById("prevBtn").style.visibility = "visible";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
    nextBtnActive();
  } else {
    document.getElementById("nextBtn").innerHTML = "Next<i class='fas fa-chevron-right'></i>";
    document.getElementById("nextBtn").style.opacity = "0.25";
  }
  // and update the current & total number of questions:
  document.getElementById("currentq").innerHTML = currentTab + 1;
  document.getElementById("totalqs").innerHTML = x.length;
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Show the spinner:
  document.getElementById("waiting").style.display = "block";
  setTimeout(displayDelay, 300);
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form :
  if (currentTab >= x.length) {
    // the form gets submitted:
    document.getElementById("surveyForm").submit();
    document.getElementById("waiting").style.display = "block";
    return true;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function displayDelay() {
  document.getElementById("waiting").style.display = "none";
}

function validateForm() {
  var x, y, i, valid = false;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    if (y[i].type == "radio" && y[i].checked == true || x[currentTab].getElementsByTagName("textarea").length > 0 ) {
      valid = true;
    }
  }
  if (valid) {
    nextBtnActive();
  } else {
    document.getElementById("nextBtn").style.opacity = "0.25";
  }
  return valid;
}

var inputs = document.getElementsByTagName("label");
for(var i = 0, len = inputs.length; i < len; i++) {
  inputs[i].onclick = function () {
    nextBtnActive();
  }
}