// Helper 1: send a GET request and show the reply inside a div
function sendGet(url, outputId) {
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    // readyState 4 = request finished, status 200 = server replied OK
    if (xhr.readyState == 4 && xhr.status == 200) {
      document.getElementById(outputId).innerHTML = xhr.responseText;
    }
  };
  xhr.open("GET", url, true);
  xhr.send();
}

// Helper 2: send a whole form using POST (needed for password and file upload)
function sendPost(url, formId, outputId) {
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      document.getElementById(outputId).innerHTML = xhr.responseText;
    }
  };
  var data = new FormData(document.getElementById(formId));
  xhr.open("POST", url, true);
  xhr.send(data);
}

// Q1
function showHello() {
  sendGet("q1.php", "out1");
}

// Q2
function showGrade() {
  var marks = document.getElementById("marks").value;
  sendGet("q2.php?marks=" + marks, "out2");
}

// Q3
function showOdd() {
  var n = document.getElementById("oddN").value;
  sendGet("q3.php?n=" + n, "out3");
}

// Q4 (i)
function showSorted() {
  var nums = document.getElementById("nums").value;
  sendGet("q4.php?type=sort&nums=" + nums, "out4a");
}

// Q4 (ii)
function showAnimals() {
  var n = document.getElementById("animalN").value;
  sendGet("q4.php?type=animals&n=" + n, "out4b");
}

// Q5
function sendFeedback() {
  sendPost("q5.php", "myForm", "out5");
}

// Q6
function showImages() {
  var n = document.getElementById("imgN").value;
  sendGet("q6.php?n=" + n, "out6");
}