var tableOfPeople = [];
var randomNumber = [];

function Person(name, gender) {

    this.name   = name;
    this.gender = gender;
    this.cache  = null;

    this.generateDivFromPerson = function() {
        
        if ( this.cache == null ) {
            var newDiv  = document.createElement('div');
            var newP    = document.createElement('p');
            var newImg  = document.createElement('img');
            
            newDiv.className= "randomPlace_person_div"
            newP.innerText  = this.name;
            if (this.gender === "F") {
                newImg.src      = "img/user_female.png";
            } else {
                newImg.src      = "img/user.png";                
            }

            newDiv.appendChild(newImg);
            newDiv.appendChild(newP);

            this.cache = newDiv;
        }
        
        return this.cache;
    }
}

function generateRandomNumber() {

    removeNumber();

    do {
        var random = Math.floor((Math.random() * 11) +1)
    
        if (!(randomNumber.includes(random))) {
            randomNumber.push(random);
        }
    
    } while(randomNumber.length < 9);    

    for ( var key in tableOfPeople ) {
        document.getElementById('randomPlace_desk_'+randomNumber[key]).appendChild(tableOfPeople[key].generateDivFromPerson());
    }
}

function removeNumber() {
    while(randomNumber.length != 0) {
        randomNumber.pop();
    }
}

tableOfPeople[0] = new Person("Thomas", "M");
tableOfPeople[1] = new Person("Martin", "M");
tableOfPeople[2] = new Person("Flavien", "M");
tableOfPeople[3] = new Person("Sonia", "F");
tableOfPeople[4] = new Person("Cynthia", "F");
tableOfPeople[5] = new Person("Rachid", "M");
tableOfPeople[6] = new Person("Samy", "M");
tableOfPeople[7] = new Person("Alex", "M");
tableOfPeople[8] = new Person("Julie", "F");

generateRandomNumber();