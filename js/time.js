const weekday = ["Duminică","Luni","Marți","Miercuri","Joi","Vineri","Sâmbătă"];
const months = ["Ianuarie","Februarie","Martie","Aprilie","Mai","Iunie","Iulie","August","Septembrie","Octombrie","Noiembrie","Decembrie"];

const d = new Date();
let day_str = weekday[d.getDay()];
let day_int = d.getDate()
let month_str = months[d.getMonth()];
let year = d.getFullYear()

let time_loc = document.querySelector(".date")
time_loc.innerHTML = day_str + ", " + day_int + " " + month_str + " " + year

//Sâmbătă, 18 Decembrie 2021

