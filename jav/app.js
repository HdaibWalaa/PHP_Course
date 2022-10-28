//security gaurd
//check queue of poople if the person is older than 18 and younger than 35 admit,otherwise apologize.
//write variables to contain the limitation of the age 
//we will loop through the queue
//if current person is younger than 18,will print (you are too yound)
//if the person is between 18 and 35 will print (you are welcome)
//ask then user for there name and welcome the user

do {
    let age = prompt("How old are you?");
    let name = prompt("what is your name?");
    if (age >= 18 && age <= 35) {
        console.log("welcome " + name);
    } else
        console.log("Apologiz " + name + " ,you cant get in");
}
while (confirm("is ther other persons")) {


}