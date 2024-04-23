// note: this is not a drop-in solution yet, merely a demo, with an id instead of reusable class for the wrapper etc.
const showOriginalFieldForDemo = true;

const isAndroid = true;
// see https://codepen.io/Connum/pen/xxPVQQO?editors=0010
// for detection

const fieldDateOfBirth = document.getElementById('dob');
// const fieldStyle = window.getComputedStyle(fieldDateOfBirth);
// let month_names = [ 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ];

function getAge() {
 var today = new Date();
  var birthDate = new Date(document.getElementById('bd').value)
  console.log(birthDate);
 var age = today.getFullYear() - birthDate.getFullYear();
  var m = today.getMonth() - birthDate.getMonth();
   if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
    age--;
} console.log(age);
var birthValue = document.getElementById('bdate');
console.log(birthValue);
birthValue.innerHTML =age  + ' سنة ' + m +' شهر';
birthDate.value = age;
}