const today = new Date();
let currentMonth = today.getMonth();
let currentYear = today.getFullYear();
let daysInCurrMonth = 32 - new Date(currentYear, currentMonth, 32).getDate();
let nextMonthLimit = 14 - (daysInCurrMonth - today.getDate());

let months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

let monthAndYear = document.getElementById("monthAndYear");
showCalendar(currentMonth, currentYear);

function next() {
    currentYear = (currentMonth == 11) ? currentYear + 1 : currentYear;
    currentMonth = (currentMonth + 1) % 12;
    if(today.getDate() >= 17){
        showCalendar(currentMonth, currentYear);   
    }
}

function previous() {
    currentYear = (currentMonth == 0) ? currentYear - 1 : currentYear;
    currentMonth = (currentMonth == 0) ? 11 : currentMonth - 1;
    if(currentMonth >= today.getMonth()){
        showCalendar(currentMonth, currentYear);
    }
}

function showCalendar(month, year) {

    let firstDay = (new Date(year, month));//.getDay();
    
    let daysInMonth = 32 - new Date(year, month, 32).getDate();
    
    let tbl = document.getElementById("calendar-body"); // body of the calendar

    // clearing all previous cells
    tbl.innerHTML = "";

    // filing data about month and in the page via DOM.
    monthAndYear.innerHTML = months[month] + " " + year;

    // creating all cells
    let date = today.getDate();
    let startDate = 1;
    let dateCounter = 0;
    for (let i = 0; i < 3; i++) {
        // creates a table row
        let row = document.createElement("tr");

        //creating individual cells, filing them up with data.
        for (let j = 0; j < 7; j++) {
            if (i == 0 && j < firstDay && j < today.getDay()) {
                let cell = document.createElement("td");
                let cellText = document.createTextNode("");
                cell.appendChild(cellText); //Create empty dates
                row.appendChild(cell);
            }
            else if (date > daysInMonth && month == today.getMonth()) {
                break;
            }
            // today.getDate()
            else if(dateCounter <= 14){
                dateCounter++;
                
                if(startDate > nextMonthLimit && month == (today.getMonth() + 1)){
                    break;
                }
                let cell = document.createElement("td");
                let cellText = (currentMonth == today.getMonth()) ? document.createTextNode(date) : document.createTextNode(startDate);
                //let cellText = document.createTextNode(date);
                
                cell.setAttribute('id', 'electDate');
                cell.setAttribute('style', 'cursor:pointer;');
                cell.setAttribute("onclick", "document.getElementById('booking').style.display='block';");

                if (date == today.getDate() && year == today.getFullYear() && month == today.getMonth()) {
                    cell.classList.add("bg-info");
                } // color today's date

                cell.appendChild(cellText);
                row.appendChild(cell);

                date++;
                startDate++;
            }
        }

        tbl.appendChild(row); // appending each row into calendar body.
    }
    // Select Date
    let electDate = document.querySelectorAll('#electDate');
    
    for(let i = 0; i < electDate.length; i ++){
        electDate[i].addEventListener('click', 
        function(){
        let clickedDate = electDate[i].innerText;
            
        let bookDate = document.getElementById('bookDate');

        let dateOfMonth = zeroPadding(clickedDate) + clickedDate;
        let monthConstruct = zeroPadding(today.getMonth() + 1) + (today.getMonth() + 1);
        let constructDate = today.getFullYear() +"-"+ monthConstruct +"-"+ dateOfMonth;

        bookDate.setAttribute('value', constructDate);

        console.log(constructDate);
        getClickedDate(constructDate);
        });
    }
}

// Adding Zero at the beginning of single digits
function zeroPadding(digitChange){
    return (digitChange < 10 ? '0' : '');
}