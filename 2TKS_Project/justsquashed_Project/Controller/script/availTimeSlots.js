let bookedStartSlot;
let bookedEndSlot;
let bookedCourt;
let nextOccupiedSlots = [];

let timeSlots = ["06:00 - 06:30", "06:30 - 07:00", "07:00 - 07:30", "07:30 - 08:00", "08:00 - 08:30", "08:30 - 09:00", "09:00 - 09:30", "09:30 - 10:00", "10:00 - 10:30", "10:30 - 11:00", "11:00 - 11:30", "11:30 - 12:00", "12:00 - 12:30", "12:30 - 13:00", "13:00 - 13:30", "13:30 - 14:00", "14:00 - 14:30", "14:30 - 15:00", "15:00 - 15:30", "15:30 - 16:00", "16:00 - 16:30", "16:30 - 17:00", "17:00 - 17:30", "17:30 - 18:00", "18:00 - 18:30", "18:30 - 19:00", "19:00 - 19:30", "19:30 - 20:00", "20:00 - 20:30", "20:30 - 21:00", "21:00 - 21:30", "21:30 - 22:00"]; 

function bookedCourtSlots(cDate){
    let slotsBookedCount = 0;
    for(let i = 0; i < dateArr.length; i ++){
        if(dateArr[i] == cDate){
            slotsBookedCount++;
        }
    }

    bookedStartSlot = new Array(slotsBookedCount);
    bookedEndSlot = new Array(slotsBookedCount);
    bookedCourt = new Array(slotsBookedCount)
    let inCount = 0;
    for(let i = 0; i < dateArr.length; i ++){
        if(dateArr[i] == cDate){
            // GET TIMESLOT INDEX
            bookedStartSlot[inCount] = startArr[i].substr(0, 5);
            bookedEndSlot[inCount] = endArr[i].substr(0, 5);
            bookedCourt[inCount] = courtCodeArr[i];
            
            getBookedTimeSlotIndex(inCount);
            inCount++;
        }
    }
}

// GETTING INDEX
function getBookedTimeSlotIndex(countIn){
    for(let i = 0; i < timeSlots.length; i++){
        if(timeSlots[i].substr(0, 5) == bookedStartSlot[countIn]){
            bookedStartSlot[countIn] = i;
        }
    }
    for(let i = 0; i < timeSlots.length; i++){
        if(timeSlots[i].substr(0, 5) == bookedEndSlot[countIn]){
            bookedEndSlot[countIn] = i;
        }
    }
}

showAvailableTimeSlots();

// Create Time Slot Time Table
function showAvailableTimeSlots(){
    // Calling the booking array to have it ready
    let currDate = new Date();

    let dateOfMonth = zeroPadding(currDate.getDate()) + currDate.getDate();
    let monthConstruct = zeroPadding(currDate.getMonth() + 1) + (currDate.getMonth() + 1);
    let constructDate = currDate.getFullYear() +"-"+ monthConstruct +"-"+ dateOfMonth;

    bookedCourtSlots(constructDate);

    // Creating The Slots
    let ats = document.getElementById('availTimeSlots-body');
    ats.innerHTML = "";
    let amCounter = 6;
    let pmCounter = 1;
    let morning = " am";
    let afternoon = " pm";
    let slotCounter = 0;
    for(let i = 0; i < 32; i++){
        // creates a table row
        let trow = document.createElement("tr");

        //creating individual cells
        for(let j = 0; j < 9; j++){
            let tCell = document.createElement("td");
            tCell.setAttribute('style', 'text-align: center; vertical-align: middle; padding: 0px; margin: 0px;');

            if(i%2 == 0 && j%9 == 0){ //Creating time-slot headings
                tCell.setAttribute('rowspan', '2');
                tCell.setAttribute('style', 'border-color: #6b6b75');
                let tCellText;
                if(amCounter < 12){
                    tCellText = document.createTextNode(amCounter + morning);
                    amCounter++;
                }
                else if(amCounter == 12){
                    tCellText = document.createTextNode(amCounter + afternoon);
                    amCounter++;
                }                
                else if(amCounter > 12){
                    tCellText = document.createTextNode(pmCounter + afternoon);
                    pmCounter++;
                }
                tCell.appendChild(tCellText);
                trow.appendChild(tCell);
            }
            else{ //Creating empty slots
                if(i%2 > 0 && j == 8){
                    break;
                }
                tCell.setAttribute('style', 'border-color: #6b6b75');
                tCell.textContent = "_";

                for(let k = 0; k < bookedCourt.length; k++){ //Creating the booked Slots
                    if(i%2 == 0){
                        if(j == bookedCourt[k].substr(3, 4) && slotCounter == bookedStartSlot[k]){
                            tCell.setAttribute('id', 'slots');
tCell.textContent = slotCounter +"-"+ j;
                            tCell.setAttribute('style', 'width: .5em; background-color: #f44336;'); //color: #f44336;

                            // Determining which slots must be automatically booked
                            let numNext = (bookedEndSlot[k] - 1) - slotCounter;
                                for(let t = 1; t < numNext; t++){
                                    let next = {
                                        nextSlot: (slotCounter + t),
                                        nextCourt: j
                                    };
                                    nextOccupiedSlots.push(next);
                                }
                        }
                        if(j == bookedCourt[k].substr(3, 4) && slotCounter == bookedEndSlot[k]-1){
                            tCell.setAttribute('id', 'slots');
tCell.textContent = slotCounter +"-"+ j;
                            tCell.setAttribute('style', 'width: .5em; background-color: #f44336;'); //color: #f44336;
                        }
                    }
                    else if(i%2 > 0){
                        if((j + 1) == bookedCourt[k].substr(3, 4) && slotCounter == bookedStartSlot[k]){
                            tCell.setAttribute('id', 'slots');
tCell.textContent = slotCounter +"-"+ (j+1);
                            tCell.setAttribute('style', 'width: .5em; background-color: #f44336;'); //color: #f44336;

                            // Determining which slots must be automatically booked
                            let numNext = (bookedEndSlot[k] - 1) - slotCounter;
                                for(let t = 1; t < numNext; t++){
                                    let next = {
                                        nextSlot: (slotCounter + 1),
                                        nextCourt: (j + 1)
                                    };
                                    nextOccupiedSlots.push(next);
                                }
                        }
                        if((j + 1) == bookedCourt[k].substr(3, 4) && slotCounter == (bookedEndSlot[k]-1)){
                            tCell.setAttribute('id', 'slots');
tCell.textContent = slotCounter +"-"+ (j+1);
                            tCell.setAttribute('style', 'width: .5em; background-color: #f44336;'); //color: #f44336;
                        }
                    }
                }
                for(let l = 0; l < nextOccupiedSlots.length; l++){
                    // Filling out booked slots
                    if(i%2 == 0){
                        if(slotCounter == nextOccupiedSlots[l].nextSlot && j == nextOccupiedSlots[l].nextCourt){
                            tCell.textContent = slotCounter +"-"+ j;
                            tCell.setAttribute('style', 'width: .5em; background-color: #f44336;'); //color: #f44336;
                        }
                    }
                    else{
                        if(slotCounter == nextOccupiedSlots[l].nextSlot && (j + 1) == nextOccupiedSlots[l].nextCourt){
                            tCell.textContent = slotCounter +"-"+ (j+1);
                            tCell.setAttribute('style', 'width: .5em; background-color: #f44336;'); //color: #f44336;
                        }
                    }
                }
                // tCell.appendChild(tCellText);
                trow.appendChild(tCell);
            }
        }
        ats.appendChild(trow);
        slotCounter++;
    }
}

// Adding Zero at the beginning of single digits
function zeroPadding(digitChange){
    return (digitChange < 10 ? '0' : '');
}